<?php

namespace BackOffice\RO\MarqueBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use BackOffice\RO\MarqueBundle\Entity\Marque;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use APY\DataGridBundle\Grid\Source\Entity;
use APY\DataGridBundle\Grid\Action\DeleteMassAction;
use APY\DataGridBundle\Grid\Action\RowAction;
use APY\DataGridBundle\Grid\Export\CSVExport;
use APY\DataGridBundle\Grid\Export\ExcelExport;
use BackOffice\RO\MarqueBundle\Form\MarqueType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Marque controller.
 *
 */
class marqueController extends Controller {

    /**
     * Lists all marque entities.
     *
     */
    public function lister_marqueAction() {
        if (false === $this->get('security.authorization_checker')->isGranted('ROLE_ADMIN') && false === $this->get('security.authorization_checker')->isGranted('ROLE_SUPER_ADMIN')) {
            throw new AccessDeniedException();
        }

        // Creates a simple grid based on your entity (ORM)
        $source = new Entity('ROMarqueBundle:Marque');

        // Get a Grid instance
        $grid = $this->get('grid');

        //Récupération du repository marque
        $marqueRepository = $this->getDoctrine()
                ->getManager()
                ->getRepository('ROMarqueBundle:Marque');

        //Dire au dataGrid que la source sera différente du paramétrage annotation de l'entité modéle
        $marqueQueryBuilder = $marqueRepository->loadMarqueForGrid();
        $source->initQueryBuilder($marqueQueryBuilder);

        // Attach the source to the grid
        $grid->setSource($source);

        //Création de la possiblité d'exporter le listing au format CSV
        $grid->addExport(new CSVExport('CSV Export', 'Export marque CSV'));
        $grid->addExport(new ExcelExport('XLS Export', 'Export marque XLS'));

        //Message a afficher si la valeur de l'attribut est vide
        $grid->setNoDataMessage(' - ');

        //Message a afficher si le listing ne contient aucune ligne
        $grid->setNoResultMessage('Aucun resultat trouvé');

        //GESTION DES ACTION DE LA COLONNE DE DROITE
        //Ajout de l'action d'ajout marque
        $rowDetailAction = new RowAction('', 'ro_marque_detail', false, '_self', array('class' => 'btn btn-primary'), array('class' => 'glyphicon glyphicon-eye-open', 'title' => 'Détail marque'));
        $grid->addRowAction($rowDetailAction);

        //Ajout de l'action de modification marque
        $rowUpdateAction = new RowAction('', 'ro_marque_edit', false, '_self', array('class' => 'btn btn-success'), array('class' => 'glyphicon glyphicon-edit glyphicon-white', 'title' => 'Modifier marque'));
        $grid->addRowAction($rowUpdateAction);

        //Ajout de l'action de suppression marque
        $rowDeleteAction = new RowAction('', 'ro_marque_delete', true, '_self', array('class' => 'btn btn-danger'), array('class' => 'glyphicon glyphicon-trash glyphicon-white', 'title' => 'Supprimer marque'));

        //Message de confirmation de suppression
        $rowDeleteAction->setConfirmMessage('Etes vous sur de vouloir supprimer cette marque ?');
        $grid->addRowAction($rowDeleteAction);

        //GESTION DES MASS ACTION
        //Mass action,traitement sur plusieur ligne en les cochant,ici on crée un bouton de suppresssion
        $grid->addMassAction(new DeleteMassAction());

        // Return the response of the grid to the template
        return $grid->getGridResponse('ROMarqueBundle:marque:lister_marque.html.twig');
    }

    public function add_marqueAction() {
        $marque = new Marque();

        $form = $this->add_marqueForm($marque);
        $request = $this->getRequest();

        $em = $this->getDoctrine()->getEntityManager();

        //Vérifier si le formulaire a bien été submité
        if ($request->getMethod() == 'POST') {

            if (null !== $request) {
                $dataForm = $request->request->get('ro_marque_marquetype');

                //Créationde l'marque
                $form->handleRequest($request);

                if ($form->isValid()) {

                    //Persister l'marque
                    $em->persist($marque);
                    $em->flush();

                    //Création du flasMessage suite au succés de l'ajout d'un marque
                    $session = $this->get('session');
                    $session->getFlashBag()->add('info', 'Ajout marque effectuée avec succées !');

                    return $this->redirect($this->generateUrl('ro_marque_homepage'));
                }
            }
        }
        return $this->render('ROMarqueBundle:marque:add_marque.html.twig', array(
                    'entity' => $marque,
                    'form' => $form->createView()
        ));
    }

    /**
     * Creates a form to create a Marque entity.
     *
     * @param Marque $marque The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function add_marqueForm(Marque $marque) {
        $form = $this->createForm(new MarqueType(), $marque, array(
            'action' => $this->generateUrl('ro_marque_add', array()),
            'method' => 'POST',
        ));
        return $form;
    }

    public function edit_marqueAction($id) {
        $em = $this->getDoctrine()->getEntityManager();

        $marque = $em->getRepository('ROMarqueBundle:Marque')->find($id);
        $form = $this->edit_marqueForm($marque);

        //Vérification si l'marque exisite bien
        if (!$marque) {
            throw $this->createNotFoundException('Marque introuvable.');
        }

        $request = $this->getRequest();

        //Vérifier si le formulaire a bien été submité
        if ($request->getMethod() == 'POST') {

            if (null !== $request) {
                $dataForm = $request->request->get('ro_marque_marquetype');

                //Création de l'marque
                $form->handleRequest($request);

                if ($form->isValid()) {

                    //Persister l'marque
                    $em->persist($marque);
                    $em->flush();

                    //Création du flasMessage suite au succés de l'ajout d'un marque
                    $session = $this->get('session');
                    $session->getFlashBag()->add('info', 'Modification marque effectuée avec succées !');

                    return $this->redirect($this->generateUrl('ro_marque_homepage'));
                }
            }
        }
        return $this->render('ROMarqueBundle:marque:edit_marque.html.twig', array(
                    'entity' => $marque,
                    'form' => $form->createView()
        ));
    }

    /**
     * Creates a form to edit a marque entity.
     *
     * @param Marque $marque The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function edit_marqueForm(Marque $marque) {

        //MarqueType prends en paramétre $marque
        $form = $this->createForm(new MarqueType($marque), $marque, array(
            'action' => $this->generateUrl('ro_marque_edit', array('id' => $marque->getId())),
            'method' => 'POST',
        ));
        return $form;
    }

    public function delete_marqueAction($id) {
        $em = $this->getDoctrine()->getEntityManager();
        $marque = $em
                ->getRepository('ROMarqueBundle:Marque')
                ->find($id);
        $em->remove($marque);
        $em->flush();

        //Création du flasMessage suite au succés de la suppression d'une marque
        $session = $this->get('session');
        $session->getFlashBag()->add('info', 'Suppression d\'marque effectuée avec succées !');

        return $this->redirect($this->generateUrl('ro_marque_homepage'));
    }

    /**
     * Finds and displays a marque entity.
     *
     * @Route("/{id}", name="ro_marque_detail")
     * @Method("GET")
     * @Template()
     */
    public function detail_marqueAction($id) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('ROMarqueBundle:Marque')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Marque entity.');
        }

        return array('entity' => $entity);
    }

}
