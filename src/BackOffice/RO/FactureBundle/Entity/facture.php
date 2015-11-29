<?php

namespace BackOffice\RO\FactureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facture
 *
 * @ORM\Table(name="facture")
 * @ORM\Entity
 */
class Facture {

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
     * @ORM\Column(name="num_facture", type="string", length=250, nullable=false)
     */
    private $numFacture;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_facture", type="date", nullable=false)
     */
    private $dateFacture;

    /**
     * @var float
     *
     * @ORM\Column(name="total_ht_facture", type="float", precision=10, scale=0, nullable=false)
     */
    private $totalHtFacture;

    /**
     * @var float
     *
     * @ORM\Column(name="total_ttc_facture", type="float", precision=10, scale=0, nullable=false)
     */
    private $totalTtcFacture;

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

    function getId() {
        return $this->id;
    }

    function getNumFacture() {
        return $this->numFacture;
    }

    function getDateFacture() {
        return $this->dateFacture;
    }

    function getTotalHtFacture() {
        return $this->totalHtFacture;
    }

    function getTotalTtcFacture() {
        return $this->totalTtcFacture;
    }

    function getCreatedAt() {
        return $this->createdAt;
    }

    function getUpdatedAt() {
        return $this->updatedAt;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNumFacture($numFacture) {
        $this->numFacture = $numFacture;
    }

    function setDateFacture(\DateTime $dateFacture) {
        $this->dateFacture = $dateFacture;
    }

    function setTotalHtFacture($totalHtFacture) {
        $this->totalHtFacture = $totalHtFacture;
    }

    function setTotalTtcFacture($totalTtcFacture) {
        $this->totalTtcFacture = $totalTtcFacture;
    }

    function setCreatedAt(\DateTime $createdAt) {
        $this->createdAt = $createdAt;
    }

    function setUpdatedAt(\DateTime $updatedAt) {
        $this->updatedAt = $updatedAt;
    }

}
