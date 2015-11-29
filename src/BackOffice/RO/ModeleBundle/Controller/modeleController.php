<?php

namespace BackOffice\RO\ModeleBundle\Controller;

use BackOffice\RO\ModeleBundle\Entity\Modele;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use APY\DataGridBundle\Grid\Source\Entity;
use APY\DataGridBundle\Grid\Column\TextColumn;
use APY\DataGridBundle\Grid\Action\DeleteMassAction;
use APY\DataGridBundle\Grid\Action\RowAction;
use APY\DataGridBundle\Grid\Export\CSVExport;
use APY\DataGridBundle\Grid\Export\ExcelExport;
use BackOffice\RO\ModeleBundle\Form\ModeleType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Modele controller.
 *
 */
class modeleController extends Controller {

    /**
     * Lists all modele entities.
     *
     */
    public function lister_modeleAction() {
        if (false === $this->get('security.authorization_checker')->isGranted('ROLE_ADMIN') && false === $this->get('security.authorization_checker')->isGranted('ROLE_SUPER_ADMIN')) {
            throw new AccessDeniedException();
        }

        // Creates a simple grid based on your entity (ORM)
        $source = new Entity('ROModeleBundle:Modele');

        // Get a Grid instance
        $grid = $this->get('grid');

        //Récupération du repository modele
        $modeleRepository = $this->getDoctrine()
                ->getManager()
                ->getRepository('ROModeleBundle:Modele');

        //Dire au dataGrid que la source sera différente du paramétrage annotation de l'entité modéle
        $modeleQueryBuilder = $modeleRepository->loadModeleForGrid();
        $source->initQueryBuilder($modeleQueryBuilder);

        //Ajout de la colonne Marque
        $MarqueColumn = new TextColumn(array('id' => 'nomMarque', 'title' => 'Marque', 'filterable' => false, 'sortable' => true));
        $grid->addColumn($MarqueColumn);

        // Attach the source to the grid
        $grid->setSource($source);

        //Création de la possiblité d'exporter le listing au format CSV
        $grid->addExport(new CSVExport('CSV Export', 'Export modéle CSV'));
        $grid->addExport(new ExcelExport('XLS Export', 'Export modéle XLS'));

        //Message a afficher si la valeur de l'attribut est vide
        $grid->setNoDataMessage(' - ');

        //Message a afficher si le listing ne contient aucune ligne
        $grid->setNoResultMessage('Aucun resultat trouvé');

        //GESTION DES ACTION DE LA COLONNE DE DROITE
        //Ajout de l'action d'ajout modele
        $rowDetailAction = new RowAction('', 'ro_modele_detail', false, '_self', array('class' => 'btn btn-primary'), array('class' => 'glyphicon glyphicon-eye-open', 'title' => 'Détail modéle'));
        $grid->addRowAction($rowDetailAction);

        //Ajout de l'action de modification modele
        $rowUpdateAction = new RowAction('', 'ro_modele_edit', false, '_self', array('class' => 'btn btn-success'), array('class' => 'glyphicon glyphicon-edit glyphicon-white', 'title' => 'Modifier modéle'));
        $grid->addRowAction($rowUpdateAction);

        //Ajout de l'action de suppression modele
        $rowDeleteAction = new RowAction('', 'ro_modele_delete', true, '_self', array('class' => 'btn btn-danger'), array('class' => 'glyphicon glyphicon-trash glyphicon-white', 'title' => 'Supprimer modéle'));

        //Message de confirmation de suppression
        $rowDeleteAction->setConfirmMessage('Etes vous sur de vouloir supprimer ce modéle, cela entrainera la suppression de tous les véhicules de ce modéle ?');
        $grid->addRowAction($rowDeleteAction);

        //GESTION DES MASS ACTION
        //Mass action,traitement sur plusieur ligne en les cochant,ici on crée un bouton de suppresssion
        $grid->addMassAction(new DeleteMassAction());

        // Return the response of the grid to the template
        return $grid->getGridResponse('ROModeleBundle:modele:lister_modele.html.twig');
    }

    public function add_modeleAction() {
        $modele = new Modele();

        $form = $this->add_modeleForm($modele);
        $request = $this->getRequest();

        $em = $this->getDoctrine()->getEntityManager();

        //Vérifier si le formulaire a bien été submité
        if ($request->getMethod() == 'POST') {

            if (null !== $request) {
                $dataForm = $request->request->get('ro_modele_modeletype');

                //Créationde l'modele
                $form->handleRequest($request);

                if ($form->isValid()) {

                    $dataForm = $request->request->get('backoffice_ro_modelebundle_modele');

                    //Persister l'modele
                    $em->persist($modele);
                    $em->flush();

                    //Création du flasMessage suite au succés de l'ajout d'un modele
                    $session = $this->get('session');
                    $session->getFlashBag()->add('info', 'Ajout modéle effectuée avec succées !');

                    return $this->redirect($this->generateUrl('ro_modele_homepage'));
                }
            }
        }
        return $this->render('ROModeleBundle:modele:add_modele.html.twig', array(
                    'entity' => $modele,
                    'form' => $form->createView()
        ));
    }

    /**
     * Creates a form to create a Modele entity.
     *
     * @param Modele $modele The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function add_modeleForm(Modele $modele) {
        $form = $this->createForm(new ModeleType(), $modele, array(
            'action' => $this->generateUrl('ro_modele_add', array()),
            'method' => 'POST',
        ));
        return $form;
    }

    public function edit_modeleAction($id) {
        $em = $this->getDoctrine()->getEntityManager();

        $modele = $em->getRepository('ROModeleBundle:Modele')->find($id);
        $form = $this->edit_modeleForm($modele);

        //Vérification si l'modele exisite bien
        if (!$modele) {
            throw $this->createNotFoundException('Modéle introuvable.');
        }

        $request = $this->getRequest();

        //Vérifier si le formulaire a bien été submité
        if ($request->getMethod() == 'POST') {

            if (null !== $request) {
                $dataForm = $request->request->get('ro_modele_modeletype');

                //Création de l'modele
                $form->handleRequest($request);

                if ($form->isValid()) {

                    //Persister l'modele
                    $em->persist($modele);
                    $em->flush();

                    //Création du flasMessage suite au succés de l'ajout d'un modele
                    $session = $this->get('session');
                    $session->getFlashBag()->add('info', 'Modification modéle effectuée avec succées !');

                    return $this->redirect($this->generateUrl('ro_modele_homepage'));
                }
            }
        }
        return $this->render('ROModeleBundle:modele:edit_modele.html.twig', array(
                    'entity' => $modele,
                    'form' => $form->createView()
        ));
    }

    /**
     * Creates a form to edit a modele entity.
     *
     * @param Modele $modele The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function edit_modeleForm(Modele $modele) {

        //ModeleType prends en paramétre $modele
        $form = $this->createForm(new ModeleType($modele), $modele, array(
            'action' => $this->generateUrl('ro_modele_edit', array('id' => $modele->getId())),
            'method' => 'POST',
        ));
        return $form;
    }

    public function delete_modeleAction($id) {
        try {
            $em = $this->getDoctrine()->getEntityManager();
            $session = $this->get('session');
            $modele = $em
                    ->getRepository('ROModeleBundle:Modele')
                    ->find($id);

            //Vérification si l'agence exisite bien
            if (!$modele) {
                throw $this->createNotFoundException('Modéle introuvable.');
            } else {
                $em->remove($modele);
                $em->flush();
                //Création du flasMessage suite au succés de la suppression d'une modele
                $session->getFlashBag()->add('info', 'Suppression du modéle effectuée avec succées !');
            }
            return $this->redirect($this->generateUrl('ro_modele_homepage'));
        } catch (\Exception $e) {
            // log $e->getMessage()
            $session->getFlashBag()->add('danger', 'Suppression du modéle impossible! Une erreur est survenue!');
        }
    }

    /**
     * Finds and displays a modele entity.
     *
     * @Route("/{id}", name="ro_modele_detail")
     * @Method("GET")
     * @Template()
     */
    public function detail_modeleAction($id) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('ROModeleBundle:Modele')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Modéle entity.');
        }

        return array('entity' => $entity);
    }

}
