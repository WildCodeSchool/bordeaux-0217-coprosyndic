<?php

namespace AKYOS\BackofficeBundle\Entity;

use AKYOS\DocumentBundle\Entity\Document;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Lot
 *
 * @ORM\Table(name="lot")
 * @ORM\Entity(repositoryClass="AKYOS\BackofficeBundle\Repository\LotRepository")
 */
class Lot
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
     * @ORM\Column(name="identifiant", type="string", length=255, unique=true)
     */
    private $identifiant;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="quote_part", type="decimal", precision=2, scale=0)
     */
    private $quotePart;

    /**
     * @var bool
     *
     * @ORM\Column(name="occupe_act", type="boolean", nullable=true)
     */
    private $occupeAct;

    /**
     * @var bool
     *
     * @ORM\Column(name="loue_act", type="boolean", nullable=true)
     */
    private $loueAct;

    /**
     * @ORM\ManyToOne(targetEntity="Copropriete", inversedBy="lots")
     */
    private $copropriete;

    /**
     * @ORM\ManyToMany(targetEntity="AKYOS\DocumentBundle\Entity\Document", mappedBy="lots", cascade={"persist"})
     */
    private $documents;

    /**
     * @ORM\OneToMany(targetEntity="Coproprietaire", mappedBy="lot")
     */
    private $coproprietaires;

    /**
     * @ORM\OneToMany(targetEntity="Locataire", mappedBy="lot")
     */
    private $locataires;

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
     * Set identifiant
     *
     * @param string $identifiant
     *
     * @return Lot
     */
    public function setIdentifiant($identifiant)
    {
        $this->identifiant = $identifiant;

        return $this;
    }

    /**
     * Get identifiant
     *
     * @return string
     */
    public function getIdentifiant()
    {
        return $this->identifiant;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Lot
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set quotePart
     *
     * @param string $quotePart
     *
     * @return Lot
     */
    public function setQuotePart($quotePart)
    {
        $this->quotePart = $quotePart;

        return $this;
    }

    /**
     * Get quotePart
     *
     * @return string
     */
    public function getQuotePart()
    {
        return $this->quotePart;
    }

    /**
     * Set loueAct
     *
     * @param boolean $loueAct
     *
     * @return Lot
     */
    public function setLoueAct($loueAct)
    {
        $this->loueAct = $loueAct;

        return $this;
    }

    /**
     * Get loueAct
     *
     * @return bool
     */
    public function getLoueAct()
    {
        return $this->loueAct;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->documents = new ArrayCollection();
        $this->coproprietaires = new ArrayCollection();
        $this->locataires = new ArrayCollection();
    }

    /**
     * Set copropriete
     *
     * @param Copropriete $copropriete
     *
     * @return Lot
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
     * Add document
     *
     * @param Document $document
     *
     * @return Lot
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
     * Add coproprietaire
     *
     * @param Coproprietaire $coproprietaire
     *
     * @return Lot
     */
    public function addCoproprietaire(Coproprietaire $coproprietaire)
    {
        $this->coproprietaires[] = $coproprietaire;

        return $this;
    }

    /**
     * Remove coproprietaire
     *
     * @param Coproprietaire $coproprietaire
     */
    public function removeCoproprietaire(Coproprietaire $coproprietaire)
    {
        $this->coproprietaires->removeElement($coproprietaire);
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
     * Add locataire
     *
     * @param Locataire $locataire
     *
     * @return Lot
     */
    public function addLocataire(Locataire $locataire)
    {
        $this->locataires[] = $locataire;

        return $this;
    }

    /**
     * Remove locataire
     *
     * @param Locataire $locataire
     */
    public function removeLocataire(Locataire $locataire)
    {
        $this->locataires->removeElement($locataire);
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

    public function __toString()
    {
        return $this->identifiant;
    }

    /**
     * Set occupeAct
     *
     * @param boolean $occupeAct
     *
     * @return Lot
     */
    public function setOccupeAct($occupeAct)
    {
        $this->occupeAct = $occupeAct;

        return $this;
    }

    /**
     * Get occupeAct
     *
     * @return boolean
     */
    public function getOccupeAct()
    {
        return $this->occupeAct;
    }
}
