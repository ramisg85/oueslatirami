<?php

namespace BackOffice\RO\VehiculeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VehiculeType extends AbstractType {

    public $vehicule;
    public $router;
    
    public function __construct(Vehicule $vehicule = null,Router $router = null) {
        $this->vehicule = $vehicule;
        $this->router = $router;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {

        //$url = $this->router->generate('ro_vehicule_remplir_modele');
        
        $builder
                ->add('numImmatVehicule', 'text', array('label' => 'Immatriculation', 'max_length' => 75))
                ->add('typeVehicule', 'text', array('label' => 'Type', 'max_length' => 75))
                ->add('dateMiseCirculationVehicule', 'birthday', array('widget' => 'single_text', 'label' => 'Date mise en circulation', 'format' => 'dd/MM/yyyy', 'attr' => array('class' => 'datepicker', 'data-date-format' => 'dd/mm/yyyy')))
                ->add('marque', 'entity', array(
                    'label' => 'Marque',
                    'class' => 'BackOffice\RO\MarqueBundle\Entity\Marque',
                    'property' => 'nomMarque',
                    'required' => true,
                    'empty_data' => 'Séléctionner une marque',
                    'attr' => array('class' => 'ucfirst', 'onChange' => 'chargerModele($(this).val()),$url')))
                ->add('modele', 'choice', array('choices' => array('Séléctionner une marque d\'abord')))
                ->add('categorie', 'entity', array(
                    'label' => 'Categorie',
                    'class' => 'BackOffice\RO\CategorieBundle\Entity\Categorie',
                    'property' => 'nomCategorie',
                    'required' => true,
                    'empty_data' => 'Séléctionner une catégorie',
                    'attr' => array('class' => 'ucfirst')))
                ->add('agence', 'entity', array(
                    'label' => 'Agence',
                    'class' => 'BackOffice\RO\AgenceBundle\Entity\Agence',
                    'property' => 'nomAgence',
                    'required' => true,
                    'empty_data' => 'Séléctionner une agence',
                    'attr' => array('class' => 'ucfirst')))
                ->add('tarifJournalier', 'text', array('label' => 'Tarif/jour', 'max_length' => 75))
                ->add('equipements', 'entity', array(
                    'label' => 'Equipement',
                    'class' => 'BackOffice\RO\EquipementBundle\Entity\Equipement',
                    'property' => 'nomEquipement',
                    'required' => true,
                    'expanded' => true,
                    'multiple' => true,
                    'empty_data' => 'Séléctionner un équipement',
                    'attr' => array('class' => 'ucfirst')))
                ->add('actions', 'form_actions', [
                    'buttons' => [
                        'save' => ['type' => 'submit', 'options' => ['label' => 'Valider']],
                        'cancel' => ['type' => 'button', 'options' => ['label' => 'Annuler']],
                    ]
        ]);
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'BackOffice\RO\VehiculeBundle\Entity\Vehicule'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'ro_vehicule_vehiculetype';
    }

}