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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;
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
     * @ORM\Column(name="date_modif", type="datetime")
     */
    private $dateModif;
    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, unique=true)
     */
    private $url;
    /**
     * @var string
     *
     * @ORM\Column(name="extension", type="string", length=10)
     */
    private $extension;
    /**
     * @ORM\ManyToOne(targetEntity="Syndic", inversedBy="documents")
     */
    private $syndic;
    /**
     * @ORM\ManyToMany(targetEntity="Lot", inversedBy="documents", cascade={"persist"})
     */
    private $lots;
    /**
     * @ORM\ManyToOne(targetEntity="Categorie", inversedBy="documents")
     */
    private $categorie;

    /**
     * @Vich\UploadableField(mapping="img_documents", fileNameProperty="url")
     * @var File
     */
    private $fichier;

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
     * @param Categorie $categorie
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
     * @return Categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }


    /**
     * @param File|null $nom*
     */
    public function setFichier(File $nom = null)
    {
        $this->fichier = $nom;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($nom) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->dateModif = new \DateTime('now');
        }
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
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     *
     */
    public function upload()
    {
        if (null === $this->fichier) {
            return;
        }

        // $this->fichier = null;
    }

    /**
     * Set extension
     *
     * @param string $extension
     *
     * @return Document
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;

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
}
