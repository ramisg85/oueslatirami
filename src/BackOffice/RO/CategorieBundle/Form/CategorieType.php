<?php

namespace BackOffice\RO\CategorieBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CategorieType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nomCategorie')
                ->add('descCategorie')
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
            'data_class' => 'BackOffice\RO\CategorieBundle\Entity\Categorie'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'backoffice_ro_marquebundle_marque';
    }

}
