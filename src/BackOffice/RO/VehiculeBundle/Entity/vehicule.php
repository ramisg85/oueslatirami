<?php

namespace BackOffice\RO\VehiculeBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use APY\DataGridBundle\Grid\Mapping as GRID;

/**
 * BackOffice\RO\VehiculeBundle\Entity\vehicule
 *
 * @ORM\Table(name="vehicule", indexes={@ORM\Index(name="categoriser_dans_fk", columns={"id_categorie"}), @ORM\Index(name="est_present_dans_fk", columns={"id_agence"}), @ORM\Index(name="appartenir_fk", columns={"id_modele"})})
 * @ORM\Entity(repositoryClass="BackOffice\RO\VehiculeBundle\Entity\vehiculeRepository")
 * 
 * @GRID\Source(columns="id, typeVehicule, numImmatVehicule, tarifJournalier")
 * @GRID\Column(id="type_vehicule", title="Type", size="255", type="text", operatorsVisible=false)
 * @GRID\Column(id="num_immat_vehicule", title="Immat", size="255", type="text", operatorsVisible=false)
 * @GRID\Column(id="tarif_journalier", title="Tarif/J", size="255", type="text", operatorsVisible=false)
 */
class Vehicule {

    /**
     * @var integer
     * @GRID\Column(visible=false)
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="type_vehicule", type="string", length=250, nullable=false)
     * @GRID\Column(title="Type", size="255", type="text", operatorsVisible=false)
     * @Assert\NotNull(message = "Le type véhicule est obligatoire")
     */
    protected $typeVehicule;

    /**
     *
     * @ORM\Column(name="date_mise_circulation_vehicule", type="date", nullable=false)
     * @Assert\NotNull(message = "La date de premiére mise en circulation est obligatoire")
     * @Assert\Date(message = "La date de premiére mise en circulation est invalide")
     */
    protected $dateMiseCirculationVehicule;

    /**
     * @var string
     *
     * @ORM\Column(name="num_immat_vehicule", type="string", length=250, nullable=false)
     * @GRID\Column(title="Immatriculation", size="255", type="text", operatorsVisible=false)
     * @Assert\NotNull(message = "Le numéro d'immatriculation est obligatoire")
     */
    protected $numImmatVehicule;

    /**
     * @var float
     *
     * @ORM\Column(name="tarif_journalier", type="float", precision=10, scale=0, nullable=false)
     * @GRID\Column(title="Tarif/jour", size="255", type="text", operatorsVisible=false)
     */
    protected $tarifJournalier;

    /**
     * @var Modele $modele
     *
     * @ORM\ManyToOne(targetEntity="BackOffice\RO\ModeleBundle\Entity\Modele", inversedBy="vehicules", cascade={"persist", "merge"})
     * @ORM\JoinColumns({
     *  @ORM\JoinColumn(name="id_modele", referencedColumnName="id")
     * })
     */
    protected $modele;

    /**
     * @var Marque $marque
     *
     * @ORM\ManyToOne(targetEntity="BackOffice\RO\MarqueBundle\Entity\Marque", inversedBy="vehicules", cascade={"persist", "merge"})
     * @ORM\JoinColumns({
     *  @ORM\JoinColumn(name="id_marque", referencedColumnName="id")
     * })
     */
    protected $marque;

    /**
     * @var Categorie $categorie
     *
     * @ORM\ManyToOne(targetEntity="BackOffice\RO\CategorieBundle\Entity\Categorie", inversedBy="vehicules", cascade={"persist", "merge"})
     * @ORM\JoinColumns({
     *  @ORM\JoinColumn(name="id_categorie", referencedColumnName="id")
     * })
     */
    protected $categorie;

    /**
     * @var Agence $agence
     *
     * @ORM\ManyToOne(targetEntity="BackOffice\RO\AgenceBundle\Entity\Agence", inversedBy="vehicules", cascade={"persist", "merge"})
     * @ORM\JoinColumns({
     *  @ORM\JoinColumn(name="id_agence", referencedColumnName="id")
     * })
     */
    protected $agence;

    /**
     * @ORM\ManyToMany(targetEntity="BackOffice\RO\EquipementBundle\Entity\Equipement", cascade={"persist"})
     * @ORM\JoinTable(name="vehicule_equipement",
     *      joinColumns={@ORM\JoinColumn(name="vehicule_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="equipement_id", referencedColumnName="id")}
     *      )
     */
    protected $equipements;

    //Todo Mapping à faire
    //protected $client;

    /**
     * @var $createdAt
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    protected $createdAt;

    /**
     * @var $updatedAt
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    protected $updatedAt;

    /**
     * Constructor
     */
    public function __construct() {
        $this->equipement = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idClient = new \Doctrine\Common\Collections\ArrayCollection();
    }

    function getId() {
        return $this->id;
    }

    function getTypeVehicule() {
        return $this->typeVehicule;
    }

    function getDateMiseCirculationVehicule() {
        return $this->dateMiseCirculationVehicule;
    }

    function getNumImmatVehicule() {
        return $this->numImmatVehicule;
    }

    function getCreatedAt() {
        return $this->createdAt;
    }

    function getUpdatedAt() {
        return $this->updatedAt;
    }

    function getTarifJournalier() {
        return $this->tarifJournalier;
    }

    function getModele() {
        return $this->modele;
    }

    /**
     * Get marque
     *
     * @return integer 
     */
    function getMarque() {
        return $this->marque;
    }

    /**
     * Get categorie
     *
     * @return integer 
     */
    function getCategorie() {
        return $this->categorie;
    }

    /**
     * Get agence
     *
     * @return integer 
     */
    function getAgence() {
        return $this->agence;
    }

    function getEquipements() {
        return $this->equipements;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTypeVehicule($typeVehicule) {
        $this->typeVehicule = $typeVehicule;
    }

    function setDateMiseCirculationVehicule( $dateMiseCirculationVehicule = '0000-00-00') {
        $this->dateMiseCirculationVehicule = $dateMiseCirculationVehicule;
    }

    function setNumImmatVehicule($numImmatVehicule) {
        $this->numImmatVehicule = $numImmatVehicule;
    }

    function setCreatedAt(\DateTime $createdAt) {
        $this->createdAt = $createdAt;
    }

    function setUpdatedAt(\DateTime $updatedAt) {
        $this->updatedAt = $updatedAt;
    }

    function setTarifJournalier($tarifJournalier) {
        $this->tarifJournalier = $tarifJournalier;
    }

    function setModele($modele) {
        $this->modele = $modele;
    }

    function setMarque($marque) {
        $this->marque = $marque;
    }

    function setCategorie($categorie) {
        $this->categorie = $categorie;
    }

    function setAgence($agence) {
        $this->agence = $agence;
    }

    function setEquipements($equipements) {
        $this->equipements = $equipements;
    }

}
