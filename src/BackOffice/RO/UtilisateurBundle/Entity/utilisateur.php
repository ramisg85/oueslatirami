<?php

namespace BackOffice\RO\UtilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use APY\DataGridBundle\Grid\Mapping as GRID;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * BackOffice\RO\UtilisateurBundle\Entity\utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity(repositoryClass="BackOffice\RO\UtilisateurBundle\Entity\utilisateurRepository")
 * 
 * @GRID\Source(columns="id, nom_utilisateur, prenom_utilisateur, email_utilisateur")
 */
class Utilisateur implements AdvancedUserInterface, \Serializable {

    /**
     * @var integer
     * @GRID\Column(visible=false)
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity="Role", cascade={"persist"})
     * @ORM\JoinTable(name="utilisateur_role",
     *      joinColumns={@ORM\JoinColumn(name="utilisateur_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="role_id", referencedColumnName="id")}
     *      )
     */
    private $roles;

    /**
     * @ORM\Column(name="nom_utilisateur", type="string", length=255, unique=true)
     * @GRID\Column(title="Prénom", size="255", type="text", operatorsVisible=false)
     */
    protected $nom_utilisateur;

    /**
     * @ORM\Column(name="prenom_utilisateur", type="string", length=255, unique=true)
     * @GRID\Column(title="Nom", size="255", type="text", operatorsVisible=false)
     */
    protected $prenom_utilisateur;

    /**
     * @ORM\Column(name="email_utilisateur", type="string", length=255, nullable=false)
     * @GRID\Column(title="Mail", size="255", type="text", operatorsVisible=false)
     */
    protected $email_utilisateur;

    /**
     * @ORM\Column(name="login_utilisateur", type="string", length=255, unique=true)
     */
    protected $login_utilisateur;

    /**
     * @var Agence $agence
     *
     * @ORM\ManyToOne(targetEntity="BackOffice\RO\AgenceBundle\Entity\Agence", inversedBy="utilisateurs", cascade={"persist", "merge"})
     * @ORM\JoinColumns({
     *  @ORM\JoinColumn(name="id_agence", referencedColumnName="id")
     * })
     */
    protected $agence;

    /**
     * @ORM\Column(name="salt", type="string", length=32)
     */
    private $salt;

    /**
     * @ORM\Column(name="mdp_utilisateur", type="string", length=255)
     */
    protected $mdp_utilisateur;

    /**
     * @ORM\Column(name="dt_naissance_utilisateur", type="date")
     */
    protected $dt_naissance_utilisateur;

    /**
     * @ORM\Column(name="actif_utilisateur", type="boolean", nullable=false)
     */
    protected $actif_utilisateur;

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

    //Methode a implementer de l'interface User interface
    public function __construct() {
        $this->actif_utilisateur = true;
        $this->salt = md5(uniqid(null, true));
        $this->roles = new ArrayCollection();
        $this->createdAt = new \DateTime('now');
    }

    /**
     * @inheritDoc
     */
    public function getSalt() {
        return $this->salt;
    }

    /**
     * @inheritDoc
     */
    public function getRoles() {
        return $this->roles->toArray();
    }

    /**
     * @inheritDoc
     */
    public function getUsername() {
        return $this->login_utilisateur;
    }

    /**
     * @inheritDoc
     */
    public function getPassword() {
        return $this->mdp_utilisateur;
    }

    /**
     * @inheritDoc
     */
    public function eraseCredentials() {
        
    }

    /**
     * @see \Serializable::serialize()
     */
    public function serialize() {
        return serialize(array(
            $this->id,
        ));
    }

    /**
     * @see \Serializable::unserialize()
     */
    public function unserialize($serialized) {
        list ($this->id, ) = unserialize($serialized);
    }

    //Fonction qui retourne si le compte utilisateur est expiré
    public function isAccountNonExpired() {
        return true;
    }

    //Fonction qui retourne si le compte utilisateur est verouillé
    public function isAccountNonLocked() {
        return true;
    }

    //Fonction qui retourne si le compte utilisateur n'est pas expiré
    public function isCredentialsNonExpired() {
        return true;
    }

    //Fonction qui retourne si le compte utilisateur est désactivé
    public function isEnabled() {
        return $this->actif_utilisateur;
    }

    public function getLastname() {
        return $this->nom_utilisateur;
    }

    public function getFirstname() {
        return $this->prenom_utilisateur;
    }

    //Getteur et setteur des metadonnées de l'entity modele utilisateur
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        return $this->id = $id;
    }

    /**
     * Get nom_utilisateur
     *
     * @return string 
     */
    public function getNomUtilisateur() {
        return $this->nom_utilisateur;
    }

    public function setNomUtilisateur($nom_utilisateur) {
        return $this->nom_utilisateur = $nom_utilisateur;
    }

    /**
     * Get prenom_utilisateur
     *
     * @return string 
     */
    public function getPrenomUtilisateur() {
        return $this->prenom_utilisateur;
    }

    public function setPrenomUtilisateur($prenom_utilisateur) {
        return $this->prenom_utilisateur = $prenom_utilisateur;
    }

    /**
     * Get email_utilisateur
     *
     * @return string 
     */
    public function getEmailUtilisateur() {
        return $this->email_utilisateur;
    }

    public function setEmailUtilisateur($email_utilisateur) {
        return $this->email_utilisateur = $email_utilisateur;
    }

    /**
     * Get login_utilisateur
     *
     * @return string 
     */
    public function getLoginUtilisateur() {
        return $this->login_utilisateur;
    }

    public function setLoginUtilisateur($login_utilisateur) {
        return $this->login_utilisateur = $login_utilisateur;
    }

    /**
     * Get mdp_utilisateur
     *
     * @return string 
     */
    public function getMdpUtilisateur() {
        return $this->mdp_utilisateur;
    }

    public function setMdpUtilisateur($mdp_utilisateur) {
        return $this->mdp_utilisateur = $mdp_utilisateur;
    }

    /**
     * Get dt_naissance_utilisateur
     *
     * @return date 
     */
    public function getDtNaissanceUtilisateur() {
        return $this->dt_naissance_utilisateur;
    }

    public function setDtNaissanceUtilisateur($dt_naissance_utilisateur = '0000-00-00') {
        return $this->dt_naissance_utilisateur = $dt_naissance_utilisateur;
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
     * Get createdAt
     *
     * @return datetime 
     */
    public function getCreatedAt() {
        return $this->createdAt;
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
     * Get updatedAt
     *
     * @return datetime 
     */
    public function getUpdatedAt() {
        return $this->updatedAt;
    }

    /**
     * Set expireAt
     *
     * @param datetime $expireAt
     */
    public function setExpireAt($expireAt) {
        $this->updatedAt = $expireAt;
    }

    /**
     * Get expireAt
     *
     * @return datetime 
     */
    public function getExpireAt() {
        return $this->expireAt;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return Utilisateur
     */
    public function setSalt($salt) {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Set actif_utilisateur
     *
     * @param boolean $actifUtilisateur
     * @return Utilisateur
     */
    public function setActifUtilisateur($actifUtilisateur) {
        $this->actif_utilisateur = $actifUtilisateur;

        return $this;
    }

    /**
     * Get actif_utilisateur
     *
     * @return boolean 
     */
    public function getActifUtilisateur() {
        return $this->actif_utilisateur;
    }

    public function addRole(\BackOffice\RO\UtilisateurBundle\Entity\Role $role) {
        $this->roles[] = $role;
        return $this;
    }

    public function removeRole(\BackOffice\RO\UtilisateurBundle\Entity\Role $role) {
        $this->roles->removeElement($role);
    }

    /**
     * Get agence
     *
     * @return integer 
     */
    public function getAgence() {
        return $this->agence;
    }

    public function setAgence($agence) {
        return $this->agence = $agence;
    }

}
