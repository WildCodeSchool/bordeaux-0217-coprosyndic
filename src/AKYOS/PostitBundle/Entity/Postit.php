<?php

namespace AKYOS\PostitBundle\Entity;

use AKYOS\EasyCoproBundle\Entity\User;
use Doctrine\ORM\Mapping as ORM;

/**
 * Postit
 *
 * @ORM\Table(name="postit")
 * @ORM\Entity(repositoryClass="AKYOS\PostitBundle\Repository\PostitRepository")
 */
class Postit
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
     * @ORM\Column(name="title", type="string", length=100, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=255)
     */
    private $content;

    /**
     *
     * @ORM\ManyToOne(targetEntity="AKYOS\EasyCoproBundle\Entity\User", inversedBy = "postits")
     */
    private $user;

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
     * Set title
     *
     * @param string $title
     *
     * @return Postit
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Postit
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
     * Set user
     *
     * @param \AKYOS\EasyCoproBundle\Entity\User $user
     *
     * @return Postit
     */
    public function setUser(User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AKYOS\EasyCoproBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
