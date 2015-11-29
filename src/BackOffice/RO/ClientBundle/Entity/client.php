<?php

namespace BackOffice\RO\ClientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client", indexes={@ORM\Index(name="travaille_chez_fk", columns={"id_entreprise"})})
 * @ORM\Entity
 */
class Client {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_client", type="string", length=250, nullable=false)
     */
    private $prenomClient;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_client", type="string", length=250, nullable=false)
     */
    private $nomClient;

    /**
     * @var string
     *
     * @ORM\Column(name="sex_client", type="string", length=25, nullable=false)
     */
    private $sexClient;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_client", type="string", length=250, nullable=false)
     */
    private $mailClient;

    /**
     * @var string
     *
     * @ORM\Column(name="tel_client", type="string", length=100, nullable=false)
     */
    private $telClient;

    /**
     * @var string
     *
     * @ORM\Column(name="login_client", type="string", length=250, nullable=false)
     */
    private $loginClient;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp_client", type="string", length=250, nullable=false)
     */
    private $mdpClient;

    /**
     * @var \Entreprise
     *
     * @ORM\ManyToOne(targetEntity="Entreprise")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_entreprise", referencedColumnName="id")
     * })
     */
    private $idEntreprise;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Vehicule", inversedBy="idClient")
     * @ORM\JoinTable(name="louer",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_client", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_vehicule", referencedColumnName="id")
     *   }
     * )
     */
    private $idVehicule;

    /**
     * Constructor
     */
    public function __construct() {
        $this->idVehicule = new \Doctrine\Common\Collections\ArrayCollection();
    }

    function getId() {
        return $this->id;
    }

    function getPrenomClient() {
        return $this->prenomClient;
    }

    function getNomClient() {
        return $this->nomClient;
    }

    function getSexClient() {
        return $this->sexClient;
    }

    function getMailClient() {
        return $this->mailClient;
    }

    function getTelClient() {
        return $this->telClient;
    }

    function getLoginClient() {
        return $this->loginClient;
    }

    function getMdpClient() {
        return $this->mdpClient;
    }

    function getIdEntreprise() {
        return $this->idEntreprise;
    }

    function getIdVehicule() {
        return $this->idVehicule;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setPrenomClient($prenomClient) {
        $this->prenomClient = $prenomClient;
    }

    function setNomClient($nomClient) {
        $this->nomClient = $nomClient;
    }

    function setSexClient($sexClient) {
        $this->sexClient = $sexClient;
    }

    function setMailClient($mailClient) {
        $this->mailClient = $mailClient;
    }

    function setTelClient($telClient) {
        $this->telClient = $telClient;
    }

    function setLoginClient($loginClient) {
        $this->loginClient = $loginClient;
    }

    function setMdpClient($mdpClient) {
        $this->mdpClient = $mdpClient;
    }

    function setIdEntreprise(\Entreprise $idEntreprise) {
        $this->idEntreprise = $idEntreprise;
    }

    function setIdVehicule(\Doctrine\Common\Collections\Collection $idVehicule) {
        $this->idVehicule = $idVehicule;
    }

}
