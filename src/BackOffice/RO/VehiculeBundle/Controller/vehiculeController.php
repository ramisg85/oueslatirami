<?php

namespace BackOffice\RO\VehiculeBundle\Controller;

use BackOffice\RO\VehiculeBundle\Entity\Vehicule;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use APY\DataGridBundle\Grid\Source\Entity;
use APY\DataGridBundle\Grid\Action\DeleteMassAction;
use APY\DataGridBundle\Grid\Action\RowAction;
use APY\DataGridBundle\Grid\Export\CSVExport;
use APY\DataGridBundle\Grid\Export\ExcelExport;
use BackOffice\RO\VehiculeBundle\Form\VehiculeType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class vehiculeController extends Controller {

    public function lister_vehiculeAction() {
        if (false === $this->get('security.authorization_checker')->isGranted('ROLE_ADMIN') && false === $this->get('security.authorization_checker')->isGranted('ROLE_SUPER_ADMIN')) {
            throw new AccessDeniedException();
        }

        // Creates a simple grid based on your entity (ORM)
        $source = new Entity('ROVehiculeBundle:Vehicule');

        // Get a Grid instance
        $grid = $this->get('grid');

        //Récupération du repository vehicule
        $vehiculeRepository = $this->getDoctrine()
                ->getManager()
                ->getRepository('ROVehiculeBundle:Vehicule');

        //Dire au dataGrid que la source sera différente du paramétrage onnataion de l'entité véhicule
        $vehiculeQueryBuilder = $vehiculeRepository->loadVehiculeForGrid();
        $source->initQueryBuilder($vehiculeQueryBuilder);

        // Attach the source to the grid
        $grid->setSource($source);

        //Création de la possiblité d'exporter le listing au format CSV
        $grid->addExport(new CSVExport('CSV Export', 'Export véhicule CSV'));
        $grid->addExport(new ExcelExport('XLS Export', 'Export véhicule XLS'));

        //Message a afficher si la valeur de l'attribut est vide
        $grid->setNoDataMessage(' - ');

        //Message a afficher si le listing ne contient aucune ligne
        $grid->setNoResultMessage('Aucun resultat trouvé');

        //GESTION DES ACTION DE LA COLONNE DE DROITE
        //Ajout de l'action d'ajout vehicule
        $rowDetailAction = new RowAction('', 'ro_vehicule_detail', false, '_self', array('class' => 'btn btn-primary'), array('class' => 'glyphicon glyphicon-eye-open', 'title' => 'Détail véhicule'));
        $grid->addRowAction($rowDetailAction);

        //Ajout de l'action de modification vehicule
        $rowUpdateAction = new RowAction('', 'ro_vehicule_edit', false, '_self', array('class' => 'btn btn-success'), array('class' => 'glyphicon glyphicon-edit glyphicon-white', 'title' => 'Modifier véhicule'));
        $grid->addRowAction($rowUpdateAction);

        //Ajout de l'action de suppression vehicule
        $rowDeleteAction = new RowAction('', 'ro_vehicule_delete', true, '_self', array('class' => 'btn btn-danger'), array('class' => 'glyphicon glyphicon-trash glyphicon-white', 'title' => 'Supprimer véhicule'));

        //Message de confirmation de suppression
        $rowDeleteAction->setConfirmMessage('Etes vous sur de vouloir supprimer ce véhicule ?');
        $grid->addRowAction($rowDeleteAction);

        //GESTION DES MASS ACTION
        //Mass action,traitement sur plusieur ligne en les cochant,ici on crée un bouton de suppresssion
        $grid->addMassAction(new DeleteMassAction());

        // Return the response of the grid to the template
        return $grid->getGridResponse('ROVehiculeBundle:vehicule:lister_vehicule.html.twig');
    }

    public function add_vehiculeAction() {
        $vehicule = new Vehicule();

        $form = $this->add_vehiculeForm($vehicule);
        $request = $this->getRequest();

        $em = $this->getDoctrine()->getEntityManager();

        //Vérifier si le formulaire a bien été submité
        if ($request->getMethod() == 'POST') {

            if (null !== $request) {
                $dataForm = $request->request->get('ro_vehicule_vehiculetype');

                //Créationde l'vehicule
                $form->handleRequest($request);

                if ($form->isValid()) {

                    $dataForm = $request->request->get('backoffice_ro_vehiculebundle_vehicule');

                    //Persister l'vehicule
                    $em->persist($vehicule);
                    $em->flush();

                    //Création du flasMessage suite au succés de l'ajout d'un vehicule
                    $session = $this->get('session');
                    $session->getFlashBag()->add('info', 'Ajout véhicule effectuée avec succées !');

                    return $this->redirect($this->generateUrl('ro_vehicule_homepage'));
                }
            }
        }
        return $this->render('ROVehiculeBundle:vehicule:add_vehicule.html.twig', array(
                    'entity' => $vehicule,
                    'form' => $form->createView()
        ));
    }

    /**
     * Creates a form to create a Vehicule entity.
     *
     * @param Vehicule $vehicule The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function add_vehiculeForm(Vehicule $vehicule) {
        $form = $this->createForm(new VehiculeType(), $vehicule, array(
            'action' => $this->generateUrl('ro_vehicule_add', array()),
            'method' => 'POST')
        );
        return $form;
    }

    public function delete_vehiculeAction($id) {
        
    }

    /**
     * Finds and displays a vehicule entity.
     *
     * @Route("/{id}", name="ro_vehicule_detail")
     * @Method("GET")
     * @Template()
     */
    public function detail_vehiculeAction($id) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('ROVehiculeBundle:Vehicule')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Vehicule entity.');
        }

        return array('entity' => $entity);
    }

    public function remplir_modeleAction() {
        // pour vérifier la présence d'une requete Ajax
        if ($request->isXmlHttpRequest()) {
            return new Response('Hello');
        }
        return new Response('Erreur');
    }

}
