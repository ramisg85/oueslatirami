<?php

namespace BackOffice\RO\EquipementBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EquipementType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nomEquipement')
                ->add('descEquipement')
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
            'data_class' => 'BackOffice\RO\EquipementBundle\Entity\Equipement'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'backoffice_ro_marquebundle_marque';
    }

}
