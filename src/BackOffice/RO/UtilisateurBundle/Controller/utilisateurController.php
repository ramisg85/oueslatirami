<?php

namespace BackOffice\RO\UtilisateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Intl\Locale;
use BackOffice\RO\UtilisateurBundle\Entity\UtilisateurRole;
use BackOffice\RO\UtilisateurBundle\Entity\Utilisateur;
use BackOffice\RO\UtilisateurBundle\Entity\Role;
use BackOffice\RO\UtilisateurBundle\Form\UtilisateurType;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use APY\DataGridBundle\Grid\Source\Entity;
use APY\DataGridBundle\Grid\Action\DeleteMassAction;
use APY\DataGridBundle\Grid\Action\RowAction;
use APY\DataGridBundle\Grid\Export\CSVExport;
use APY\DataGridBundle\Grid\Export\ExcelExport;
use APY\DataGridBundle\Grid\Column\TextColumn;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class utilisateurController extends Controller {

    public function lister_utilisateurAction() {
        if (false === $this->get('security.authorization_checker')->isGranted('ROLE_ADMIN') && false === $this->get('security.authorization_checker')->isGranted('ROLE_SUPER_ADMIN')) {
            throw new AccessDeniedException();
        }

        // Creates a simple grid based on your entity (ORM)
        $source = new Entity('ROUtilisateurBundle:Utilisateur');

        // Get a Grid instance
        $grid = $this->get('grid');

        //Récupération du repository utilisateur
        $utilisateurRepository = $this->getDoctrine()
                ->getManager()
                ->getRepository('ROUtilisateurBundle:Utilisateur');

        //Dire au dataGrid que la source sera différente du paramétrage onnataion de l'entité modéle
        $utilisateurQueryBuilder = $utilisateurRepository->loadUserForGrid();
        $source->initQueryBuilder($utilisateurQueryBuilder);

        //Création de la colonne avec les roles concaténé
        $rolesColumn = new TextColumn(array('id' => 'concatNomRole', 'title' => 'Rôles', 'filterable' => false, 'sortable' => false));
        $grid->addColumn($rolesColumn);

        // Attach the source to the grid
        $grid->setSource($source);

        //Création de la possiblité d'exporter le listing au format CSV
        $grid->addExport(new CSVExport('CSV Export', 'Export utilisateur CSV'));
        $grid->addExport(new ExcelExport('XLS Export', 'Export utilisateur XLS'));

        //Message a afficher si la valeur de l'attribut est vide
        $grid->setNoDataMessage(' - ');

        //Message a afficher si le listing ne contient aucune ligne
        $grid->setNoResultMessage('Aucun resultat trouvé');

        //GESTION DES ACTION DE LA COLONNE DE DROITE
        //Ajout de l'action d'ajout utilisateur
        $rowDetailAction = new RowAction('', 'ro_utilisateur_detail', false, '_self', array('class' => 'btn btn-primary'), array('class' => 'glyphicon glyphicon-eye-open', 'title' => 'Détail utilisateur'));
        $grid->addRowAction($rowDetailAction);

        //Ajout de l'action de modification utilisateur
        $rowUpdateAction = new RowAction('', 'ro_utilisateur_edit', false, '_self', array('class' => 'btn btn-success'), array('class' => 'glyphicon glyphicon-edit glyphicon-white', 'title' => 'Modifier utilisateur'));
        $grid->addRowAction($rowUpdateAction);

        //Ajout de l'action de suppression utilisateur
        $rowDeleteAction = new RowAction('', 'ro_utilisateur_delete', true, '_self', array('class' => 'btn btn-danger'), array('class' => 'glyphicon glyphicon-trash glyphicon-white', 'title' => 'Supprimer utilisateur'));

        //Message de confirmation de suppression
        $rowDeleteAction->setConfirmMessage('Etes vous sur de vouloir supprimer cet utilisateur ?');
        $grid->addRowAction($rowDeleteAction);

        //GESTION DES MASS ACTION
        //Mass action,traitement sur plusieur ligne en les cochant,ici on crée un bouton de suppresssion
        $grid->addMassAction(new DeleteMassAction());

        // Return the response of the grid to the template
        return $grid->getGridResponse('ROUtilisateurBundle:utilisateur:lister_utilisateur.html.twig');
    }

    public function add_utilisateurAction() {
        $utilisateur = new Utilisateur();
        $role = new Role();

        $form = $this->add_utilisateurForm($utilisateur);
        $request = $this->getRequest();

        $em = $this->getDoctrine()->getEntityManager();

        //Vérifier si le formulaire a bien été submité
        if ($request->getMethod() == 'POST') {

            if (null !== $request) {
                $dataForm = $request->request->get('ro_utilisateur_utilisateurtype');

                //Récupération des role poster à la création du compte utilisateur
                $rolesCocher = $dataForm['roles'];

                //Récupération du mot de passe poster à la création du compte utilisateur
                $password = $dataForm['mdp_utilisateur']['first'];

                //Récupération de l'id agence
                $id_agence = $dataForm['agence'];

                //Créationde l'utilisateur
                $form->handleRequest($request);
                $factory = $this->get('security.encoder_factory');
                $encoder = $factory->getEncoder($utilisateur);
                $motDePasse = $encoder->encodePassword($password, $utilisateur->getSalt());
                $utilisateur->setMdpUtilisateur($motDePasse);

                //Récupération de l'objet agence en fonction de l'id retourné par le formulaire
                $agence = $em->getRepository('ROAgenceBundle:Agence')->findOneById($id_agence);

                $utilisateur->setAgence($agence);

                $listRolesDb = $this->getDoctrine()
                        ->getRepository('ROUtilisateurBundle:Role')
                        ->findAll();

                if ($form->isValid()) {

                    //Persister l'utilisateur
                    $em->persist($utilisateur);
                    $em->flush();

                    foreach ($rolesCocher as $roleCocher) {
                        foreach ($listRolesDb as $roleDb) {
                            if ($roleDb->getNomRole() == $roleCocher) {
                                $roleDb->setNomRole($roleCocher);

                                $utilisateurRole = new UtilisateurRole();
                                $utilisateurRole->setRole($roleDb);
                                $utilisateurRole->setUtilisateur($utilisateur);

                                //Persister les enregistrement dans la table porteuse de données
                                $em->persist($utilisateurRole);
                            }
                        }
                    }

                    $em->flush();

                    //Création du flasMessage suite au succés de l'ajout d'un utilisateur
                    $session = $this->get('session');
                    $session->getFlashBag()->add('info', 'Ajout utilisateur effectuée avec succées !');

                    return $this->redirect($this->generateUrl('ro_utilisateur_homepage'));
                }
            }
        }
        return $this->render('ROUtilisateurBundle:utilisateur:add_utilisateur.html.twig', array(
                    'entity' => $utilisateur,
                    'form' => $form->createView()
        ));
    }

    /**
     * Creates a form to create a Utilisateur entity.
     *
     * @param Utilisateur $utilisateur The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function add_utilisateurForm(Utilisateur $utilisateur) {
        $form = $this->createForm(new UtilisateurType(), $utilisateur, array(
            'action' => $this->generateUrl('ro_utilisateur_add', array()),
            'method' => 'POST',
        ));
        return $form;
    }

    public function edit_utilisateurAction($id) {
        $em = $this->getDoctrine()->getEntityManager();

        $utilisateur = $em->getRepository('ROUtilisateurBundle:Utilisateur')->find($id);
        $form = $this->edit_utilisateurForm($utilisateur);

        //Vérification si l'utilisateur exisite bien
        if (!$utilisateur) {
            throw $this->createNotFoundException('Utilisateur introuvable.');
        }

        $request = $this->getRequest();

        //Vérifier si le formulaire a bien été submité
        if ($request->getMethod() == 'POST') {

            //Récupération des données posté
            if (null !== $request) {
                $dataForm = $request->request->get('ro_utilisateur_utilisateurtype');

                //Récupération des role poster à la création du compte utilisateur
                $rolesCocher = $dataForm['roles'];

                //Récupération du mot de passe poster à la création du compte utilisateur
                $password = $dataForm['mdp_utilisateur']['first'];

                //Récupération de l'id entreprise
                $id_agence = $dataForm['agence'];

                //Créationde l'utilisateur
                $form->handleRequest($request);
                $factory = $this->get('security.encoder_factory');
                $encoder = $factory->getEncoder($utilisateur);
                $motDePasse = $encoder->encodePassword($password, $utilisateur->getSalt());
                $utilisateur->setMdpUtilisateur($motDePasse);
                
                //Récupération de l'objet agence en fonction de l'id retourné par le formulaire
                $agence = $em->getRepository('ROAgenceBundle:Agence')->findOneById($id_agence);

                $listRolesDb = $this->getDoctrine()
                        ->getRepository('ROUtilisateurBundle:Role')
                        ->findAll();

                foreach ($utilisateur->getRoles() as $roleAncien) {
                    $utilisateur->removeRole($roleAncien);
                }

                //Suppression des vieux role de l'utilisateur en cours de modification
                $em->flush();

                foreach ($rolesCocher as $roleCocher) {
                    foreach ($listRolesDb as $roleDb) {
                        if ($roleDb->getNomRole() == $roleCocher) {
                            $roleDb->setNomRole($roleCocher);

                            $utilisateurRole = new UtilisateurRole();
                            $utilisateurRole->setRole($roleDb);
                            $utilisateurRole->setUtilisateur($utilisateur);

                            //Persister les enregistrement dansla table porteuse de données
                            $em->persist($utilisateurRole);
                        }
                    }
                }


                //\Doctrine\Common\Util\Debug::dump($utilisateur);
                //die;
                if ($form->isValid()) {
                    $em->persist($utilisateur);
                    $em->flush();

                    //Création du flasMessage suite au succés de l'ajout d'un utilisateur
                    $session = $this->get('session');
                    $session->getFlashBag()->add('info', 'Modification utilisateur effectuée avec succées !');

                    return $this->redirect($this->generateUrl('ro_utilisateur_homepage'));
                }
            }
        }
        return $this->render('ROUtilisateurBundle:utilisateur:edit_utilisateur.html.twig', array(
                    'entity' => $utilisateur,
                    'form' => $form->createView()
        ));
    }

    /**
     * Creates a form to edit a Utilisateur entity.
     *
     * @param Utilisateur $utilisateur The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function edit_utilisateurForm(Utilisateur $utilisateur) {

        //UtilisateurType prends en paramétre $utilisateur pour le transférer ensuite à RoleType afin de cocher les rôles correspondants à l'utlisateur à modifier
        $form = $this->createForm(new UtilisateurType($utilisateur), $utilisateur, array(
            'action' => $this->generateUrl('ro_utilisateur_edit', array('id' => $utilisateur->getId())),
            'method' => 'POST',
        ));
        return $form;
    }

    public function delete_utilisateurAction($id) {
        $em = $this->getDoctrine()->getEntityManager();
        $utilisateur = $em
                ->getRepository('ROUtilisateurBundle:Utilisateur')
                ->find($id);
        $em->remove($utilisateur);
        $em->flush();

        //Création du flasMessage suite au succés de la suppression d'un utilisateur
        $session = $this->get('session');
        $session->getFlashBag()->add('info', 'Suppression utilisateur effectuée avec succées !');

        return $this->redirect($this->generateUrl('ro_utilisateur_homepage'));
    }

    /**
     * Finds and displays a Utilisateur entity.
     *
     * @Route("/{id}", name="ro_utilisateur_detail")
     * @Method("GET")
     * @Template()
     */
    public function detail_utilisateurAction($id) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('ROUtilisateurBundle:Utilisateur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Utilisateur entity.');
        }

        return array('entity' => $entity);
    }

    public function connexion_utilisateurAction() {
        $request = $this->getRequest();
        $session = $request->getSession();
        // get the login error if there is one
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }

        //Création des variables de session
        //Local pour la traduction et récupération des fichier XLLIF
        //$this->get('session')->set('_locale', 'fr');

        Locale::setDefaultFallback('fr');

        return $this->render('ROUtilisateurBundle:utilisateur:connexion_utilisateur.html.twig', array(
                    'error' => $error,
        ));
    }

}
