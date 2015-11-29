<?php

namespace BackOffice\RO\EntrepriseBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use BackOffice\RO\EntrepriseBundle\Entity\Entreprise;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use APY\DataGridBundle\Grid\Source\Entity;
use APY\DataGridBundle\Grid\Action\DeleteMassAction;
use APY\DataGridBundle\Grid\Action\RowAction;
use APY\DataGridBundle\Grid\Export\CSVExport;
use APY\DataGridBundle\Grid\Export\ExcelExport;

/**
 * Entreprise controller.
 *
 */
class entrepriseController extends Controller {

    /**
     * Lists all entreprise entities.
     *
     */
    public function lister_entrepriseAction() {
        if (false === $this->get('security.authorization_checker')->isGranted('ROLE_ADMIN') && false === $this->get('security.authorization_checker')->isGranted('ROLE_SUPER_ADMIN')) {
            throw new AccessDeniedException();
        }

        // Creates a simple grid based on your entity (ORM)
        $source = new Entity('ROEntrepriseBundle:Entreprise');

        // Get a Grid instance
        $grid = $this->get('grid');

        //Récupération du repository entreprise
        $entrepriseRepository = $this->getDoctrine()
                ->getManager()
                ->getRepository('ROEntrepriseBundle:Entreprise');

        //Dire au dataGrid que la source sera différente du paramétrage annotation de l'entité modéle
        $entrepriseQueryBuilder = $entrepriseRepository->loadEntrepriseForGrid();
        $source->initQueryBuilder($entrepriseQueryBuilder);

        // Attach the source to the grid
        $grid->setSource($source);

        //Création de la possiblité d'exporter le listing au format CSV
        $grid->addExport(new CSVExport('CSV Export', 'Export entreprise CSV'));
        $grid->addExport(new ExcelExport('XLS Export', 'Export entreprise XLS'));

        //Message a afficher si la valeur de l'attribut est vide
        $grid->setNoDataMessage(' - ');

        //Message a afficher si le listing ne contient aucune ligne
        $grid->setNoResultMessage('Aucun resultat trouvé');

        //GESTION DES ACTION DE LA COLONNE DE DROITE
        //Ajout de l'action d'ajout entreprise
        $rowDetailAction = new RowAction('', 'ro_entreprise_detail', false, '_self', array('class' => 'btn btn-primary'), array('class' => 'glyphicon glyphicon-eye-open', 'title' => 'Détail entreprise'));
        $grid->addRowAction($rowDetailAction);

        //Ajout de l'action de modification entreprise
        $rowUpdateAction = new RowAction('', 'ro_entreprise_edit', false, '_self', array('class' => 'btn btn-success'), array('class' => 'glyphicon glyphicon-edit glyphicon-white', 'title' => 'Modifier entreprise'));
        $grid->addRowAction($rowUpdateAction);

        //Ajout de l'action de suppression entreprise
        $rowDeleteAction = new RowAction('', 'ro_entreprise_delete', true, '_self', array('class' => 'btn btn-danger'), array('class' => 'glyphicon glyphicon-trash glyphicon-white', 'title' => 'Supprimer entreprise'));

        //Message de confirmation de suppression
        $rowDeleteAction->setConfirmMessage('Etes vous sur de vouloir supprimer cette entreprise ?');
        $grid->addRowAction($rowDeleteAction);

        //GESTION DES MASS ACTION
        //Mass action,traitement sur plusieur ligne en les cochant,ici on crée un bouton de suppresssion
        $grid->addMassAction(new DeleteMassAction());

        // Return the response of the grid to the template
        return $grid->getGridResponse('ROEntrepriseBundle:entreprise:lister_entreprise.html.twig');
    }

    /**
     * Creates a new entreprise entity.
     *
     */
    public function createAction(Request $request) {
        
    }

    private function createCreateForm(Entreprise $entity) {
        
    }

    public function add_entrepriseAction() {
        
    }

    public function edit_entrepriseAction($id) {
        
    }

    public function delete_entrepriseAction($id) {
        
    }

    public function detail_entrepriseAction($id) {
        
    }

}
