<?php

namespace AKYOS\EasyCoproBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Syndic
 *
 * @ORM\Table(name="syndic")
 * @ORM\Entity(repositoryClass="AKYOS\EasyCoproBundle\Repository\SyndicRepository")
 */
class Syndic
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
     * @ORM\Column(name="statut", type="string", length=255)
     */
    private $statut;

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
     * @ORM\Column(name="adresse_sec", type="string", length=255)
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
     * @ORM\Column(name="email_bureau", type="string", length=255, nullable=true, unique=true)
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
     * @ORM\OneToOne(targetEntity="User", cascade={"persist", "remove"})
     */
    private $user;

    /**
     * @ORM\ManyToMany(targetEntity="Artisan", inversedBy="syndics")
     */
    private $artisans;

    /**
     * @ORM\ManyToMany(targetEntity="Locataire", inversedBy="syndics")
     */
    private $locataires;

    /**
     * @ORM\ManyToMany(targetEntity="Coproprietaire", inversedBy="syndics")
     */
    private $coproprietaires;

    /**
     * @ORM\OneToMany(targetEntity="Document", mappedBy="syndic")
     */
    private $documents;

    /**
     * @ORM\OneToMany(targetEntity="Copropriete", mappedBy="syndic")
     */
    private $coproprietes;


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
     * @return Syndic
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
     * Set statut
     *
     * @param string $statut
     *
     * @return Syndic
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set siret
     *
     * @param string $siret
     *
     * @return Syndic
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
     * @return Syndic
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
     * @return Syndic
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
     * @return Syndic
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
     * @return Syndic
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
     * @return Syndic
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
     * @return Syndic
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
     * @return Syndic
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
     * @return Syndic
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
     * @return Syndic
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
     * @return Syndic
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
     * Constructor
     */
    public function __construct()
    {
        $this->artisans = new \Doctrine\Common\Collections\ArrayCollection();
        $this->coproprietaires = new \Doctrine\Common\Collections\ArrayCollection();
        $this->locataires = new \Doctrine\Common\Collections\ArrayCollection();
        $this->documents = new \Doctrine\Common\Collections\ArrayCollection();
        $this->coproprietes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set user
     *
     * @param \AKYOS\EasyCoproBundle\Entity\User $user
     *
     * @return Syndic
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
     * Add artisan
     *
     * @param \AKYOS\EasyCoproBundle\Entity\Artisan $artisan
     *
     * @return Syndic
     */
    public function addArtisan(\AKYOS\EasyCoproBundle\Entity\Artisan $artisan)
    {
        $this->artisans[] = $artisan;

        return $this;
    }

    /**
     * Remove artisan
     *
     * @param \AKYOS\EasyCoproBundle\Entity\Artisan $artisan
     */
    public function removeArtisan(\AKYOS\EasyCoproBundle\Entity\Artisan $artisan)
    {
        $this->artisans->removeElement($artisan);
    }

    /**
     * Get artisans
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArtisans()
    {
        return $this->artisans;
    }

    /**
     * Get locataires
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLocataires()
    {
        return $this->locataires;
    }

    /**
     * Get coproprietaires
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCoproprietaires()
    {
        return $this->coproprietaires;
    }

    /**
     * Add document
     *
     * @param \AKYOS\EasyCoproBundle\Entity\Document $document
     *
     * @return Syndic
     */
    public function addDocument(\AKYOS\EasyCoproBundle\Entity\Document $document)
    {
        $this->documents[] = $document;

        return $this;
    }

    /**
     * Remove document
     *
     * @param \AKYOS\EasyCoproBundle\Entity\Document $document
     */
    public function removeDocument(\AKYOS\EasyCoproBundle\Entity\Document $document)
    {
        $this->documents->removeElement($document);
    }

    /**
     * Get documents
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * Add copropriete
     *
     * @param \AKYOS\EasyCoproBundle\Entity\Copropriete $copropriete
     *
     * @return Syndic
     */
    public function addCopropriete(\AKYOS\EasyCoproBundle\Entity\Copropriete $copropriete)
    {
        $this->coproprietes[] = $copropriete;

        return $this;
    }

    /**
     * Remove copropriete
     *
     * @param \AKYOS\EasyCoproBundle\Entity\Copropriete $copropriete
     */
    public function removeCopropriete(\AKYOS\EasyCoproBundle\Entity\Copropriete $copropriete)
    {
        $this->coproprietes->removeElement($copropriete);
    }

    /**
     * Get coproprietes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCoproprietes()
    {
        return $this->coproprietes;
    }


}
