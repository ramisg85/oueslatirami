<?php

namespace BackOffice\RO\EquipementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BackOffice\RO\EquipementBundle\Entity\Equipement;
use BackOffice\RO\EquipementBundle\Form\EquipementType;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use APY\DataGridBundle\Grid\Source\Entity;
use APY\DataGridBundle\Grid\Action\DeleteMassAction;
use APY\DataGridBundle\Grid\Action\RowAction;
use APY\DataGridBundle\Grid\Export\CSVExport;
use APY\DataGridBundle\Grid\Export\ExcelExport;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Equipement controller.
 *
 */
class equipementController extends Controller {

    /**
     * Lists all equipement entities.
     *
     */
    public function lister_equipementAction() {
        if (false === $this->get('security.authorization_checker')->isGranted('ROLE_ADMIN') && false === $this->get('security.authorization_checker')->isGranted('ROLE_SUPER_ADMIN')) {
            throw new AccessDeniedException();
        }

        // Creates a simple grid based on your entity (ORM)
        $source = new Entity('ROEquipementBundle:Equipement');

        // Get a Grid instance
        $grid = $this->get('grid');

        //Récupération du repository equipement
        $equipementRepository = $this->getDoctrine()
                ->getManager()
                ->getRepository('ROEquipementBundle:Equipement');

        //Dire au dataGrid que la source sera différente du paramétrage annotation de l'entité modéle
        $equipementQueryBuilder = $equipementRepository->loadEquipementForGrid();
        $source->initQueryBuilder($equipementQueryBuilder);

        // Attach the source to the grid
        $grid->setSource($source);

        //Création de la possiblité d'exporter le listing au format CSV
        $grid->addExport(new CSVExport('CSV Export', 'Export équipement CSV'));
        $grid->addExport(new ExcelExport('XLS Export', 'Export équipement XLS'));

        //Message a afficher si la valeur de l'attribut est vide
        $grid->setNoDataMessage(' - ');

        //Message a afficher si le listing ne contient aucune ligne
        $grid->setNoResultMessage('Aucun resultat trouvé');

        //GESTION DES ACTION DE LA COLONNE DE DROITE
        //Ajout de l'action d'ajout equipement
        $rowDetailAction = new RowAction('', 'ro_equipement_detail', false, '_self', array('class' => 'btn btn-primary'), array('class' => 'glyphicon glyphicon-eye-open', 'title' => 'Détail équipement'));
        $grid->addRowAction($rowDetailAction);

        //Ajout de l'action de modification equipement
        $rowUpdateAction = new RowAction('', 'ro_equipement_edit', false, '_self', array('class' => 'btn btn-success'), array('class' => 'glyphicon glyphicon-edit glyphicon-white', 'title' => 'Modifier équipement'));
        $grid->addRowAction($rowUpdateAction);

        //Ajout de l'action de suppression equipement
        $rowDeleteAction = new RowAction('', 'ro_equipement_delete', true, '_self', array('class' => 'btn btn-danger'), array('class' => 'glyphicon glyphicon-trash glyphicon-white', 'title' => 'Supprimer équipement'));

        //Message de confirmation de suppression
        $rowDeleteAction->setConfirmMessage('Etes vous sur de vouloir supprimer cet équipement ?');
        $grid->addRowAction($rowDeleteAction);

        //GESTION DES MASS ACTION
        //Mass action,traitement sur plusieur ligne en les cochant,ici on crée un bouton de suppresssion
        $grid->addMassAction(new DeleteMassAction());

        // Return the response of the grid to the template
        return $grid->getGridResponse('ROEquipementBundle:equipement:lister_equipement.html.twig');
    }

    public function add_equipementAction() {
        $equipement = new Equipement();

        $form = $this->add_equipementForm($equipement);
        $request = $this->getRequest();

        $em = $this->getDoctrine()->getEntityManager();

        //Vérifier si le formulaire a bien été submité
        if ($request->getMethod() == 'POST') {

            if (null !== $request) {
                $dataForm = $request->request->get('ro_equipement_equipementtype');

                //Créationde l'equipement
                $form->handleRequest($request);

                if ($form->isValid()) {

                    //Persister l'equipement
                    $em->persist($equipement);
                    $em->flush();

                    //Création du flasMessage suite au succés de l'ajout d'un equipement
                    $session = $this->get('session');
                    $session->getFlashBag()->add('info', 'Ajout équipement effectuée avec succées !');

                    return $this->redirect($this->generateUrl('ro_equipement_homepage'));
                }
            }
        }
        return $this->render('ROEquipementBundle:equipement:add_equipement.html.twig', array(
                    'entity' => $equipement,
                    'form' => $form->createView()
        ));
    }

    /**
     * Creates a form to create a Equipement entity.
     *
     * @param Equipement $equipement The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function add_equipementForm(Equipement $equipement) {
        $form = $this->createForm(new EquipementType(), $equipement, array(
            'action' => $this->generateUrl('ro_equipement_add', array()),
            'method' => 'POST',
        ));
        return $form;
    }

    public function edit_equipementAction($id) {
        $em = $this->getDoctrine()->getEntityManager();

        $equipement = $em->getRepository('ROEquipementBundle:Equipement')->find($id);
        $form = $this->edit_equipementForm($equipement);

        //Vérification si l'equipement exisite bien
        if (!$equipement) {
            throw $this->createNotFoundException('Equipement introuvable.');
        }

        $request = $this->getRequest();

        //Vérifier si le formulaire a bien été submité
        if ($request->getMethod() == 'POST') {

            if (null !== $request) {
                $dataForm = $request->request->get('ro_equipement_equipementtype');

                //Création de l'equipement
                $form->handleRequest($request);

                if ($form->isValid()) {

                    //Persister l'equipement
                    $em->persist($equipement);
                    $em->flush();

                    //Création du flasMessage suite au succés de l'ajout d'un equipement
                    $session = $this->get('session');
                    $session->getFlashBag()->add('info', 'Modification équipement effectuée avec succées !');

                    return $this->redirect($this->generateUrl('ro_equipement_homepage'));
                }
            }
        }
        return $this->render('ROEquipementBundle:equipement:edit_equipement.html.twig', array(
                    'entity' => $equipement,
                    'form' => $form->createView()
        ));
    }

    /**
     * Creates a form to edit a equipement entity.
     *
     * @param Equipement $equipement The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function edit_equipementForm(Equipement $equipement) {

        //EquipementType prends en paramétre $equipement
        $form = $this->createForm(new EquipementType($equipement), $equipement, array(
            'action' => $this->generateUrl('ro_equipement_edit', array('id' => $equipement->getId())),
            'method' => 'POST',
        ));
        return $form;
    }

    public function delete_equipementAction($id) {
        $em = $this->getDoctrine()->getEntityManager();
        $equipement = $em
                ->getRepository('ROEquipementBundle:Equipement')
                ->find($id);
        $em->remove($equipement);
        $em->flush();

        //Création du flasMessage suite au succés de la suppression d'une equipement
        $session = $this->get('session');
        $session->getFlashBag()->add('info', 'Suppression d\'équipement effectuée avec succées !');

        return $this->redirect($this->generateUrl('ro_equipement_homepage'));
    }

    /**
     * Finds and displays a equipement entity.
     *
     * @Route("/{id}", name="ro_equipement_detail")
     * @Method("GET")
     * @Template()
     */
    public function detail_equipementAction($id) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('ROEquipementBundle:Equipement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Equipement entity.');
        }

        return array('entity' => $entity);
    }

}
