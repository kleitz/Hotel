<?php

namespace KC\HotelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * offer
 *
 * @ORM\Entity
 * @ORM\Table(name="offer")
 */
class Offer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    
    /**
     * @ORM\OneToMany(targetEntity="Booking", mappedBy="offer")
     */
    private $booking;
    
    
    /**
     * @ORM\ManyToOne(targetEntity="Room", inversedBy="offer")
     * @ORM\JoinColumn(name="room_id", referencedColumnName="id")
     */
    private $room;
    
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="discription", type="string", length=500)
     */
    private $discription;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal")
     */
    private $price;


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
     * Set name
     *
     * @param string $name
     * @return Offer
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set discription
     *
     * @param string $discription
     * @return Offer
     */
    public function setDiscription($discription)
    {
        $this->discription = $discription;

        return $this;
    }

    /**
     * Get discription
     *
     * @return string 
     */
    public function getDiscription()
    {
        return $this->discription;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return Offer
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->booking = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add booking
     *
     * @param \KC\HotelBundle\Entity\Booking $booking
     * @return Offer
     */
    public function addBooking(\KC\HotelBundle\Entity\Booking $booking)
    {
        $this->booking[] = $booking;

        return $this;
    }

    /**
     * Remove booking
     *
     * @param \KC\HotelBundle\Entity\Booking $booking
     */
    public function removeBooking(\KC\HotelBundle\Entity\Booking $booking)
    {
        $this->booking->removeElement($booking);
    }

    /**
     * Get booking
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBooking()
    {
        return $this->booking;
    }

    /**
     * Set room
     *
     * @param \KC\HotelBundle\Entity\Room $room
     * @return Offer
     */
    public function setRoom(\KC\HotelBundle\Entity\Room $room = null)
    {
        $this->room = $room;

        return $this;
    }

    /**
     * Get room
     *
     * @return \KC\HotelBundle\Entity\Room 
     */
    public function getRoom()
    {
        return $this->room;
    }
}
