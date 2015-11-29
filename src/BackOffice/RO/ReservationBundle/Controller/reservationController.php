<?php

namespace BackOffice\RO\ReservationBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use BackOffice\RO\ReservationBundle\Entity\Reservation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use APY\DataGridBundle\Grid\Source\Entity;
use APY\DataGridBundle\Grid\Action\DeleteMassAction;
use APY\DataGridBundle\Grid\Action\RowAction;
use APY\DataGridBundle\Grid\Export\CSVExport;
use APY\DataGridBundle\Grid\Export\ExcelExport;

/**
 * Reservation controller.
 *
 */
class reservationController extends Controller {

    /**
     * Lists all reservation entities.
     *
     */
    public function lister_reservationAction() {
        if (false === $this->get('security.authorization_checker')->isGranted('ROLE_ADMIN') && false === $this->get('security.authorization_checker')->isGranted('ROLE_SUPER_ADMIN')) {
            throw new AccessDeniedException();
        }

        // Creates a simple grid based on your entity (ORM)
        $source = new Entity('ROReservationBundle:Reservation');

        // Get a Grid instance
        $grid = $this->get('grid');

        //Récupération du repository reservation
        $reservationRepository = $this->getDoctrine()
                ->getManager()
                ->getRepository('ROReservationBundle:Reservation');

        //Dire au dataGrid que la source sera différente du paramétrage annotation de l'entité modéle
        $reservationQueryBuilder = $reservationRepository->loadReservationForGrid();
        $source->initQueryBuilder($reservationQueryBuilder);

        // Attach the source to the grid
        $grid->setSource($source);

        //Création de la possiblité d'exporter le listing au format CSV
        $grid->addExport(new CSVExport('CSV Export', 'Export réservation CSV'));
        $grid->addExport(new ExcelExport('XLS Export', 'Export réservation XLS'));

        //Message a afficher si la valeur de l'attribut est vide
        $grid->setNoDataMessage(' - ');

        //Message a afficher si le listing ne contient aucune ligne
        $grid->setNoResultMessage('Aucun resultat trouvé');

        //GESTION DES ACTION DE LA COLONNE DE DROITE
        //Ajout de l'action d'ajout reservation
        $rowDetailAction = new RowAction('', 'ro_reservation_detail', false, '_self', array('class' => 'btn btn-primary'), array('class' => 'glyphicon glyphicon-eye-open', 'title' => 'Détail réservation'));
        $grid->addRowAction($rowDetailAction);

        //Ajout de l'action de modification reservation
        $rowUpdateAction = new RowAction('', 'ro_reservation_edit', false, '_self', array('class' => 'btn btn-success'), array('class' => 'glyphicon glyphicon-edit glyphicon-white', 'title' => 'Modifier réservation'));
        $grid->addRowAction($rowUpdateAction);

        //Ajout de l'action de suppression reservation
        $rowDeleteAction = new RowAction('', 'ro_reservation_delete', true, '_self', array('class' => 'btn btn-danger'), array('class' => 'glyphicon glyphicon-trash glyphicon-white', 'title' => 'Supprimer réservation'));

        //Message de confirmation de suppression
        $rowDeleteAction->setConfirmMessage('Etes vous sur de vouloir supprimer cet réservation ?');
        $grid->addRowAction($rowDeleteAction);

        //GESTION DES MASS ACTION
        //Mass action,traitement sur plusieur ligne en les cochant,ici on crée un bouton de suppresssion
        $grid->addMassAction(new DeleteMassAction());

        // Return the response of the grid to the template
        return $grid->getGridResponse('ROReservationBundle:reservation:lister_reservation.html.twig');
    }

    /**
     * Creates a new reservation entity.
     *
     */
    public function createAction(Request $request) {
        
    }

    private function createCreateForm(Reservation $entity) {
        
    }

    public function add_reservationAction() {
        
    }

    public function edit_reservationAction($id) {
        
    }

    public function delete_reservationAction($id) {
        
    }

    public function detail_reservationAction($id) {
        
    }

}
