<?php

namespace BackOffice\RO\UtilisateurBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use BackOffice\RO\UtilisateurBundle\Entity\Utilisateur;

class RoleType extends AbstractType {

    public $utilisateur;

    public function __construct(Utilisateur $utilisateur=null) {
        $this->utilisateur = $utilisateur;
    }
    
    /**
     * @return string
     */
    public function getName() {
        return 'ro_role_roletype';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {

        $data = array();
        
        //Dans le cas de la modification $utilisateur envoyé en paramétre pour récupérer les roles, tous le reste est mappé automatiquement
        if(!empty($this->utilisateur))
        {
            //Récupération des roles cochés sous forme de tableau compatible avec le paramétre dans de setDefaults
            foreach($this->utilisateur->getRoles() as $roleValue)
            {
                array_push($data, $roleValue->getRole());
            }
            
            $resolver->setDefaults(array(
                'choices' => array('ROLE_USER' => 'Utilisateur',
                    'ROLE_ADMIN' => 'Administrateur',
                    'ROLE_SUPER_ADMIN' => 'Super administrateur'),
                'multiple' => true,
                'expanded' => true,
                'label' => 'Profils',
                'required' => true,
                'data'=>$data,
            ));
        }
        else
        {
            $resolver->setDefaults(array(
                'choices' => array('ROLE_USER' => 'Utilisateur',
                    'ROLE_ADMIN' => 'Administrateur',
                    'ROLE_SUPER_ADMIN' => 'Super administrateur'),
                'multiple' => true,
                'required' => true,
                'expanded' => true,
            ));
        }
    }

    public function getParent() {
        return 'choice';
    }

}
