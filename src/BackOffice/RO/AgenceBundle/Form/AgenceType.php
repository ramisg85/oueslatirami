<?php

namespace BackOffice\RO\AgenceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AgenceType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomAgence')
            ->add('adresseAgenceL1')
            ->add('adresseAgenceL2')
            ->add('cpAgence')
            ->add('villeAgence')
            ->add('paysAgence')
            ->add('logoAgence')
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
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackOffice\RO\AgenceBundle\Entity\Agence'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'backoffice_ro_agencebundle_agence';
    }
}
