<?php

namespace BackOffice\RO\AgenceBundle\Controller;

use BackOffice\RO\AgenceBundle\Entity\Agence;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use APY\DataGridBundle\Grid\Source\Entity;
use APY\DataGridBundle\Grid\Action\DeleteMassAction;
use APY\DataGridBundle\Grid\Action\RowAction;
use APY\DataGridBundle\Grid\Export\CSVExport;
use APY\DataGridBundle\Grid\Export\ExcelExport;
use BackOffice\RO\AgenceBundle\Form\AgenceType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Agence controller.
 *
 */
class agenceController extends Controller {

    /**
     * Lists all agence entities.
     *
     */
    public function lister_agenceAction() {
        if (false === $this->get('security.authorization_checker')->isGranted('ROLE_ADMIN') && false === $this->get('security.authorization_checker')->isGranted('ROLE_SUPER_ADMIN')) {
            throw new AccessDeniedException();
        }

        // Creates a simple grid based on your entity (ORM)
        $source = new Entity('ROAgenceBundle:Agence');

        // Get a Grid instance
        $grid = $this->get('grid');

        //Récupération du repository agence
        $agenceRepository = $this->getDoctrine()
                ->getManager()
                ->getRepository('ROAgenceBundle:Agence');

        //Dire au dataGrid que la source sera différente du paramétrage annotation de l'entité modéle
        $agenceQueryBuilder = $agenceRepository->loadAgenceForGrid();
        $source->initQueryBuilder($agenceQueryBuilder);

        // Attach the source to the grid
        $grid->setSource($source);

        //Création de la possiblité d'exporter le listing au format CSV
        $grid->addExport(new CSVExport('CSV Export', 'Export agence CSV'));
        $grid->addExport(new ExcelExport('XLS Export', 'Export agence XLS'));

        //Message a afficher si la valeur de l'attribut est vide
        $grid->setNoDataMessage(' - ');

        //Message a afficher si le listing ne contient aucune ligne
        $grid->setNoResultMessage('Aucun resultat trouvé');

        //GESTION DES ACTION DE LA COLONNE DE DROITE
        //Ajout de l'action d'ajout agence
        $rowDetailAction = new RowAction('', 'ro_agence_detail', false, '_self', array('class' => 'btn btn-primary'), array('class' => 'glyphicon glyphicon-eye-open', 'title' => 'Détail agence'));
        $grid->addRowAction($rowDetailAction);

        //Ajout de l'action de modification agence
        $rowUpdateAction = new RowAction('', 'ro_agence_edit', false, '_self', array('class' => 'btn btn-success'), array('class' => 'glyphicon glyphicon-edit glyphicon-white', 'title' => 'Modifier agence'));
        $grid->addRowAction($rowUpdateAction);

        //Ajout de l'action de suppression agence
        $rowDeleteAction = new RowAction('', 'ro_agence_delete', true, '_self', array('class' => 'btn btn-danger'), array('class' => 'glyphicon glyphicon-trash glyphicon-white', 'title' => 'Supprimer agence'));

        //Message de confirmation de suppression
        $rowDeleteAction->setConfirmMessage('Etes vous sur de vouloir supprimer cette agence ?');
        $grid->addRowAction($rowDeleteAction);

        //GESTION DES MASS ACTION
        //Mass action,traitement sur plusieur ligne en les cochant,ici on crée un bouton de suppresssion
        $grid->addMassAction(new DeleteMassAction());

        // Return the response of the grid to the template
        return $grid->getGridResponse('ROAgenceBundle:agence:lister_agence.html.twig');
    }

    public function add_agenceAction() {
        $agence = new Agence();

        $form = $this->add_agenceForm($agence);
        $request = $this->getRequest();

        $em = $this->getDoctrine()->getEntityManager();

        //Vérifier si le formulaire a bien été submité
        if ($request->getMethod() == 'POST') {

            if (null !== $request) {
                $dataForm = $request->request->get('ro_agence_agencetype');

                //Créationde l'agence
                $form->handleRequest($request);

                if ($form->isValid()) {

                    //Persister l'agence
                    $em->persist($agence);
                    $em->flush();

                    //Création du flasMessage suite au succés de l'ajout d'un agence
                    $session = $this->get('session');
                    $session->getFlashBag()->add('info', 'Ajout agence effectuée avec succées !');

                    return $this->redirect($this->generateUrl('ro_agence_homepage'));
                }
            }
        }
        return $this->render('ROAgenceBundle:agence:add_agence.html.twig', array(
                    'entity' => $agence,
                    'form' => $form->createView()
        ));
    }

    /**
     * Creates a form to create a Agence entity.
     *
     * @param Agence $agence The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function add_agenceForm(Agence $agence) {
        $form = $this->createForm(new AgenceType(), $agence, array(
            'action' => $this->generateUrl('ro_agence_add', array()),
            'method' => 'POST',
        ));
        return $form;
    }

    public function edit_agenceAction($id) {
        $em = $this->getDoctrine()->getEntityManager();

        $agence = $em->getRepository('ROAgenceBundle:Agence')->find($id);
        $form = $this->edit_agenceForm($agence);

        //Vérification si l'agence exisite bien
        if (!$agence) {
            throw $this->createNotFoundException('Agence introuvable.');
        }

        $request = $this->getRequest();

        //Vérifier si le formulaire a bien été submité
        if ($request->getMethod() == 'POST') {

            if (null !== $request) {
                $dataForm = $request->request->get('ro_agence_agencetype');

                //Création de l'agence
                $form->handleRequest($request);

                if ($form->isValid()) {

                    //Persister l'agence
                    $em->persist($agence);
                    $em->flush();

                    //Création du flasMessage suite au succés de l'ajout d'un agence
                    $session = $this->get('session');
                    $session->getFlashBag()->add('info', 'Modification agence effectuée avec succées !');

                    return $this->redirect($this->generateUrl('ro_agence_homepage'));
                }
            }
        }
        return $this->render('ROAgenceBundle:agence:edit_agence.html.twig', array(
                    'entity' => $agence,
                    'form' => $form->createView()
        ));
    }

    /**
     * Creates a form to edit a agence entity.
     *
     * @param Agence $agence The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function edit_agenceForm(Agence $agence) {

        //AgenceType prends en paramétre $agence
        $form = $this->createForm(new AgenceType($agence), $agence, array(
            'action' => $this->generateUrl('ro_agence_edit', array('id' => $agence->getId())),
            'method' => 'POST',
        ));
        return $form;
    }

    public function delete_agenceAction($id) {
        $em = $this->getDoctrine()->getEntityManager();
        $agence = $em
                ->getRepository('ROAgenceBundle:Agence')
                ->find($id);
        $em->remove($agence);
        $em->flush();

        //Création du flasMessage suite au succés de la suppression d'une agence
        $session = $this->get('session');
        $session->getFlashBag()->add('info', 'Suppression d\'agence effectuée avec succées !');

        return $this->redirect($this->generateUrl('ro_agence_homepage'));
    }

    /**
     * Finds and displays a agence entity.
     *
     * @Route("/{id}", name="ro_agence_detail")
     * @Method("GET")
     * @Template()
     */
    public function detail_agenceAction($id) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('ROAgenceBundle:Agence')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Agence entity.');
        }

        return array('entity' => $entity);
    }

}
