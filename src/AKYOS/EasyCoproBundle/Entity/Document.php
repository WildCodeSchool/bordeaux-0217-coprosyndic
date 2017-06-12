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
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="product_image", fileNameProperty="docName", size="docSize")
     *
     * @var File
     */
    private $docFile;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    private $docName;

    /**
     * @ORM\Column(type="integer")
     *
     * @var integer
     */
    private $docSize;

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
     * @ORM\Column(name="date_ajout", type="date")
     */
    private $dateAjout;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modif", type="date", nullable=true)
     */
    private $dateModif;

    /**
     * @var int
     *
     * @ORM\Column(name="confidentialite", type="integer")
     */
    private $confidentialite;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, unique=true)
     */
    private $url;

    /**
     * @ORM\ManyToOne(targetEntity="Syndic", inversedBy="documents")
     */
    private $syndic;

    /**
     * @ORM\ManyToMany(targetEntity="Lot", mappedBy="documents")
     */
    private $lots;

    /**
     * @ORM\ManyToOne(targetEntity="Categorie", inversedBy="documents")
     */
    private $categorie;


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
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the  update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $doc
     *
     * @return Document
     */
    public function setDocFile(File $doc = null)
    {
        $this->docFile = $doc;

        if ($doc) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->dateAjout = new \DateTimeImmutable();
        }

        return $this;
    }

    /**
     * @return File|null
     */
    public function getDocFile()
    {
        return $this->docFile;
    }

    /**
     * @param string $docName
     *
     * @return Document
     */
    public function setDocName($docName)
    {
        $this->docName = $docName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDocName()
    {
        return $this->docName;
    }

    /**
     * @param integer $docSize
     *
     * @return Document
     */
    public function setdocSize($docSize)
    {
        $this->docSize = $docSize;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getImageSize()
    {
        return $this->docSize;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Document
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
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
     */
    public function setDateAjout($dateAjout)
    {
        $this->dateAjout = $dateAjout;

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
    public function setDateModif($dateModif)
    {
        $this->dateModif = $dateModif;

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
     * Set confidentialite
     *
     * @param integer $confidentialite
     *
     * @return Document
     */
    public function setConfidentialite($confidentialite)
    {
        $this->confidentialite = $confidentialite;

        return $this;
    }

    /**
     * Get confidentialite
     *
     * @return int
     */
    public function getConfidentialite()
    {
        return $this->confidentialite;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Document
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
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
     * @return Document
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
     * @return Document
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
     * Set categorie
     *
     * @param \AKYOS\EasyCoproBundle\Entity\Categorie $categorie
     *
     * @return Document
     */
    public function setCategorie(\AKYOS\EasyCoproBundle\Entity\Categorie $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \AKYOS\EasyCoproBundle\Entity\Categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }
}
