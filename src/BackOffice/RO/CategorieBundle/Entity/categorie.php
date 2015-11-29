<?php

namespace BackOffice\RO\CategorieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use APY\DataGridBundle\Grid\Mapping as GRID;

/**
 * BackOffice\RO\CategorieBundle\Entity\categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity(repositoryClass="BackOffice\RO\CategorieBundle\Entity\categorieRepository")
 * 
 * @GRID\Source(columns="id, nomCategorie")
 * @GRID\Column(id="nom_categorie", title="Nom", size="255", type="text", operatorsVisible=false)
 */
class Categorie {

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
     * @ORM\Column(name="nom_categorie", type="string", length=250, nullable=false)
     * @GRID\Column(title="Nom catégorie", size="255", type="text", operatorsVisible=false)
     */
    private $nomCategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_categorie", type="text", nullable=false)
     */
    private $descCategorie;

    /**
     * @var ArrayCollection $vehicules
     * 
     * @ORM\OneToMany(targetEntity="BackOffice\RO\VehiculeBundle\Entity\Vehicule", mappedBy="categorie", cascade={"persist", "remove", "merge"})
     */
    protected $vehicules;

    function getId() {
        return $this->id;
    }

    function getNomCategorie() {
        return $this->nomCategorie;
    }

    function getDescCategorie() {
        return $this->descCategorie;
    }

    function getVehicules() {
        return $this->vehicules;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNomCategorie($nomCategorie) {
        $this->nomCategorie = $nomCategorie;
    }

    function setDescCategorie($descCategorie) {
        $this->descCategorie = $descCategorie;
    }

    function setVehicules($vehicules) {
        $this->vehicules = $vehicules;
    }

}
