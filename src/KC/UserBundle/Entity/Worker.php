<?php

namespace KC\UserBundle\Entity;

use KC\UserBundle\Entity\Client as Client;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="worker")
 */
class Worker extends Client
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\OneToMany(targetEntity="Room", mappedBy="worker")
     */
    protected $room;
    
    /**
    * @ORM\Column(name="salary", type="decimal", precision=14, scale=2)
    */
    private $salary;
    
    /**
    * @ORM\Column(name="workplace", type="string", length=50)
    */
    private $workplace;
    
    /**
    * @ORM\Column(name="comments", type="string", length=500)
    */
    private $comments;
    
    

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set salary
     *
     * @param string $salary
     * @return Worker
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;

        return $this;
    }

    /**
     * Get salary
     *
     * @return string 
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Set workplace
     *
     * @param string $workplace
     * @return Worker
     */
    public function setWorkplace($workplace)
    {
        $this->workplace = $workplace;

        return $this;
    }

    /**
     * Get workplace
     *
     * @return string 
     */
    public function getWorkplace()
    {
        return $this->workplace;
    }

    /**
     * Set comments
     *
     * @param string $comments
     * @return Worker
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return string 
     */
    public function getComments()
    {
        return $this->comments;
    }
    /**
     * @var \KC\UserBundle\Entity\Booking
     */
    private $booking;


    /**
     * Set booking
     *
     * @param \KC\UserBundle\Entity\Booking $booking
     * @return Worker
     */
    public function setBooking(\KC\UserBundle\Entity\Booking $booking = null)
    {
        $this->booking = $booking;

        return $this;
    }

    /**
     * Get booking
     *
     * @return \KC\UserBundle\Entity\Booking 
     */
    public function getBooking()
    {
        return $this->booking;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->room = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add room
     *
     * @param \KC\UserBundle\Entity\Room $room
     * @return Worker
     */
    public function addRoom(\KC\UserBundle\Entity\Room $room)
    {
        $this->room[] = $room;

        return $this;
    }

    /**
     * Remove room
     *
     * @param \KC\UserBundle\Entity\Room $room
     */
    public function removeRoom(\KC\UserBundle\Entity\Room $room)
    {
        $this->room->removeElement($room);
    }

    /**
     * Get room
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRoom()
    {
        return $this->room;
    }
}
