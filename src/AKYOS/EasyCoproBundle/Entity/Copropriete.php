<?php

namespace AKYOS\EasyCoproBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Copropriete
 *
 * @ORM\Table(name="copropriete")
 * @ORM\Entity(repositoryClass="AKYOS\EasyCoproBundle\Repository\CoproprieteRepository")
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
     * @ORM\Column(name="date_modif_immat", type="date")
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
     * @ORM\Column(name="ville", type="string", length=255)
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
     * @ORM\Column(name="date_debut_gestion", type="date")
     */
    private $dateDebutGestion;

    /**
     * @var string
     *
     * @ORM\Column(name="parcelle_cadastrale", type="string", length=255, nullable=true, unique=true)
     */
    private $parcelleCadastrale;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_batiments", type="integer")
     */
    private $nbBatiments;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="periode_construction", type="date")
     */
    private $periodeConstruction;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_lots", type="integer")
     */
    private $nbLots;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_reglement", type="date")
     */
    private $dateReglement;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_ascenseurs", type="integer")
     */
    private $nbAscenseurs;

    /**
     * @var string
     *
     * @ORM\Column(name="type_chauffage", type="string", length=255, nullable=true)
     */
    private $typeChauffage;

    /**
     * @ORM\ManyToOne(targetEntity="Syndic", inversedBy="coproprietes")
     */
    private $syndic;

    /**
     * @ORM\OneToMany(targetEntity="Document", mappedBy="copropriete")
     */
    private $documents;

    /**
     * @ORM\OneToMany(targetEntity="Lot", mappedBy="copropriete")
     */
    private $lots;

    public function __toString()
    {
        return $this->nom;
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
     * Set nbLots
     *
     * @param integer $nbLots
     *
     * @return Copropriete
     */
    public function setNbLots($nbLots)
    {
        $this->nbLots = $nbLots;

        return $this;
    }

    /**
     * Get nbLots
     *
     * @return int
     */
    public function getNbLots()
    {
        return $this->nbLots;
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
     * Constructor
     */
    public function __construct()
    {
        $this->lots = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set syndic
     *
     * @param \AKYOS\EasyCoproBundle\Entity\Syndic $syndic
     *
     * @return Copropriete
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
     * Add lot
     *
     * @param \AKYOS\EasyCoproBundle\Entity\Lot $lot
     *
     * @return Copropriete
     */
    public function addLot(\AKYOS\EasyCoproBundle\Entity\Lot $lot)
    {
        $this->lots[] = $lot;

        return $this;
    }

    /**
     * Remove lot
     *
     * @param \AKYOS\EasyCoproBundle\Entity\Lot $lot
     */
    public function removeLot(\AKYOS\EasyCoproBundle\Entity\Lot $lot)
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
     * @param \AKYOS\EasyCoproBundle\Entity\Document $document
     *
     * @return Copropriete
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
}
