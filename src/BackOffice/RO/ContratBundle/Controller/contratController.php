<?php

namespace BackOffice\RO\ContratBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use BackOffice\RO\ContratBundle\Entity\Contrat;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use APY\DataGridBundle\Grid\Source\Entity;
use APY\DataGridBundle\Grid\Action\DeleteMassAction;
use APY\DataGridBundle\Grid\Action\RowAction;
use APY\DataGridBundle\Grid\Export\CSVExport;
use APY\DataGridBundle\Grid\Export\ExcelExport;

/**
 * Contrat controller.
 *
 */
class contratController extends Controller {

    /**
     * Lists all contrat entities.
     *
     */
    public function lister_contratAction() {
        if (false === $this->get('security.authorization_checker')->isGranted('ROLE_ADMIN') && false === $this->get('security.authorization_checker')->isGranted('ROLE_SUPER_ADMIN')) {
            throw new AccessDeniedException();
        }

        // Creates a simple grid based on your entity (ORM)
        $source = new Entity('ROContratBundle:Contrat');

        // Get a Grid instance
        $grid = $this->get('grid');

        //Récupération du repository contrat
        $contratRepository = $this->getDoctrine()
                ->getManager()
                ->getRepository('ROContratBundle:Contrat');

        //Dire au dataGrid que la source sera différente du paramétrage annotation de l'entité modéle
        $contratQueryBuilder = $contratRepository->loadContratForGrid();
        $source->initQueryBuilder($contratQueryBuilder);

        // Attach the source to the grid
        $grid->setSource($source);

        //Création de la possiblité d'exporter le listing au format CSV
        $grid->addExport(new CSVExport('CSV Export', 'Export contrat CSV'));
        $grid->addExport(new ExcelExport('XLS Export', 'Export contrat XLS'));

        //Message a afficher si la valeur de l'attribut est vide
        $grid->setNoDataMessage(' - ');

        //Message a afficher si le listing ne contient aucune ligne
        $grid->setNoResultMessage('Aucun resultat trouvé');

        //GESTION DES ACTION DE LA COLONNE DE DROITE
        //Ajout de l'action d'ajout contrat
        $rowDetailAction = new RowAction('', 'ro_contrat_detail', false, '_self', array('class' => 'btn btn-primary'), array('class' => 'glyphicon glyphicon-eye-open', 'title' => 'Détail contrat'));
        $grid->addRowAction($rowDetailAction);

        //Ajout de l'action de modification contrat
        $rowUpdateAction = new RowAction('', 'ro_contrat_edit', false, '_self', array('class' => 'btn btn-success'), array('class' => 'glyphicon glyphicon-edit glyphicon-white', 'title' => 'Modifier contrat'));
        $grid->addRowAction($rowUpdateAction);

        //Ajout de l'action de suppression contrat
        $rowDeleteAction = new RowAction('', 'ro_contrat_delete', true, '_self', array('class' => 'btn btn-danger'), array('class' => 'glyphicon glyphicon-trash glyphicon-white', 'title' => 'Supprimer contrat'));

        //Message de confirmation de suppression
        $rowDeleteAction->setConfirmMessage('Etes vous sur de vouloir supprimer cet contrat ?');
        $grid->addRowAction($rowDeleteAction);

        //GESTION DES MASS ACTION
        //Mass action,traitement sur plusieur ligne en les cochant,ici on crée un bouton de suppresssion
        $grid->addMassAction(new DeleteMassAction());

        // Return the response of the grid to the template
        return $grid->getGridResponse('ROContratBundle:contrat:lister_contrat.html.twig');
    }

    /**
     * Creates a new contrat entity.
     *
     */
    public function createAction(Request $request) {
        
    }

    private function createCreateForm(Contrat $entity) {
        
    }

    public function add_contratAction() {
        
    }

    public function edit_contratAction($id) {
        
    }

    public function delete_contratAction($id) {
        
    }

    public function detail_contratAction($id) {
        
    }

}
