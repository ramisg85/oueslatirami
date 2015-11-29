<?php

namespace BackOffice\RO\CategorieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BackOffice\RO\CategorieBundle\Entity\Categorie;
use BackOffice\RO\CategorieBundle\Form\CategorieType;
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
 * Categorie controller.
 *
 */
class categorieController extends Controller {

    /**
     * Lists all categorie entities.
     *
     */
    public function lister_categorieAction() {
        if (false === $this->get('security.authorization_checker')->isGranted('ROLE_ADMIN') && false === $this->get('security.authorization_checker')->isGranted('ROLE_SUPER_ADMIN')) {
            throw new AccessDeniedException();
        }

        // Creates a simple grid based on your entity (ORM)
        $source = new Entity('ROCategorieBundle:Categorie');

        // Get a Grid instance
        $grid = $this->get('grid');

        //Récupération du repository categorie
        $categorieRepository = $this->getDoctrine()
                ->getManager()
                ->getRepository('ROCategorieBundle:Categorie');

        //Dire au dataGrid que la source sera différente du paramétrage annotation de l'entité catégorie
        $categorieQueryBuilder = $categorieRepository->loadCategorieForGrid();
        $source->initQueryBuilder($categorieQueryBuilder);

        // Attach the source to the grid
        $grid->setSource($source);

        //Création de la possiblité d'exporter le listing au format CSV
        $grid->addExport(new CSVExport('CSV Export', 'Export catégorie CSV'));
        $grid->addExport(new ExcelExport('XLS Export', 'Export catégorie XLS'));

        //Message a afficher si la valeur de l'attribut est vide
        $grid->setNoDataMessage(' - ');

        //Message a afficher si le listing ne contient aucune ligne
        $grid->setNoResultMessage('Aucun resultat trouvé');

        //GESTION DES ACTION DE LA COLONNE DE DROITE
        //Ajout de l'action d'ajout categorie
        $rowDetailAction = new RowAction('', 'ro_categorie_detail', false, '_self', array('class' => 'btn btn-primary'), array('class' => 'glyphicon glyphicon-eye-open', 'title' => 'Détail catégorie'));
        $grid->addRowAction($rowDetailAction);

        //Ajout de l'action de modification categorie
        $rowUpdateAction = new RowAction('', 'ro_categorie_edit', false, '_self', array('class' => 'btn btn-success'), array('class' => 'glyphicon glyphicon-edit glyphicon-white', 'title' => 'Modifier catégorie'));
        $grid->addRowAction($rowUpdateAction);

        //Ajout de l'action de suppression categorie
        $rowDeleteAction = new RowAction('', 'ro_categorie_delete', true, '_self', array('class' => 'btn btn-danger'), array('class' => 'glyphicon glyphicon-trash glyphicon-white', 'title' => 'Supprimer catégorie'));

        //Message de confirmation de suppression
        $rowDeleteAction->setConfirmMessage('Etes vous sur de vouloir supprimer cette catégorie ?');
        $grid->addRowAction($rowDeleteAction);

        //GESTION DES MASS ACTION
        //Mass action,traitement sur plusieur ligne en les cochant,ici on crée un bouton de suppresssion
        $grid->addMassAction(new DeleteMassAction());

        // Return the response of the grid to the template
        return $grid->getGridResponse('ROCategorieBundle:categorie:lister_categorie.html.twig');
    }

    public function add_categorieAction() {
        $categorie = new Categorie();

        $form = $this->add_categorieForm($categorie);
        $request = $this->getRequest();

        $em = $this->getDoctrine()->getEntityManager();

        //Vérifier si le formulaire a bien été submité
        if ($request->getMethod() == 'POST') {

            if (null !== $request) {
                $dataForm = $request->request->get('ro_categorie_categorietype');

                //Créationde l'categorie
                $form->handleRequest($request);

                if ($form->isValid()) {

                    $dataForm = $request->request->get('backoffice_ro_categoriebundle_categorie');

                    //Persister l'categorie
                    $em->persist($categorie);
                    $em->flush();

                    //Création du flasMessage suite au succés de l'ajout d'un categorie
                    $session = $this->get('session');
                    $session->getFlashBag()->add('info', 'Ajout catégorie effectuée avec succées !');

                    return $this->redirect($this->generateUrl('ro_categorie_homepage'));
                }
            }
        }
        return $this->render('ROCategorieBundle:categorie:add_categorie.html.twig', array(
                    'entity' => $categorie,
                    'form' => $form->createView()
        ));
    }

    /**
     * Creates a form to create a Categorie entity.
     *
     * @param Categorie $categorie The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function add_categorieForm(Categorie $categorie) {
        $form = $this->createForm(new CategorieType(), $categorie, array(
            'action' => $this->generateUrl('ro_categorie_add', array()),
            'method' => 'POST',
        ));
        return $form;
    }

    /**
     * Creates a form to create a Categorie entity.
     *
     * @param Categorie $categorie The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    public function edit_categorieAction($id) {
        $em = $this->getDoctrine()->getEntityManager();

        $categorie = $em->getRepository('ROCategorieBundle:Categorie')->find($id);
        $form = $this->edit_categorieForm($categorie);

        //Vérification si l'categorie exisite bien
        if (!$categorie) {
            throw $this->createNotFoundException('Modéle introuvable.');
        }

        $request = $this->getRequest();

        //Vérifier si le formulaire a bien été submité
        if ($request->getMethod() == 'POST') {

            if (null !== $request) {
                $dataForm = $request->request->get('ro_categorie_categorietype');

                //Création de l'categorie
                $form->handleRequest($request);

                if ($form->isValid()) {

                    //Persister l'categorie
                    $em->persist($categorie);
                    $em->flush();

                    //Création du flasMessage suite au succés de l'ajout d'un categorie
                    $session = $this->get('session');
                    $session->getFlashBag()->add('info', 'Modification catégorie effectuée avec succées !');

                    return $this->redirect($this->generateUrl('ro_categorie_homepage'));
                }
            }
        }
        return $this->render('ROCategorieBundle:categorie:edit_categorie.html.twig', array(
                    'entity' => $categorie,
                    'form' => $form->createView()
        ));
    }

    /**
     * Creates a form to edit a categorie entity.
     *
     * @param Categorie $categorie The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function edit_categorieForm(Categorie $categorie) {

        //CategorieType prends en paramétre $categorie
        $form = $this->createForm(new CategorieType($categorie), $categorie, array(
            'action' => $this->generateUrl('ro_categorie_edit', array('id' => $categorie->getId())),
            'method' => 'POST',
        ));
        return $form;
    }

    public function delete_categorieAction($id) {
        try {
            $em = $this->getDoctrine()->getEntityManager();
            $session = $this->get('session');
            $categorie = $em
                    ->getRepository('ROCategorieBundle:Categorie')
                    ->find($id);

            //Vérification si l'agence exisite bien
            if (!$categorie) {
                throw $this->createNotFoundException('Modéle introuvable.');
            } else {
                $em->remove($categorie);
                $em->flush();
                //Création du flasMessage suite au succés de la suppression d'une categorie
                $session->getFlashBag()->add('info', 'Suppression du catégorie effectuée avec succées !');
            }
            return $this->redirect($this->generateUrl('ro_categorie_homepage'));
        } catch (\Exception $e) {
            // log $e->getMessage()
            $session->getFlashBag()->add('danger', 'Suppression du catégorie impossible! Une erreur est survenue!');
        }
    }

    /**
     * Finds and displays a categorie entity.
     *
     * @Route("/{id}", name="ro_categorie_detail")
     * @Method("GET")
     * @Template()
     */
    public function detail_categorieAction($id) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('ROCategorieBundle:Categorie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Modéle entity.');
        }

        return array('entity' => $entity);
    }

}
