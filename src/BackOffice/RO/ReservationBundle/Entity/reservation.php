<?php

namespace BackOffice\RO\ReservationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use APY\DataGridBundle\Grid\Mapping as GRID;

/**
 * BackOffice\RO\ReservationBundle\Entity\reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="BackOffice\RO\ReservationBundle\Entity\reservationRepository")
 * 
 * @GRID\Source(columns="id, numReservation")
 * @GRID\Column(id="num_reservation", title="N°", size="255", type="text", operatorsVisible=false)
 * @GRID\Column(id="date_reservation", title="Date", size="255", type="date", operatorsVisible=false)
 */
class Reservation {

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
     * @ORM\Column(name="num_reservation", type="string", length=250, nullable=false)
     * @GRID\Column(title="N° rés", size="255", type="text", operatorsVisible=false)
     */
    private $numReservation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_reservation", type="date", nullable=false)
     * @GRID\Column(title="Date", type="date", operatorsVisible=false)
     */
    private $dateReservation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_deb_reservation", type="date", nullable=true)
     */
    private $dateDebReservation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin_reservation", type="date", nullable=true)
     */
    private $dateFinReservation;

    /**
     * @var float
     *
     * @ORM\Column(name="nb_jour_reservation", type="float", precision=10, scale=0, nullable=false)
     */
    private $nbJourReservation;

    /**
     * @var float
     *
     * @ORM\Column(name="mnt_arrhes_reservation", type="float", precision=10, scale=0, nullable=true)
     */
    private $mntArrhesReservation;

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

    function getId() {
        return $this->id;
    }

    function getNumReservation() {
        return $this->numReservation;
    }

    function getDateReservation() {
        return $this->dateReservation;
    }

    function getDateDebReservation() {
        return $this->dateDebReservation;
    }

    function getDateFinReservation() {
        return $this->dateFinReservation;
    }

    function getNbJourReservation() {
        return $this->nbJourReservation;
    }

    function getMntArrhesReservation() {
        return $this->mntArrhesReservation;
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

    function setId($id) {
        $this->id = $id;
    }

    function setNumReservation($numReservation) {
        $this->numReservation = $numReservation;
    }

    function setDateReservation(\DateTime $dateReservation) {
        $this->dateReservation = $dateReservation;
    }

    function setDateDebReservation(\DateTime $dateDebReservation) {
        $this->dateDebReservation = $dateDebReservation;
    }

    function setDateFinReservation(\DateTime $dateFinReservation) {
        $this->dateFinReservation = $dateFinReservation;
    }

    function setNbJourReservation($nbJourReservation) {
        $this->nbJourReservation = $nbJourReservation;
    }

    function setMntArrhesReservation($mntArrhesReservation) {
        $this->mntArrhesReservation = $mntArrhesReservation;
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

}
