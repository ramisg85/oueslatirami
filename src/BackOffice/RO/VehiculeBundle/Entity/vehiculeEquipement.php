<?php

namespace BackOffice\RO\VehiculeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BackOffice\RO\EquipementBundle\Entity\equipement
 *
 * @ORM\Table(name="vehicule_equipement")
 * @ORM\Entity(repositoryClass="BackOffice\RO\VehiculeBundle\Entity\vehiculeEquipementRepository")
 */
class VehiculeEquipement {

    /**
     * @ORM\ManyToOne(targetEntity="BackOffice\RO\VehiculeBundle\Entity\vehicule")
     * @ORM\Id
     * @ORM\JoinColumn(nullable=false)
     */
    private $vehicule;

    /**
     * @ORM\ManyToOne(targetEntity="BackOffice\RO\EquipementBundle\Entity\Equipement")
     * @ORM\Id
     * @ORM\JoinColumn(nullable=false)
     */
    private $equipement;

    function getVehicule() {
        return $this->vehicule;
    }

    function getEquipement() {
        return $this->equipement;
    }

    function setVehicule($vehicule) {
        $this->vehicule = $vehicule;
    }

    function setEquipement($equipement) {
        $this->equipement = $equipement;
    }

}
