<?php

namespace AKYOS\EasyCoproBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Artisan
 *
 * @ORM\Table(name="artisan")
 * @ORM\Entity(repositoryClass="AKYOS\EasyCoproBundle\Repository\ArtisanRepository")
 */
class Artisan
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
     * @ORM\Column(name="raison_sociale", type="string", length=255)
     */
    private $raisonSociale;

    /**
     * @var string
     *
     * @ORM\Column(name="siret", type="string", length=255, unique=true)
     */
    private $siret;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_princ", type="string", length=255)
     */
    private $adressePrinc;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_sec", type="string", length=255, nullable=true)
     */
    private $adresseSec;

    /**
     * @var string
     *
     * @ORM\Column(name="code_postal", type="string", length=5)
     */
    private $codePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone_bureau", type="string", length=10, nullable=true)
     */
    private $telephoneBureau;

    /**
     * @var string
     *
     * @ORM\Column(name="email_bureau", type="string", length=255, unique=true)
     */
    private $emailBureau;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_nom", type="string", length=255, nullable=true)
     */
    private $contactNom;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_prenom", type="string", length=255, nullable=true)
     */
    private $contactPrenom;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_telephone", type="string", length=10, nullable=true)
     */
    private $contactTelephone;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_email", type="string", length=255, nullable=true, unique=true)
     */
    private $contactEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="activite", type="string", length=255)
     */
    private $activite;

    /**
     * @ORM\OneToOne(targetEntity="User", cascade={"persist", "remove"})
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="Syndic", inversedBy="artisans")
     */
    private $syndic;

    /**
     * @ORM\ManyToOne(targetEntity="Copropriete", inversedBy="artisans")
     */
    private $copropriete;

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
     * Set raisonSociale
     *
     * @param string $raisonSociale
     *
     * @return Artisan
     */
    public function setRaisonSociale($raisonSociale)
    {
        $this->raisonSociale = $raisonSociale;

        return $this;
    }

    /**
     * Get raisonSociale
     *
     * @return string
     */
    public function getRaisonSociale()
    {
        return $this->raisonSociale;
    }

    /**
     * Set siret
     *
     * @param string $siret
     *
     * @return Artisan
     */
    public function setSiret($siret)
    {
        $this->siret = $siret;

        return $this;
    }

    /**
     * Get siret
     *
     * @return string
     */
    public function getSiret()
    {
        return $this->siret;
    }

    /**
     * Set adressePrinc
     *
     * @param string $adressePrinc
     *
     * @return Artisan
     */
    public function setAdressePrinc($adressePrinc)
    {
        $this->adressePrinc = $adressePrinc;

        return $this;
    }

    /**
     * Get adressePrinc
     *
     * @return string
     */
    public function getAdressePrinc()
    {
        return $this->adressePrinc;
    }

    /**
     * Set adresseSec
     *
     * @param string $adresseSec
     *
     * @return Artisan
     */
    public function setAdresseSec($adresseSec)
    {
        $this->adresseSec = $adresseSec;

        return $this;
    }

    /**
     * Get adresseSec
     *
     * @return string
     */
    public function getAdresseSec()
    {
        return $this->adresseSec;
    }

    /**
     * Set codePostal
     *
     * @param string $codePostal
     *
     * @return Artisan
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return string
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Artisan
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set telephoneBureau
     *
     * @param string $telephoneBureau
     *
     * @return Artisan
     */
    public function setTelephoneBureau($telephoneBureau)
    {
        $this->telephoneBureau = $telephoneBureau;

        return $this;
    }

    /**
     * Get telephoneBureau
     *
     * @return string
     */
    public function getTelephoneBureau()
    {
        return $this->telephoneBureau;
    }

    /**
     * Set emailBureau
     *
     * @param string $emailBureau
     *
     * @return Artisan
     */
    public function setEmailBureau($emailBureau)
    {
        $this->emailBureau = $emailBureau;

        return $this;
    }

    /**
     * Get emailBureau
     *
     * @return string
     */
    public function getEmailBureau()
    {
        return $this->emailBureau;
    }

    /**
     * Set contactNom
     *
     * @param string $contactNom
     *
     * @return Artisan
     */
    public function setContactNom($contactNom)
    {
        $this->contactNom = $contactNom;

        return $this;
    }

    /**
     * Get contactNom
     *
     * @return string
     */
    public function getContactNom()
    {
        return $this->contactNom;
    }

    /**
     * Set contactPrenom
     *
     * @param string $contactPrenom
     *
     * @return Artisan
     */
    public function setContactPrenom($contactPrenom)
    {
        $this->contactPrenom = $contactPrenom;

        return $this;
    }

    /**
     * Get contactPrenom
     *
     * @return string
     */
    public function getContactPrenom()
    {
        return $this->contactPrenom;
    }

    /**
     * Set contactTelephone
     *
     * @param string $contactTelephone
     *
     * @return Artisan
     */
    public function setContactTelephone($contactTelephone)
    {
        $this->contactTelephone = $contactTelephone;

        return $this;
    }

    /**
     * Get contactTelephone
     *
     * @return string
     */
    public function getContactTelephone()
    {
        return $this->contactTelephone;
    }

    /**
     * Set contactEmail
     *
     * @param string $contactEmail
     *
     * @return Artisan
     */
    public function setContactEmail($contactEmail)
    {
        $this->contactEmail = $contactEmail;

        return $this;
    }

    /**
     * Get contactEmail
     *
     * @return string
     */
    public function getContactEmail()
    {
        return $this->contactEmail;
    }

    /**
     * Set activite
     *
     * @param string $activite
     *
     * @return Artisan
     */
    public function setActivite($activite)
    {
        $this->activite = $activite;

        return $this;
    }

    /**
     * Get activite
     *
     * @return string
     */
    public function getActivite()
    {
        return $this->activite;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->syndics = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set user
     *
     * @param \AKYOS\EasyCoproBundle\Entity\User $user
     *
     * @return Artisan
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


    /**
     * Set syndic
     *
     * @param \AKYOS\EasyCoproBundle\Entity\Syndic $syndic
     *
     * @return Artisan
     */
    public function setSyndic(\AKYOS\EasyCoproBundle\Entity\Syndic $syndic = null)
    {
        $this->syndic = $syndic;

        return $this;
    }

    /**
     * Get syndic
     *
     * @return \AKYOS\EasyCoproBundle\Entity\Syndic
     */
    public function getSyndic()
    {
        return $this->syndic;
    }

    /**
     * Set copropriete
     *
     * @param \AKYOS\EasyCoproBundle\Entity\Copropriete $copropriete
     *
     * @return Artisan
     */
    public function setCopropriete(\AKYOS\EasyCoproBundle\Entity\Copropriete $copropriete = null)
    {
        $this->copropriete = $copropriete;

        return $this;
    }

    /**
     * Get copropriete
     *
     * @return \AKYOS\EasyCoproBundle\Entity\Copropriete
     */
    public function getCopropriete()
    {
        return $this->copropriete;
    }
}
