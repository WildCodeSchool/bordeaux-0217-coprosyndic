<?php

namespace AKYOS\EasyCoproBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @ORM\OneToMany(targetEntity="Message", mappedBy="expediteur")
     */
    private $messages_envoyes;

    /**
     * @ORM\OneToMany(targetEntity="Message", mappedBy="destinataire")
     */
    private $messages_recus;



    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return User
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
     * Add messagesEnvoye
     *
     * @param \AKYOS\EasyCoproBundle\Entity\Message $messagesEnvoye
     *
     * @return User
     */
    public function addMessagesEnvoye(\AKYOS\EasyCoproBundle\Entity\Message $messagesEnvoye)
    {
        $this->messages_envoyes[] = $messagesEnvoye;

        return $this;
    }

    /**
     * Remove messagesEnvoye
     *
     * @param \AKYOS\EasyCoproBundle\Entity\Message $messagesEnvoye
     */
    public function removeMessagesEnvoye(\AKYOS\EasyCoproBundle\Entity\Message $messagesEnvoye)
    {
        $this->messages_envoyes->removeElement($messagesEnvoye);
    }

    /**
     * Get messagesEnvoyes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMessagesEnvoyes()
    {
        return $this->messages_envoyes;
    }

    /**
     * Add messagesRecus
     *
     * @param \AKYOS\EasyCoproBundle\Entity\Message $messagesRecus
     *
     * @return User
     */
    public function addMessagesRecus(\AKYOS\EasyCoproBundle\Entity\Message $messagesRecus)
    {
        $this->messages_recus[] = $messagesRecus;

        return $this;
    }

    /**
     * Remove messagesRecus
     *
     * @param \AKYOS\EasyCoproBundle\Entity\Message $messagesRecus
     */
    public function removeMessagesRecus(\AKYOS\EasyCoproBundle\Entity\Message $messagesRecus)
    {
        $this->messages_recus->removeElement($messagesRecus);
    }

    /**
     * Get messagesRecus
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMessagesRecus()
    {
        return $this->messages_recus;
    }
}
