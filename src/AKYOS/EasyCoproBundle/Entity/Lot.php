<?php

namespace AKYOS\EasyCoproBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lot
 *
 * @ORM\Table(name="lot")
 * @ORM\Entity(repositoryClass="AKYOS\EasyCoproBundle\Repository\LotRepository")
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
     * @ORM\Column(name="loue_act", type="boolean")
     */
    private $loueAct;

    /**
     * @ORM\ManyToOne(targetEntity="Copropriete", inversedBy="lots")
     */
    private $copropriete;

    /**
     * @ORM\ManyToMany(targetEntity="Document", inversedBy="lots")
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
        $this->documents = new \Doctrine\Common\Collections\ArrayCollection();
        $this->coproprietaires = new \Doctrine\Common\Collections\ArrayCollection();
        $this->locataires = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set copropriete
     *
     * @param \AKYOS\EasyCoproBundle\Entity\Copropriete $copropriete
     *
     * @return Lot
     */
    public function setCopropriete(\AKYOS\EasyCoproBundle\Entity\Copropriete $copropriete = null)
    {
        $this->copropriete = $copropriete;

        return $this;
    }

    /**
     * Get copropriete
     *
     * @return \AKYOS\EasyCoproBundle\Entity\Copropriete
     */
    public function getCopropriete()
    {
        return $this->copropriete;
    }

    /**
     * Add document
     *
     * @param \AKYOS\EasyCoproBundle\Entity\Document $document
     *
     * @return Lot
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
     * Add coproprietaire
     *
     * @param \AKYOS\EasyCoproBundle\Entity\Coproprietaire $coproprietaire
     *
     * @return Lot
     */
    public function addCoproprietaire(\AKYOS\EasyCoproBundle\Entity\Coproprietaire $coproprietaire)
    {
        $this->coproprietaires[] = $coproprietaire;

        return $this;
    }

    /**
     * Remove coproprietaire
     *
     * @param \AKYOS\EasyCoproBundle\Entity\Coproprietaire $coproprietaire
     */
    public function removeCoproprietaire(\AKYOS\EasyCoproBundle\Entity\Coproprietaire $coproprietaire)
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
     * @param \AKYOS\EasyCoproBundle\Entity\Locataire $locataire
     *
     * @return Lot
     */
    public function addLocataire(\AKYOS\EasyCoproBundle\Entity\Locataire $locataire)
    {
        $this->locataires[] = $locataire;

        return $this;
    }

    /**
     * Remove locataire
     *
     * @param \AKYOS\EasyCoproBundle\Entity\Locataire $locataire
     */
    public function removeLocataire(\AKYOS\EasyCoproBundle\Entity\Locataire $locataire)
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
}
