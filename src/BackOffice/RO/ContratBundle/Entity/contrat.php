<?php

namespace BackOffice\RO\ContratBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use APY\DataGridBundle\Grid\Mapping as GRID;

/**
 * BackOffice\RO\ContratBundle\Entity\contrat
 *
 * @ORM\Table(name="contrat")
 * @ORM\Entity(repositoryClass="BackOffice\RO\ContratBundle\Entity\contratRepository")
 * 
 * @GRID\Source(columns="id, numContrat, dateContrat, montantAccompte")
 * @GRID\Column(id="num_contrat", title="Nom", size="255", type="text", operatorsVisible=false)
 * @GRID\Column(id="date_contrat", title="Cp", size="255", type="date", operatorsVisible=false)
 * @GRID\Column(id="montant_accompte", title="Ville", size="255", type="float", operatorsVisible=false)
 */
class Contrat {

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
     * @ORM\Column(name="num_contrat", type="string", length=250, nullable=false)
     * @GRID\Column(title="Num contrat", size="255", type="text", operatorsVisible=false)
     */
    private $numContrat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_contrat", type="date", nullable=false)
     * @GRID\Column(title="Dt contrat", size="255", type="date", operatorsVisible=false)
     */
    private $dateContrat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_depart", type="date", nullable=false)
     */
    private $dateDepart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_retour", type="date", nullable=false)
     */
    private $dateRetour;

    /**
     * @var float
     *
     * @ORM\Column(name="km_depart", type="float", precision=10, scale=0, nullable=false)
     */
    private $kmDepart;

    /**
     * @var float
     *
     * @ORM\Column(name="km_arrive", type="float", precision=10, scale=0, nullable=false)
     */
    private $kmArrive;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_journalier", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixJournalier;

    /**
     * @var float
     *
     * @ORM\Column(name="montant_accompte", type="float", precision=10, scale=0, nullable=false)
     * @GRID\Column(title="Accompte", size="255", type="float", operatorsVisible=false)
     */
    private $montantAccompte;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expire_at", type="datetime", nullable=true)
     */
    private $expireAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var \Facture
     *
     * @ORM\ManyToOne(targetEntity="BackOffice\RO\FactureBundle\Entity\Facture")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_facture", referencedColumnName="id")
     * })
     */
    private $idFacture;

    function getId() {
        return $this->id;
    }

    function getNumContrat() {
        return $this->numContrat;
    }

    function getDateContrat() {
        return $this->dateContrat;
    }

    function getDateDepart() {
        return $this->dateDepart;
    }

    function getDateRetour() {
        return $this->dateRetour;
    }

    function getKmDepart() {
        return $this->kmDepart;
    }

    function getKmArrive() {
        return $this->kmArrive;
    }

    function getPrixJournalier() {
        return $this->prixJournalier;
    }

    function getMontantAccompte() {
        return $this->montantAccompte;
    }

    function getExpireAt() {
        return $this->expireAt;
    }

    function getCreatedAt() {
        return $this->createdAt;
    }

    function getUpdatedAt() {
        return $this->updatedAt;
    }

    function getIdFacture() {
        return $this->idFacture;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNumContrat($numContrat) {
        $this->numContrat = $numContrat;
    }

    function setDateContrat(\DateTime $dateContrat) {
        $this->dateContrat = $dateContrat;
    }

    function setDateDepart(\DateTime $dateDepart) {
        $this->dateDepart = $dateDepart;
    }

    function setDateRetour(\DateTime $dateRetour) {
        $this->dateRetour = $dateRetour;
    }

    function setKmDepart($kmDepart) {
        $this->kmDepart = $kmDepart;
    }

    function setKmArrive($kmArrive) {
        $this->kmArrive = $kmArrive;
    }

    function setPrixJournalier($prixJournalier) {
        $this->prixJournalier = $prixJournalier;
    }

    function setMontantAccompte($montantAccompte) {
        $this->montantAccompte = $montantAccompte;
    }

    function setExpireAt(\DateTime $expireAt) {
        $this->expireAt = $expireAt;
    }

    function setCreatedAt(\DateTime $createdAt) {
        $this->createdAt = $createdAt;
    }

    function setUpdatedAt(\DateTime $updatedAt) {
        $this->updatedAt = $updatedAt;
    }

    function setIdFacture(\Facture $idFacture) {
        $this->idFacture = $idFacture;
    }

}
