<?php

namespace BackOffice\RO\EquipementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use APY\DataGridBundle\Grid\Mapping as GRID;

/**
 * BackOffice\RO\EquipementBundle\Entity\equipement
 *
 * @ORM\Table(name="equipement")
 * @ORM\Entity(repositoryClass="BackOffice\RO\EquipementBundle\Entity\equipementRepository")
 * 
 * @GRID\Source(columns="id, nomEquipement")
 * @GRID\Column(id="nom_equipement", title="Nom équipement", size="255", type="text", operatorsVisible=false)
 */
class Equipement {

    /**
     * @var integer
     * @GRID\Column(visible=false)
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="nom_equipement", type="string", length=30)
     * @GRID\Column(title="Nom équipement", size="255", type="text", operatorsVisible=false)
     */
    private $nomEquipement;

    /**
     * @ORM\Column(name="desc_equipement", type="string", length=500)
     */
    private $descEquipement;

    function getId() {
        return $this->id;
    }

    function getNomEquipement() {
        return $this->nomEquipement;
    }

    function getDescEquipement() {
        return $this->descEquipement;
    }

    function getVehicules() {
        return $this->vehicules;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNomEquipement($nomEquipement) {
        $this->nomEquipement = $nomEquipement;
    }

    function setDescEquipement($descEquipement) {
        $this->descEquipement = $descEquipement;
    }

    function setVehicules(ArrayCollection $vehicules) {
        $this->vehicules = $vehicules;
    }

}
