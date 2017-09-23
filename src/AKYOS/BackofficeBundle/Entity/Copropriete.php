<?php

namespace AKYOS\BackofficeBundle\Entity;

use AKYOS\DocumentBundle\Entity\Document;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Copropriete
 *
 * @ORM\Table(name="copropriete")
 * @ORM\Entity(repositoryClass="AKYOS\BackofficeBundle\Repository\CoproprieteRepository")
 * @Vich\Uploadable
 */
class Copropriete
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
     * @ORM\Column(name="immatriculation", type="string", length=255, unique=true)
     */
    private $immatriculation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_immat", type="date")
     */
    private $dateImmat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modif_immat", type="date", nullable=true)
     */
    private $dateModifImmat;

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
     * @ORM\Column(name="ville", type="string", length=50)
     */
    private $ville;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="date")
     */
    private $dateCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut_gestion", type="date", nullable=true)
     */
    private $dateDebutGestion;

    /**
     * @var string
     *
     * @ORM\Column(name="parcelle_cadastrale", type="string", length=255, nullable=true)
     */
    private $parcelleCadastrale;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_batiments", type="integer", nullable=true)
     */
    private $nbBatiments;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="periode_construction", type="date", nullable=true)
     */
    private $periodeConstruction;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_reglement", type="date", nullable=true)
     */
    private $dateReglement;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_ascenseurs", type="integer", nullable=true)
     */
    private $nbAscenseurs;

    /**
     * @var string
     *
     * @ORM\Column(name="type_chauffage", type="string", length=255, nullable=true)
     */
    private $typeChauffage;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @var string
     */
    private $illustrationName;

    /**
     * @Vich\UploadableField(mapping="upload_copropriete", fileNameProperty="illustrationName")
     * @var File
     */
    private $illustrationFile;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     *
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @ORM\ManyToOne(targetEntity="Syndic", inversedBy="coproprietes")
     */
    private $syndic;

    /**
     * @ORM\OneToMany(targetEntity="AKYOS\DocumentBundle\Entity\Document", mappedBy="copropriete")
     *
     * @var ArrayCollection $documents
     */
    private $documents;

    /**
     * @ORM\OneToMany(targetEntity="Lot", mappedBy="copropriete")
     *
     * @var ArrayCollection $lots
     */
    private $lots;

    /**
     * @ORM\OneToMany(targetEntity="Artisan", mappedBy="copropriete")
     */
    private $artisans;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->artisans = new ArrayCollection();
        $this->lots = new ArrayCollection();
    }

    public function __toString()
    {
        return ''.$this->nom.'';
    }

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
     * @return Copropriete
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
     * Set immatriculation
     *
     * @param string $immatriculation
     *
     * @return Copropriete
     */
    public function setImmatriculation($immatriculation)
    {
        $this->immatriculation = $immatriculation;

        return $this;
    }

    /**
     * Get immatriculation
     *
     * @return string
     */
    public function getImmatriculation()
    {
        return $this->immatriculation;
    }

    /**
     * Set dateImmat
     *
     * @param \DateTime $dateImmat
     *
     * @return Copropriete
     */
    public function setDateImmat($dateImmat)
    {
        $this->dateImmat = $dateImmat;

        return $this;
    }

    /**
     * Get dateImmat
     *
     * @return \DateTime
     */
    public function getDateImmat()
    {
        return $this->dateImmat;
    }

    /**
     * Set dateModifImmat
     *
     * @param \DateTime $dateModifImmat
     *
     * @return Copropriete
     */
    public function setDateModifImmat($dateModifImmat)
    {
        $this->dateModifImmat = $dateModifImmat;

        return $this;
    }

    /**
     * Get dateModifImmat
     *
     * @return \DateTime
     */
    public function getDateModifImmat()
    {
        return $this->dateModifImmat;
    }

    /**
     * Set adressePrinc
     *
     * @param string $adressePrinc
     *
     * @return Copropriete
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
     * @return Copropriete
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
     * @return Copropriete
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
     * @return Copropriete
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
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Copropriete
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set dateDebutGestion
     *
     * @param \DateTime $dateDebutGestion
     *
     * @return Copropriete
     */
    public function setDateDebutGestion($dateDebutGestion)
    {
        $this->dateDebutGestion = $dateDebutGestion;

        return $this;
    }

    /**
     * Get dateDebutGestion
     *
     * @return \DateTime
     */
    public function getDateDebutGestion()
    {
        return $this->dateDebutGestion;
    }

    /**
     * Set parcelleCadastrale
     *
     * @param string $parcelleCadastrale
     *
     * @return Copropriete
     */
    public function setParcelleCadastrale($parcelleCadastrale)
    {
        $this->parcelleCadastrale = $parcelleCadastrale;

        return $this;
    }

    /**
     * Get parcelleCadastrale
     *
     * @return string
     */
    public function getParcelleCadastrale()
    {
        return $this->parcelleCadastrale;
    }

    /**
     * Set nbBatiments
     *
     * @param integer $nbBatiments
     *
     * @return Copropriete
     */
    public function setNbBatiments($nbBatiments)
    {
        $this->nbBatiments = $nbBatiments;

        return $this;
    }

    /**
     * Get nbBatiments
     *
     * @return int
     */
    public function getNbBatiments()
    {
        return $this->nbBatiments;
    }

    /**
     * Set periodeConstruction
     *
     * @param \DateTime $periodeConstruction
     *
     * @return Copropriete
     */
    public function setPeriodeConstruction($periodeConstruction)
    {
        $this->periodeConstruction = $periodeConstruction;

        return $this;
    }

    /**
     * Get periodeConstruction
     *
     * @return \DateTime
     */
    public function getPeriodeConstruction()
    {
        return $this->periodeConstruction;
    }

    /**
     * Set dateReglement
     *
     * @param \DateTime $dateReglement
     *
     * @return Copropriete
     */
    public function setDateReglement($dateReglement)
    {
        $this->dateReglement = $dateReglement;

        return $this;
    }

    /**
     * Get dateReglement
     *
     * @return \DateTime
     */
    public function getDateReglement()
    {
        return $this->dateReglement;
    }

    /**
     * Set nbAscenseurs
     *
     * @param integer $nbAscenseurs
     *
     * @return Copropriete
     */
    public function setNbAscenseurs($nbAscenseurs)
    {
        $this->nbAscenseurs = $nbAscenseurs;

        return $this;
    }

    /**
     * Get nbAscenseurs
     *
     * @return int
     */
    public function getNbAscenseurs()
    {
        return $this->nbAscenseurs;
    }

    /**
     * Set typeChauffage
     *
     * @param string $typeChauffage
     *
     * @return Copropriete
     */
    public function setTypeChauffage($typeChauffage)
    {
        $this->typeChauffage = $typeChauffage;

        return $this;
    }

    /**
     * Get typeChauffage
     *
     * @return string
     */
    public function getTypeChauffage()
    {
        return $this->typeChauffage;
    }

    /**
     * Set syndic
     *
     * @param Syndic $syndic
     *
     * @return Copropriete
     */
    public function setSyndic(Syndic $syndic = null)
    {
        $this->syndic = $syndic;

        return $this;
    }

    /**
     * Get syndic
     *
     * @return Syndic
     */
    public function getSyndic()
    {
        return $this->syndic;
    }

    /**
     * Add lot
     *
     * @param Lot $lot
     *
     * @return Copropriete
     */
    public function addLot(Lot $lot)
    {
        $this->lots[] = $lot;

        return $this;
    }

    /**
     * Remove lot
     *
     * @param Lot $lot
     */
    public function removeLot(Lot $lot)
    {
        $this->lots->removeElement($lot);
    }

    /**
     * Get lots
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLots()
    {
        return $this->lots;
    }

    /**
     * Add document
     *
     * @param Document $document
     *
     * @return Copropriete
     */
    public function addDocument(Document $document)
    {
        $this->documents[] = $document;

        return $this;
    }

    /**
     * Remove document
     *
     * @param Document $document
     */
    public function removeDocument(Document $document)
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
     * Add artisan
     *
     * @param \AKYOS\BackofficeBundle\Entity\Artisan $artisan
     *
     * @return Copropriete
     */
    public function addArtisan(Artisan $artisan)
    {
        $this->artisans[] = $artisan;

        return $this;
    }

    /**
     * Remove artisan
     *
     * @param \AKYOS\BackofficeBundle\Entity\Artisan $artisan
     */
    public function removeArtisan(Artisan $artisan)
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
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $illustration
     *
     * @return Copropriete
     */
    public function setIllustrationFile(File $illustration = null)
    {
        $this->illustrationFile = $illustration;

        if ($illustration) {
            $this->updatedAt = new \DateTimeImmutable();
        }

        return $this;
    }

    /**
     * @return File|null
     */
    public function getIllustrationFile()
    {
        return $this->illustrationFile;
    }

    /**
     * @param string $name
     *
     * @return Copropriete
     */
    public function setIllustrationName($name)
    {
        $this->illustrationName = $name;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getIllustrationName()
    {
        return $this->illustrationName;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Copropriete
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}
