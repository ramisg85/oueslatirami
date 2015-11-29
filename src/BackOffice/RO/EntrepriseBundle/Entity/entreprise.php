<?php

namespace BackOffice\RO\EntrepriseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use APY\DataGridBundle\Grid\Mapping as GRID;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * BackOffice\RO\EntrepriseBundle\Entity\entreprise
 *
 * @ORM\Entity(repositoryClass="BackOffice\RO\EntrepriseBundle\Entity\entrepriseRepository")
 * 
 * @GRID\Source(columns="id, nomEntreprise, cpEntreprise, villeEntreprise")
 * @GRID\Column(id="nom_entreprise", title="Nom", size="255", type="text", operatorsVisible=false)
 * @GRID\Column(id="cp_entreprise", title="Cp", size="255", type="text", operatorsVisible=false)
 * @GRID\Column(id="ville_entreprise", title="Ville", size="255", type="text", operatorsVisible=false)
 */
class Entreprise {

    /**
     * @var integer
     * @GRID\Column(visible=false)
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_entreprise", type="string", length=250, nullable=false)
     * @GRID\Column(title="Nom", size="255", type="text", operatorsVisible=false)
     */
    private $nomEntreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="raison_social_entreprise", type="string", length=250, nullable=false)
     */
    private $raisonSocialEntreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_entreprise_l1", type="string", length=250, nullable=true)
     */
    private $adresseEntrepriseL1;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_entreprise_l2", type="string", length=250, nullable=true)
     */
    private $adresseEntrepriseL2;

    /**
     * @var string
     *
     * @ORM\Column(name="cp_entreprise", type="string", length=25, nullable=true)
     * @GRID\Column(title="Cp", size="255", type="text", operatorsVisible=false)
     */
    private $cpEntreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_entreprise", type="string", length=250, nullable=true)
     * @GRID\Column(title="Ville", size="255", type="text", operatorsVisible=false)
     */
    private $villeEntreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="pays_entreprise", type="string", length=250, nullable=true)
     */
    private $paysEntreprise;

    function getId() {
        return $this->id;
    }

    function getNomEntreprise() {
        return $this->nomEntreprise;
    }

    function getRaisonSocialEntreprise() {
        return $this->raisonSocialEntreprise;
    }

    function getAdresseEntrepriseL1() {
        return $this->adresseEntrepriseL1;
    }

    function getAdresseEntrepriseL2() {
        return $this->adresseEntrepriseL2;
    }

    function getCpEntreprise() {
        return $this->cpEntreprise;
    }

    function getVilleEntreprise() {
        return $this->villeEntreprise;
    }

    function getPaysEntreprise() {
        return $this->paysEntreprise;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNomEntreprise($nomEntreprise) {
        $this->nomEntreprise = $nomEntreprise;
    }

    function setRaisonSocialEntreprise($raisonSocialEntreprise) {
        $this->raisonSocialEntreprise = $raisonSocialEntreprise;
    }

    function setAdresseEntrepriseL1($adresseEntrepriseL1) {
        $this->adresseEntrepriseL1 = $adresseEntrepriseL1;
    }

    function setAdresseEntrepriseL2($adresseEntrepriseL2) {
        $this->adresseEntrepriseL2 = $adresseEntrepriseL2;
    }

    function setCpEntreprise($cpEntreprise) {
        $this->cpEntreprise = $cpEntreprise;
    }

    function setVilleEntreprise($villeEntreprise) {
        $this->villeEntreprise = $villeEntreprise;
    }

    function setPaysEntreprise($paysEntreprise) {
        $this->paysEntreprise = $paysEntreprise;
    }

}
