<?php

namespace BackOffice\RO\UtilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\Role\RoleInterface;

/**
 * BackOffice\RO\RoleBundle\Entity\role
 *
 * @ORM\Table(name="role")
 * @ORM\Entity(repositoryClass="BackOffice\RO\UtilisateurBundle\Entity\roleRepository")
 */
class Role implements RoleInterface {

    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="nom_role", type="string", length=30)
     */
    private $nom_role;

    /**
     * @see RoleInterface
     */
    public function getRole() {
        return $this->nom_role;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nom_role
     *
     * @param string $nomRole
     * @return Role
     */
    public function setNomRole($nomRole) {
        $this->nom_role = $nomRole;

        return $this;
    }

    /**
     * Get nom_role
     *
     * @return string 
     */
    public function getNomRole() {
        return $this->nom_role;
    }
}
