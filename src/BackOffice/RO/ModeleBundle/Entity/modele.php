<?php

namespace BackOffice\RO\ModeleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use APY\DataGridBundle\Grid\Mapping as GRID;

/**
 * BackOffice\RO\ModeleBundle\Entity\modele
 *
 * @ORM\Table(name="modele")
 * @ORM\Entity(repositoryClass="BackOffice\RO\ModeleBundle\Entity\modeleRepository")
 * 
 * @GRID\Source(columns="id, denominationModele")
 * @GRID\Column(id="denomination_modele", title="Nom", size="255", type="text", operatorsVisible=false)
 */
class Modele {

    public function __construct() {
        $this->createdAt = new \DateTime('now');
    }

    /**
     * @var integer
     * @GRID\Column(visible=false)
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="denomination_modele", type="string", length=250, nullable=false)
     * @GRID\Column(title="Dénomination", size="255", type="text", operatorsVisible=false)
     */
    private $denominationModele;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_modele", type="text", nullable=false)
     */
    private $descModele;

    /**
     * @var Modele $marque
     *
     * @ORM\ManyToOne(targetEntity="BackOffice\RO\MarqueBundle\Entity\Marque", inversedBy="modeles", cascade={"persist", "merge"})
     * @ORM\JoinColumns({
     *  @ORM\JoinColumn(name="id_marque", referencedColumnName="id")
     * })
     */
    protected $marque;

    /**
     * @var ArrayCollection $vehicules
     * 
     * @ORM\OneToMany(targetEntity="BackOffice\RO\VehiculeBundle\Entity\Vehicule", mappedBy="modele", cascade={"persist", "remove", "merge"})
     */
    protected $vehicules;

    function getId() {
        return $this->id;
    }

    function getDenominationModele() {
        return $this->denominationModele;
    }

    function getDescModele() {
        return $this->descModele;
    }

    function getMarque() {
        return $this->marque;
    }

    function getVehicules() {
        return $this->vehicules;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDenominationModele($denominationModele) {
        $this->denominationModele = $denominationModele;
    }

    function setDescModele($descModele) {
        $this->descModele = $descModele;
    }

    /**
     * Set createdAt
     *
     * @param datetime $createdAt
     */
    public function setCreatedAt($createdAt) {
        $this->createdAt = $createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param datetime $updatedAt
     */
    public function setUpdatedAt($updatedAt) {
        $this->updatedAt = $updatedAt;
    }

    function setMarque($marque) {
        $this->marque = $marque;
    }

    function setVehicules($vehicules) {
        $this->vehicules = $vehicules;
    }

}