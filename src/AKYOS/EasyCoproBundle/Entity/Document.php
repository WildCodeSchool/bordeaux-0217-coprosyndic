<?php
namespace AKYOS\EasyCoproBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Entity\File as EmbeddedFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Document
 *
 * @ORM\Table(name="document")
 * @ORM\Entity(repositoryClass="AKYOS\EasyCoproBundle\Repository\DocumentRepository")
 * @ORM\Entity
 * @Vich\Uploadable
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
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $image;

    /**
     * @Vich\UploadableField(mapping="img_documents", fileNameProperty="image")
     * @var File
     */
    private $imageFile;


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


    /**
     * @param File|null $image*
     */
    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($image) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->dateModif = new \DateTime('now');
        }
    }

    /**
     * @return File
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * @param $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }
}