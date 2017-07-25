<?php

namespace AKYOS\EasyCoproBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity
 * @Vich\Uploadable
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AKYOS\EasyCoproBundle\Repository\UserRepository")
 * @ORM\HasLifecycleCallbacks()
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
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
     */
    private $type;

//    /**
//     * @ORM\OneToMany(targetEntity="AKYOS\MailboxBundle\Entity\Mail", mappedBy="sender")
//     */
//    private $sentMessages;
//
//    /**
//     * @ORM\OneToMany(targetEntity="AKYOS\MailboxBundle\Entity\Mail", mappedBy="recipient")
//     */
//    private $receivedMessages;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $image = 'avatar15.jpg';

    /**
     * @Vich\UploadableField(mapping="avatar_images", fileNameProperty="image")
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_inscription", type="datetime", nullable=true)
     */
    private $dateInscription;

    /**
     *
     * @ORM\OneToMany(targetEntity = "Postit", mappedBy = "user")
     */
    private $postits;

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

    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($image) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }

        return $this;
    }

    public function getImageFile()
    {
        return $this->imageFile;
    }

    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }


    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return User
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set dateInscription
     *
     * @param \DateTime $dateInscription
     *
     * @return User
     * @ORM\PrePersist
     */
    public function setDateInscription()
    {
        $this->dateInscription = new \DateTime();

        return $this;
    }

    /**
     * Get dateInscription
     *
     * @return \DateTime
     */
    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    /**
     * Add postit
     *
     * @param \AKYOS\EasyCoproBundle\Entity\Postit $postit
     *
     * @return User
     */
    public function addPostit(\AKYOS\EasyCoproBundle\Entity\Postit $postit)
    {
        $this->postits[] = $postit;

        return $this;
    }

    /**
     * Remove postit
     *
     * @param \AKYOS\EasyCoproBundle\Entity\Postit $postit
     */
    public function removePostit(\AKYOS\EasyCoproBundle\Entity\Postit $postit)
    {
        $this->postits->removeElement($postit);
    }

    /**
     * Get postits
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPostits()
    {
        return $this->postits;
    }

//    /**
//     * Add sentMessage
//     *
//     * @param \AKYOS\MailboxBundle\Entity\Mail $sentMessage
//     *
//     * @return User
//     */
//    public function addSentMessage(\AKYOS\MailboxBundle\Entity\Mail $sentMessage)
//    {
//        $this->sentMessages[] = $sentMessage;
//
//        return $this;
//    }
//
//    /**
//     * Remove sentMessage
//     *
//     * @param \AKYOS\MailboxBundle\Entity\Mail $sentMessage
//     */
//    public function removeSentMessage(\AKYOS\MailboxBundle\Entity\Mail $sentMessage)
//    {
//        $this->sentMessages->removeElement($sentMessage);
//    }
//
//    /**
//     * Get sentMessages
//     *
//     * @return \Doctrine\Common\Collections\Collection
//     */
//    public function getSentMessages()
//    {
//        return $this->sentMessages;
//    }
//
//    /**
//     * Add receivedMessage
//     *
//     * @param \AKYOS\MailboxBundle\Entity\Mail $receivedMessage
//     *
//     * @return User
//     */
//    public function addReceivedMessage(\AKYOS\MailboxBundle\Entity\Mail $receivedMessage)
//    {
//        $this->receivedMessages[] = $receivedMessage;
//
//        return $this;
//    }
//
//    /**
//     * Remove receivedMessage
//     *
//     * @param \AKYOS\MailboxBundle\Entity\Mail $receivedMessage
//     */
//    public function removeReceivedMessage(\AKYOS\MailboxBundle\Entity\Mail $receivedMessage)
//    {
//        $this->receivedMessages->removeElement($receivedMessage);
//    }
//
//    /**
//     * Get receivedMessages
//     *
//     * @return \Doctrine\Common\Collections\Collection
//     */
//    public function getReceivedMessages()
//    {
//        return $this->receivedMessages;
//    }
}
