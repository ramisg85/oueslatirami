<?php

namespace BackOffice\RO\AgenceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use APY\DataGridBundle\Grid\Mapping as GRID;

/**
 * BackOffice\RO\AgenceBundle\Entity\agence
 *
 * @ORM\Table(name="agence")
 * @ORM\Entity(repositoryClass="BackOffice\RO\AgenceBundle\Entity\agenceRepository")
 * 
 * @GRID\Source(columns="id, nomAgence, cpAgence, villeAgence")
 * @GRID\Column(id="nom_agence", title="Nom", size="255", type="text", operatorsVisible=false)
 * @GRID\Column(id="cp_agence", title="Cp", size="255", type="text", operatorsVisible=false)
 * @GRID\Column(id="ville_agence", title="Ville", size="255", type="text", operatorsVisible=false)
 */
class Agence {

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
     * @ORM\Column(name="nom_agence", type="string", length=250, nullable=false)
     * @GRID\Column(title="Nom agence", size="255", type="text", operatorsVisible=false)
     */
    private $nomAgence;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_agence_l1", type="string", length=250, nullable=false)
     */
    private $adresseAgenceL1;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_agence_l2", type="string", length=250, nullable=false)
     */
    private $adresseAgenceL2;

    /**
     * @var string
     *
     * @ORM\Column(name="cp_agence", type="string", length=50, nullable=false)
     * @GRID\Column(title="Cp", size="255", type="text", operatorsVisible=false)
     */
    private $cpAgence;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_agence", type="string", length=250, nullable=false)
     * @GRID\Column(title="Ville", size="255", type="text", operatorsVisible=false)
     */
    private $villeAgence;

    /**
     * @var string
     *
     * @ORM\Column(name="pays_agence", type="string", length=250, nullable=false)
     */
    private $paysAgence;

    /**
     * @var ArrayCollection $utilisateurs
     * 
     * @ORM\OneToMany(targetEntity="BackOffice\RO\UtilisateurBundle\Entity\Utilisateur", mappedBy="agence", cascade={"persist", "remove", "merge"})
     */
    protected $utilisateurs;

    /**
     * @var string
     *
     * @ORM\Column(name="logo_agence", type="string", length=500, nullable=false)
     */
    private $logoAgence;

    /**
     * @var datetime $createdAt
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var datetime $updatedAt
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updatedAt;

    /**
     * @var datetime $expireAt
     *
     * @ORM\Column(name="expire_at", type="datetime", nullable=false)
     */
    private $expireAt;

    public function __construct() {
        $this->createdAt = new \DateTime('now');
    }

    function getId() {
        return $this->id;
    }

    function getNomAgence() {
        return $this->nomAgence;
    }

    function getAdresseAgenceL1() {
        return $this->adresseAgenceL1;
    }

    function getAdresseAgenceL2() {
        return $this->adresseAgenceL2;
    }

    function getCpAgence() {
        return $this->cpAgence;
    }

    function getVilleAgence() {
        return $this->villeAgence;
    }

    function getPaysAgence() {
        return $this->paysAgence;
    }

    function getLogoAgence() {
        return $this->logoAgence;
    }

    /**
     * Get createdAt
     *
     * @return datetime 
     */
    public function getCreatedAt() {
        return $this->createdAt;
    }

    /**
     * Get updatedAt
     *
     * @return datetime 
     */
    public function getUpdatedAt() {
        return $this->updatedAt;
    }

    /**
     * Get updatedAt
     *
     * @return datetime 
     */
    function getExpireAt() {
        return $this->expireAt;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNomAgence($nomAgence) {
        $this->nomAgence = $nomAgence;
    }

    function setAdresseAgenceL1($adresseAgenceL1) {
        $this->adresseAgenceL1 = $adresseAgenceL1;
    }

    function setAdresseAgenceL2($adresseAgenceL2) {
        $this->adresseAgenceL2 = $adresseAgenceL2;
    }

    function setCpAgence($cpAgence) {
        $this->cpAgence = $cpAgence;
    }

    function setVilleAgence($villeAgence) {
        $this->villeAgence = $villeAgence;
    }

    function setPaysAgence($paysAgence) {
        $this->paysAgence = $paysAgence;
    }

    function setLogoAgence($logoAgence) {
        $this->logoAgence = $logoAgence;
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

    /**
     * Set updatedAt
     *
     * @param datetime $updatedAt
     */
    function setExpireAt($expireAt) {
        $this->expireAt = $expireAt;
    }

}
