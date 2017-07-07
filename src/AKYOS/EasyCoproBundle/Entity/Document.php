<?php
namespace AKYOS\EasyCoproBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Document
 *
 * @ORM\Table(name="document")
 * @ORM\Entity(repositoryClass="AKYOS\EasyCoproBundle\Repository\DocumentRepository")
 * @Vich\Uploadable
 * @ORM\HasLifecycleCallbacks()
 */
class Document
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
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_ajout", type="datetime")
     */
    private $dateAjout;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modif", type="datetime", nullable=true)
     */
    private $dateModif;
    /**
     * @var string
     *
     * @ORM\Column(name="extension", type="string", length=10, nullable=true)
     */
    private $extension;
    /**
     * @ORM\ManyToOne(targetEntity="Syndic", inversedBy="documents")
     */
    private $syndic;
    /**
     * @ORM\ManyToOne(targetEntity="Artisan", inversedBy="documents")
     */
    private $artisan;
    /**
     * @ORM\ManyToOne(targetEntity="Locataire", inversedBy="documents")
     */
    private $locataire;
    /**
     * @ORM\ManyToOne(targetEntity="Copropriete", inversedBy="documents")
     */
    private $copropriete;
    /**
     * @ORM\ManyToMany(targetEntity="Lot", inversedBy="documents", cascade={"persist"})
     */
    private $lots;
    /**
     * @ORM\ManyToOne(targetEntity="Categorie", inversedBy="documents")
     */
    private $categorie;
    /**
     * @Vich\UploadableField(mapping="documents", fileNameProperty="nom")
     * @var File
     */
    private $fichier;
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->lots = new \Doctrine\Common\Collections\ArrayCollection();

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
     * Set description
     *
     * @param string $description
     *
     * @return Document
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }
    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set dateAjout
     *
     * @param \DateTime $dateAjout
     *
     * @return Document
     * @ORM\PrePersist
     */
    public function setDateAjout()
    {
        $this->dateAjout = new \DateTime();
        return $this;
    }
    /**
     * Get dateAjout
     *
     * @return \DateTime
     */
    public function getDateAjout()
    {
        return $this->dateAjout;
    }
    /**
     * Set dateModif
     *
     * @param \DateTime $dateModif
     *
     * @return Document
     */
    public function setDateModif($dateModif = null)
    {
        $this->dateModif = $dateModif === null ? new \DateTime() : $dateModif;

        return $this;
    }
    /**
     * Get dateModif
     *
     * @return \DateTime
     */
    public function getDateModif()
    {
        return $this->dateModif;
    }
    /**
     * Set syndic
     *
     * @param Syndic $syndic
     *
     * @return Document
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
     * Set artisan
     *
     * @param Artisan $artisan
     *
     * @return Document
     */
    public function setArtisan(Artisan $artisan = null)
    {
        $this->artisan = $artisan;
        return $this;
    }
    /**
     * Get artisan
     *
     * @return Artisan
     */
    public function getArtisan()
    {
        return $this->artisan;
    }
    /**
     * Set locataire
     *
     * @param Locataire $locataire
     *
     * @return Document
     */
    public function setLocataire(Locataire $locataire = null)
    {
        $this->locataire = $locataire;
        return $this;
    }
    /**
     * Get locataire
     *
     * @return Locataire
     */
    public function getLocataire()
    {
        return $this->locataire;
    }
    /**
     * Add lot
     *
     * @param Lot $lot
     *
     * @return Document
     */
    public function addLot(Lot $lot)
    {
        $this->lots[] = $lot;
        $lot->addDocument($this);

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
     * Set categorie
     *
     * @param Categorie $categorie
     *
     * @return Document
     */
    public function setCategorie(Categorie $categorie = null)
    {
        $this->categorie = $categorie;
        return $this;
    }
    /**
     * Get categorie
     *
     * @return Categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }
    /**
     * @param File|null $fichier
     */
    public function setFichier(File $fichier = null)
    {
        $this->fichier = $fichier;

        if ($fichier) {
            $this->dateModif = new \DateTimeImmutable();
        }

        return $this;
    }
    /**
     * @return File
     */
    public function getFichier()
    {
        return $this->fichier;
    }
    /**
     * @param $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }
    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }
    /**
     * @param $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
        return $this;
    }
    /**
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }
    /**
     * Set extension
     *
     * @param string $extension
     *
     * @return Document
     * @ORM\PrePersist
     */
    public function setExtension()
    {
        $this->extension = $this->fichier->guessExtension();
        return $this;
    }
    /**
     * Get extension
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->extension;
    }
    /**
     * Set copropriete
     *
     * @param Copropriete $copropriete
     *
     * @return Document
     */
    public function setCopropriete(Copropriete $copropriete = null)
    {
        $this->copropriete = $copropriete;

        return $this;
    }
    /**
     * Get copropriete
     *
     * @return Copropriete
     */
    public function getCopropriete()
    {
        return $this->copropriete;
    }
}
