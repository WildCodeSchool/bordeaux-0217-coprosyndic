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
}