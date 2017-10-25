<?php
namespace AKYOS\DocumentBundle\Entity;

use AKYOS\BackofficeBundle\Entity\Artisan;
use AKYOS\BackofficeBundle\Entity\Copropriete;
use AKYOS\BackofficeBundle\Entity\Lot;
use AKYOS\BackofficeBundle\Entity\Syndic;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Document
 *
 * @ORM\Table(name="document")
 * @ORM\Entity(repositoryClass="AKYOS\DocumentBundle\Repository\DocumentRepository")
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
     * @ORM\Column(name="description", type="text", nullable=true)
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
     * @var boolean
     *
     * @ORM\Column(name="to_locataires", type="boolean")
     */
    private $toLocataires;

    /**
     * @ORM\ManyToOne(targetEntity="AKYOS\BackofficeBundle\Entity\Syndic", inversedBy="documents")
     */
    private $syndic;

    /**
     * @ORM\ManyToMany(targetEntity="AKYOS\BackofficeBundle\Entity\Artisan", inversedBy="documents")
     */
    private $artisans;

    /**
     * @ORM\ManyToOne(targetEntity="AKYOS\BackofficeBundle\Entity\Copropriete", inversedBy="documents")
     */
    private $copropriete;

    /**
     * @ORM\ManyToMany(targetEntity="AKYOS\BackofficeBundle\Entity\Lot", inversedBy="documents")
     */
    private $lots;

    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="documents")
     */
    private $category;

    /**
     * @Vich\UploadableField(mapping="upload_document", fileNameProperty="fileName", originalName="originalFileName")
     * @var File
     */
    private $file;

    /**
     * @var string
     *
     * @ORM\Column(name="file_name", type="string", length=255)
     */
    private $fileName;

    /**
     * @var string
     *
     * @ORM\Column(name="original_file_name", type="string", length=255)
     */
    private $originalFileName;

    /**
     * @var string
     *
     * @ORM\Column(name="extension", type="string", length=10, nullable=true)
     */
    private $extension;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->artisans = new ArrayCollection();
        $this->lots = new ArrayCollection();
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
     * @return Document
     * @ORM\PrePersist
     */
    public function setDateAjout()
    {
        $this->dateAjout = new \DateTime();
        $this->dateModif =new \DateTime();
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
     * @return Document
     * @ORM\PreUpdate
     */
    public function setDateModif()
    {
        $this->dateModif = new \DateTime();

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
     * Set category
     *
     * @param Category $categorie
     *
     * @return Document
     */
    public function setCategorie(Category $categorie = null)
    {
        $this->category = $categorie;
        return $this;
    }

    /**
     * Get category
     *
     * @return Category
     */
    public function getCategorie()
    {
        return $this->category;
    }

    /**
     * @param File|null $file
     * @return Document
     */
    public function setFile(File $file = null)
    {
        $this->file = $file;

        if ($file) {
            $this->dateModif = new \DateTimeImmutable();
        }

        return $this;
    }

    /**
     * @return File
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param $titre
     * @return Document
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
     * @return Document
     * @ORM\PrePersist
     */
    public function setExtension()
    {
        $this->extension = $this->file->guessExtension();
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

    /**
     * Set toLocataires
     *
     * @param boolean $toLocataires
     *
     * @return Document
     */
    public function setToLocataires($toLocataires)
    {
        $this->toLocataires = $toLocataires;

        return $this;
    }

    /**
     * Get toLocataires
     *
     * @return boolean
     */
    public function getToLocataires()
    {
        return $this->toLocataires;
    }

    /**
     * Add artisan
     *
     * @param Artisan $artisan
     *
     * @return Document
     */
    public function addArtisan(Artisan $artisan)
    {
        $this->artisans[] = $artisan;

        return $this;
    }

    /**
     * Remove artisan
     *
     * @param Artisan $artisan
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
     * Set category
     *
     * @param \AKYOS\DocumentBundle\Entity\Category $category
     *
     * @return Document
     */
    public function setCategory(Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \AKYOS\DocumentBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set fileName
     *
     * @param string $fileName
     *
     * @return Document
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * Get fileName
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Set originalFileName
     *
     * @param string $originalFileName
     *
     * @return Document
     */
    public function setOriginalFileName($originalFileName)
    {
        $this->originalFileName = $originalFileName;

        return $this;
    }

    /**
     * Get originalFileName
     *
     * @return string
     */
    public function getOriginalFileName()
    {
        return $this->originalFileName;
    }
}
