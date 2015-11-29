<?php

namespace BackOffice\RO\UtilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BackOffice\RO\RoleBundle\Entity\role
 *
 * @ORM\Table(name="utilisateur_role")
 * @ORM\Entity(repositoryClass="BackOffice\RO\UtilisateurBundle\Entity\UtilisateurRoleRepository")
 */
class UtilisateurRole {

    /**
     * @ORM\ManyToOne(targetEntity="BackOffice\RO\UtilisateurBundle\Entity\utilisateur")
     * @ORM\Id
     * @ORM\JoinColumn(nullable=false)
     */
    private $utilisateur;

    /**
     * @ORM\ManyToOne(targetEntity="BackOffice\RO\UtilisateurBundle\Entity\role")
     * @ORM\Id
     * @ORM\JoinColumn(nullable=false)
     */
    private $role;

    function getUtilisateur() {
        return $this->utilisateur;
    }

    function getRole() {
        return $this->role;
    }

    function setUtilisateur($utilisateur) {
        $this->utilisateur = $utilisateur;
    }

    function setRole($role) {
        $this->role = $role;
    }

}
