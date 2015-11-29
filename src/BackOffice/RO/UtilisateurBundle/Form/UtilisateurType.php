<?php

namespace BackOffice\RO\UtilisateurBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use BackOffice\RO\UtilisateurBundle\Entity\Utilisateur;

class UtilisateurType extends AbstractType {

    public $utilisateur;

    public function __construct(Utilisateur $utilisateur = null) {
        $this->utilisateur = $utilisateur;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {

        //Dans le cas de la modification $utilisateur envoyé en paramétre pour récupérer les roles à RoleType
        ((!empty($this->utilisateur)) ? $roleType = new RoleType($this->utilisateur) : $roleType = new RoleType());

        $builder
                ->add('nom_utilisateur', 'text', array('label' => 'Nom', 'max_length' => 75))
                ->add('prenom_utilisateur', 'text', array('label' => 'Prénom', 'max_length' => 75))
                ->add('email_utilisateur', 'text', array('label' => 'Mail', 'max_length' => 200))
                ->add('agence', 'entity', array(
                    'label' => 'Nom agence',
                    'class' => 'BackOffice\RO\AgenceBundle\Entity\Agence',
                    'property' => 'nomAgence',
                    'required'    => true,
                    'empty_data'  => 'Séléctionner une agence',
                    'attr'=> array('class'=>'ucfirst')))
                ->add('login_utilisateur', 'text', array('label' => 'Login', 'max_length' => 75))
                ->add('mdp_utilisateur', 'repeated', array(
                    'type' => 'password',
                    'invalid_message' => 'Les mots de passe doivent correspondre',
                    'options' => array('required' => true, 'always_empty' => true),
                    'first_options' => array('label' => 'Password', 'translation_domain' => 'messages', 'max_length' => 200),
                    'second_options' => array('label' => 'Password (validation)', 'translation_domain' => 'messages', 'max_length' => 200),
                ))
                ->add('dt_naissance_utilisateur', 'birthday', array('widget' => 'single_text', 'label' => 'Date de naissance', 'format' => 'dd/MM/yyyy', 'attr' => array('class' => 'datepicker', 'data-date-format' => 'dd/mm/yyyy')))
                ->add('roles', $roleType, array('mapped' => false, 'label' => 'Rôle utilisateur'))
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
            'data_class' => 'BackOffice\RO\UtilisateurBundle\Entity\Utilisateur',
            'cascade_validation' => true,
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            // une clé unique pour aider à la génération du jeton secret
            'intention' => 'utilisateur_item',
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'ro_utilisateur_utilisateurtype';
    }

}
