<?php

namespace AKYOS\EasyCoproBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Locataire
 *
 * @ORM\Table(name="locataire")
 * @ORM\Entity(repositoryClass="AKYOS\EasyCoproBundle\Repository\LocataireRepository")
 */
class Locataire
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=10, nullable=true)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, unique=true)
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_arrivee", type="date")
     */
    private $dateArrivee;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_depart", type="date", nullable=true)
     */
    private $dateDepart;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_personnes", type="integer", nullable=true)
     */
    private $nbPersonnes;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_enfants", type="integer", nullable=true)
     */
    private $nbEnfants;

    /**
     * @var string
     *
     * @ORM\Column(name="rib", type="string", length=255, nullable=true)
     */
    private $rib;

    /**
     * @var bool
     *
     * @ORM\Column(name="actuel", type="boolean")
     */
    private $actuel;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_syndic", type="text", nullable=true)
     */
    private $commentSyndic;

    /**
     * @ORM\ManyToOne(targetEntity="Lot", inversedBy="locataires")
     */
    private $lot;

    /**
     * @ORM\OneToOne(targetEntity="User")
     */
    private $user;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Locataire
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Locataire
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Locataire
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Locataire
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set dateArrivee
     *
     * @param \DateTime $dateArrivee
     *
     * @return Locataire
     */
    public function setDateArrivee($dateArrivee)
    {
        $this->dateArrivee = $dateArrivee;

        return $this;
    }

    /**
     * Get dateArrivee
     *
     * @return \DateTime
     */
    public function getDateArrivee()
    {
        return $this->dateArrivee;
    }

    /**
     * Set dateDepart
     *
     * @param \DateTime $dateDepart
     *
     * @return Locataire
     */
    public function setDateDepart($dateDepart)
    {
        $this->dateDepart = $dateDepart;

        return $this;
    }

    /**
     * Get dateDepart
     *
     * @return \DateTime
     */
    public function getDateDepart()
    {
        return $this->dateDepart;
    }

    /**
     * Set nbPersonnes
     *
     * @param integer $nbPersonnes
     *
     * @return Locataire
     */
    public function setNbPersonnes($nbPersonnes)
    {
        $this->nbPersonnes = $nbPersonnes;

        return $this;
    }

    /**
     * Get nbPersonnes
     *
     * @return int
     */
    public function getNbPersonnes()
    {
        return $this->nbPersonnes;
    }

    /**
     * Set nbEnfants
     *
     * @param integer $nbEnfants
     *
     * @return Locataire
     */
    public function setNbEnfants($nbEnfants)
    {
        $this->nbEnfants = $nbEnfants;

        return $this;
    }

    /**
     * Get nbEnfants
     *
     * @return int
     */
    public function getNbEnfants()
    {
        return $this->nbEnfants;
    }

    /**
     * Set rib
     *
     * @param string $rib
     *
     * @return Locataire
     */
    public function setRib($rib)
    {
        $this->rib = $rib;

        return $this;
    }

    /**
     * Get rib
     *
     * @return string
     */
    public function getRib()
    {
        return $this->rib;
    }

    /**
     * Set actuel
     *
     * @param boolean $actuel
     *
     * @return Locataire
     */
    public function setActuel($actuel)
    {
        $this->actuel = $actuel;

        return $this;
    }

    /**
     * Get actuel
     *
     * @return bool
     */
    public function getActuel()
    {
        return $this->actuel;
    }

    /**
     * Set commentSyndic
     *
     * @param string $commentSyndic
     *
     * @return Locataire
     */
    public function setCommentSyndic($commentSyndic)
    {
        $this->commentSyndic = $commentSyndic;

        return $this;
    }

    /**
     * Get commentSyndic
     *
     * @return string
     */
    public function getCommentSyndic()
    {
        return $this->commentSyndic;
    }

    /**
     * Set lot
     *
     * @param \AKYOS\EasyCoproBundle\Entity\Lot $lot
     *
     * @return Locataire
     */
    public function setLot(\AKYOS\EasyCoproBundle\Entity\Lot $lot = null)
    {
        $this->lot = $lot;

        return $this;
    }

    /**
     * Get lot
     *
     * @return \AKYOS\EasyCoproBundle\Entity\Lot
     */
    public function getLot()
    {
        return $this->lot;
    }

    /**
     * Set user
     *
     * @param \AKYOS\EasyCoproBundle\Entity\User $user
     *
     * @return Locataire
     */
    public function setUser(\AKYOS\EasyCoproBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AKYOS\EasyCoproBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
