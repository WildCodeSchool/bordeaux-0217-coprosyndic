<?php

namespace AKYOS\MailboxBundle\Entity;

use AKYOS\UserBundle\Entity\User;
use Doctrine\ORM\Mapping as ORM;

/**
 * Mail
 *
 * @ORM\Table(name="mail")
 * @ORM\Entity(repositoryClass="AKYOS\MailboxBundle\Repository\MailRepository")
 */
class Mail
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
     * @ORM\Column(name="sending_date", type="datetime")
     */
    private $sendingDate;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=80)
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /** @var boolean
     *
     * @ORM\Column(name="`read`", type="boolean")
     */
    private $read = false;

    /**
     * @ORM\ManyToOne(targetEntity="AKYOS\UserBundle\Entity\User")
     */
    private $sender;

    /**
     * @ORM\ManyToOne(targetEntity="AKYOS\UserBundle\Entity\User")
     */
    private $recipient;

    /**
     * @var string
     *
     * @ORM\Column(name="recipient_type", type="string")
     */
    private $recipientType;

    /**
     * @var string
     *
     * @ORM\Column(name="sender_state", type="string")
     */
    private $senderState = 'sent';

    /**
     * @var string
     *
     * @ORM\Column(name="recipient_state", type="string")
     */
    private $recipientState ='inbox';


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
     * Set sendingDate
     *
     * @param \DateTime $sendingDate
     *
     * @return Mail
     */
    public function setSendingDate($sendingDate)
    {
        $this->sendingDate = $sendingDate;

        return $this;
    }

    /**
     * Get sendingDate
     *
     * @return \DateTime
     */
    public function getSendingDate()
    {
        return $this->sendingDate;
    }

    /**
     * Set subject
     *
     * @param string $subject
     *
     * @return Mail
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Mail
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set read
     *
     * @param boolean $read
     *
     * @return Mail
     */
    public function setRead($read)
    {
        $this->read = $read;

        return $this;
    }

    /**
     * Get read
     *
     * @return boolean
     */
    public function getRead()
    {
        return $this->read;
    }

    /**
     * Set recipientType
     *
     * @param string $recipientType
     *
     * @return Mail
     */
    public function setRecipientType($recipientType)
    {
        $this->recipientType = $recipientType;

        return $this;
    }

    /**
     * Get recipientType
     *
     * @return string
     */
    public function getRecipientType()
    {
        return $this->recipientType;
    }

    /**
     * Set sender
     *
     * @param \AKYOS\UserBundle\Entity\User $sender
     *
     * @return Mail
     */
    public function setSender(User $sender = null)
    {
        $this->sender = $sender;

        return $this;
    }

    /**
     * Get sender
     *
     * @return \AKYOS\UserBundle\Entity\User
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Set recipient
     *
     * @param \AKYOS\UserBundle\Entity\User $recipient
     *
     * @return Mail
     */
    public function setRecipient(User $recipient = null)
    {
        $this->recipient = $recipient;

        return $this;
    }

    /**
     * Get recipient
     *
     * @return \AKYOS\UserBundle\Entity\User
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * Set senderState
     *
     * @param string $senderState
     *
     * @return Mail
     */
    public function setSenderState($senderState)
    {
        $this->senderState = $senderState;

        return $this;
    }

    /**
     * Get senderState
     *
     * @return string
     */
    public function getSenderState()
    {
        return $this->senderState;
    }

    /**
     * Set recipientState
     *
     * @param string $recipientState
     *
     * @return Mail
     */
    public function setRecipientState($recipientState)
    {
        $this->recipientState = $recipientState;

        return $this;
    }

    /**
     * Get recipientState
     *
     * @return string
     */
    public function getRecipientState()
    {
        return $this->recipientState;
    }
}
