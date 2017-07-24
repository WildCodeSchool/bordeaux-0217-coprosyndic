<?php

namespace AKYOS\EasyCoproBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="message")
 * @ORM\Entity(repositoryClass="AKYOS\EasyCoproBundle\Repository\MessageRepository")
 */
class Message
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_envoi", type="datetime")
     */
    private $dateEnvoi;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;

    /**
     * @var string
     *
     * @ORM\Column(name="destinataire_compte", type="string", length=255)
     */
    private $destinataireCompte;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="messages_envoyes")
     */
    private $expediteur;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="messages_recus")
     */
    private $destinataire;

    /** @var boolean
     *
     * @ORM\Column(name="isSupprime", type="boolean")
     */
    private $isSupprime;

    /** @var boolean
     *
     * @ORM\Column(name="isLu", type="boolean", nullable=true)
     */
    private $isLu;


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
     * Set dateEnvoi
     *
     * @param \DateTime $dateEnvoi
     *
     * @return Message
     */
    public function setDateEnvoi($dateEnvoi)
    {
        $this->dateEnvoi = $dateEnvoi;

        return $this;
    }

    /**
     * Get dateEnvoi
     *
     * @return \DateTime
     */
    public function getDateEnvoi()
    {
        return $this->dateEnvoi;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Message
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
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Message
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set expediteur
     *
     * @param \AKYOS\EasyCoproBundle\Entity\User $expediteur
     *
     * @return Message
     */
    public function setExpediteur(\AKYOS\EasyCoproBundle\Entity\User $expediteur = null)
    {
        $this->expediteur = $expediteur;

        return $this;
    }

    /**
     * Get expediteur
     *
     * @return \AKYOS\EasyCoproBundle\Entity\User
     */
    public function getExpediteur()
    {
        return $this->expediteur;
    }

    /**
     * Set destinataire
     *
     * @param \AKYOS\EasyCoproBundle\Entity\User $destinataire
     *
     * @return Message
     */
    public function setDestinataire(\AKYOS\EasyCoproBundle\Entity\User $destinataire = null)
    {
        $this->destinataire = $destinataire;

        return $this;
    }

    /**
     * Get destinataire
     *
     * @return \AKYOS\EasyCoproBundle\Entity\User
     */
    public function getDestinataire()
    {
        return $this->destinataire;
    }

    /**
     * Set isSupprime
     *
     * @param boolean $IsSupprime
     *
     * @return Message
     */
    public function setIsSupprime($IsSupprime)
    {
        $this->isSupprime = $IsSupprime;

        return $this;
    }

    /**
     * Get isSupprime
     *
     * @return boolean
     */
    public function getIsSupprime()
    {
        return $this->isSupprime;
    }

    /**
     * Set isLu
     *
     * @param boolean $IsLu
     *
     * @return Message
     */
    public function setIsLu($IsLu)
    {
        $this->isLu = $IsLu;

        return $this;
    }

    /**
     * Get isLu
     *
     * @return boolean
     */
    public function getIsLu()
    {
        return $this->isLu;
    }

    /**
     * Set destinataireCompte
     *
     * @param string $destinataireCompte
     *
     * @return Message
     */
    public function setDestinataireCompte($destinataireCompte)
    {
        $this->destinataireCompte = $destinataireCompte;

        return $this;
    }

    /**
     * Get destinataireCompte
     *
     * @return string
     */
    public function getDestinataireCompte()
    {
        return $this->destinataireCompte;
    }
}
