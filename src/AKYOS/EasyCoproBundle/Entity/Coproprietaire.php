<?php

namespace AKYOS\EasyCoproBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Coproprietaire
 *
 * @ORM\Table(name="coproprietaire")
 * @ORM\Entity(repositoryClass="AKYOS\EasyCoproBundle\Repository\CoproprietaireRepository")
 */
class Coproprietaire
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
     * @var string
     *
     * @ORM\Column(name="rib", type="string", length=255, nullable=true)
     */
    private $rib;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_enfants", type="integer", nullable=true)
     */
    private $nbEnfants;

    /**
     * @var bool
     *
     * @ORM\Column(name="membre_conseil", type="boolean")
     */
    private $membreConseil;

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
     * @ORM\ManyToOne(targetEntity="Lot", inversedBy="coproprietaires")
     */
    private $lot;

    /**
     * @ORM\OneToOne(targetEntity="User", cascade={"persist", "remove"})
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
     * @return Coproprietaire
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
     * @return Coproprietaire
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
     * @return Coproprietaire
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
     * @return Coproprietaire
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
     * @return Coproprietaire
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
     * @return Coproprietaire
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
     * Set rib
     *
     * @param string $rib
     *
     * @return Coproprietaire
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
     * Set nbEnfants
     *
     * @param integer $nbEnfants
     *
     * @return Coproprietaire
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
     * Set membreConseil
     *
     * @param boolean $membreConseil
     *
     * @return Coproprietaire
     */
    public function setMembreConseil($membreConseil)
    {
        $this->membreConseil = $membreConseil;

        return $this;
    }

    /**
     * Get membreConseil
     *
     * @return bool
     */
    public function getMembreConseil()
    {
        return $this->membreConseil;
    }

    /**
     * Set actuel
     *
     * @param boolean $actuel
     *
     * @return Coproprietaire
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
     * @return Coproprietaire
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
     * @return Coproprietaire
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
     * @return Coproprietaire
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
