<?php

namespace KC\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use KC\UserBundle\Entity\Client;


/**
 * @ORM\Entity
 * @ORM\Table(name="booking")
 */
class Booking 
{
    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
   protected $id;
    
    /**   
     * @ORM\Column(name="clientId", type="integer") 
     */
    private $clientId;
    
    /**
     * @ORM\Column(name="roomNumber", type="integer") 
     */
    private $roomNumber;
    
    /**
     * @ORM\Column(name="bookingDate", type="datetime")
     */
    private $bookingDate;
    
    /**
     * @ORM\Column(name="$checkInDate", type="datetime")
     */
    private $checkInDate;
    
    /**
     * @ORM\Column(name="$checkOutDate", type="datetime")
     */
    private $checkOutDate;
    
     /**
     * @ORM\Column(name="price", type="float") 
     */
    private $price;
    
        
     /**
     * @ORM\Column(name="status", type="string") 
     */
    private $status;
        

    /**
     * @ORM\OneToMany(targetEntity="Client", mappedBy="client")
     */
    private $client;
    
    
    
    

    /**
     * Set id
     *
     * @param integer $id
     * @return Booking
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

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
     * Set clientId
     *
     * @param integer $clientId
     * @return Booking
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * Get clientId
     *
     * @return integer 
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * Set roomNumber
     *
     * @param integer $roomNumber
     * @return Booking
     */
    public function setRoomNumber($roomNumber)
    {
        $this->roomNumber = $roomNumber;

        return $this;
    }

    /**
     * Get roomNumber
     *
     * @return integer 
     */
    public function getRoomNumber()
    {
        return $this->roomNumber;
    }

    /**
     * Set bookingDate
     *
     * @param \DateTime $bookingDate
     * @return Booking
     */
    public function setBookingDate($bookingDate)
    {
        $this->bookingDate = $bookingDate;

        return $this;
    }

    /**
     * Get bookingDate
     *
     * @return \DateTime 
     */
    public function getBookingDate()
    {
        return $this->bookingDate;
    }

    /**
     * Set checkInDate
     *
     * @param \DateTime $checkInDate
     * @return Booking
     */
    public function setCheckInDate($checkInDate)
    {
        $this->checkInDate = $checkInDate;

        return $this;
    }

    /**
     * Get checkInDate
     *
     * @return \DateTime 
     */
    public function getCheckInDate()
    {
        return $this->checkInDate;
    }

    /**
     * Set checkOutDate
     *
     * @param \DateTime $checkOutDate
     * @return Booking
     */
    public function setCheckOutDate($checkOutDate)
    {
        $this->checkOutDate = $checkOutDate;

        return $this;
    }

    /**
     * Get checkOutDate
     *
     * @return \DateTime 
     */
    public function getCheckOutDate()
    {
        return $this->checkOutDate;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return Booking
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Booking
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->client = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add client
     *
     * @param \KC\UserBundle\Entity\Client $client
     * @return Booking
     */
    public function addClient(\KC\UserBundle\Entity\Client $client)
    {
        $this->client[] = $client;

        return $this;
    }

    /**
     * Remove client
     *
     * @param \KC\UserBundle\Entity\Client $client
     */
    public function removeClient(\KC\UserBundle\Entity\Client $client)
    {
        $this->client->removeElement($client);
    }

    /**
     * Get client
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getClient()
    {
        return $this->client;
    }
}
