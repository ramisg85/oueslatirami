<?php

namespace BackOffice\RO\ModeleBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ModeleType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('denominationModele')
                ->add('marque', 'entity', array(
                    'label' => 'Marque',
                    'class' => 'BackOffice\RO\MarqueBundle\Entity\Marque',
                    'property' => 'nomMarque',
                    'required' => true,
                    'empty_data' => 'Séléctionner une marque',
                    'attr' => array('class' => 'ucfirst')))
                ->add('descModele')
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
            'data_class' => 'BackOffice\RO\ModeleBundle\Entity\Modele'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'backoffice_ro_modelebundle_modele';
    }

}
