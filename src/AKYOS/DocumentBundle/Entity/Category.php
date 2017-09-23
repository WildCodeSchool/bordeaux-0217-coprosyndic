<?php

namespace AKYOS\DocumentBundle\Entity;

use AKYOS\BackofficeBundle\Entity\Artisan;
use AKYOS\BackofficeBundle\Entity\Locataire;
use AKYOS\BackofficeBundle\Entity\Syndic;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="AKYOS\DocumentBundle\Repository\CategoryRepository")
 */
class Category
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
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(name="couleur", type="string", length=7)
     */
    private $couleur;

    /**
     * @ORM\OneToMany(targetEntity="Document", mappedBy="category", cascade={"remove"})
     */
    private $documents;

    /**
     * @ORM\ManyToOne(targetEntity="AKYOS\BackofficeBundle\Entity\Syndic", inversedBy="categories")
     */
    private $syndic;

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
     * @return Category
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
     * Set description
     *
     * @param string $description
     *
     * @return Category
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
     * Constructor
     */
    public function __construct()
    {
        $this->documents = new ArrayCollection();
    }

    /**
     * Add document
     *
     * @param Document $document
     *
     * @return Category
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
     * Set syndic
     *
     * @param Syndic $syndic
     *
     * @return Category
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
     * Set couleur
     *
     * @param string $couleur
     *
     * @return Category
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get couleur
     *
     * @return string
     */
    public function getCouleur()
    {
        return $this->couleur;
    }
}
