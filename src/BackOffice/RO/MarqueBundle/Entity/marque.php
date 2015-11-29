<?php

namespace BackOffice\RO\MarqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use APY\DataGridBundle\Grid\Mapping as GRID;

/**
 * BackOffice\RO\MarqueBundle\Entity\marque
 *
 * @ORM\Table(name="marque")
 * @ORM\Entity(repositoryClass="BackOffice\RO\MarqueBundle\Entity\marqueRepository")
 * 
 * @GRID\Source(columns="id, nomMarque")
 * @GRID\Column(id="nom_marque", title="Nom marque", size="255", type="text", operatorsVisible=false)
 */
class Marque {

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
     * @ORM\Column(name="nom_marque", type="string", length=250, nullable=false)
     * @GRID\Column(title="Nom marque", size="255", type="text", operatorsVisible=false)
     */
    private $nomMarque;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_marque", type="text", nullable=true)
     */
    private $descMarque;

    /**
     * @var ArrayCollection $modeles
     * 
     * @ORM\OneToMany(targetEntity="BackOffice\RO\ModeleBundle\Entity\Modele", mappedBy="marque", cascade={"persist", "remove", "merge"})
     */
    protected $modeles;

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

    public function __construct() {
        $this->createdAt = new \DateTime('now');
    }

    function getId() {
        return $this->id;
    }

    function getNomMarque() {
        return $this->nomMarque;
    }

    function getDescMarque() {
        return $this->descMarque;
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

    function getModeles() {
        return $this->modeles;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNomMarque($nomMarque) {
        $this->nomMarque = $nomMarque;
    }

    function setDescMarque($descMarque) {
        $this->descMarque = $descMarque;
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
