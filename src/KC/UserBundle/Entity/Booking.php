<?php

namespace KC\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="booking")
 */
class Booking 
{
    /**
    * @var integer
    *
    * @ORM\Column(name="id", type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $id;
    
    /**
     * @var integer
     *     
     * @ORM\Column(name="clientId", type="integer") 
     */
    private $clientId;
    
    /**
     * @var integer
     * 
     * @ORM\Column(name="roomNumber", type="integer") 
     */
    private $roomNumber;
    
    /**
     * 
     * @var datatime
     * 
     * @ORM\Column(name="bookingDate", type="datetime")
     * 
     */
    private $bookingDate;
    
    /**
     * @var datetime
     * 
     * @ORM\Column(name="$checkInDate", type="datetime")
     */
    private $checkInDate;
    
    /**
     * @var datetime
     * 
     * @ORM\Column(name="$checkOutDate", type="datetime")
     */
    private $checkOutDate;
    
     /**
     * @var float
     * 
     * @ORM\Column(name="price", type="float") 
     */
    private $price;
    
        
     /**
     * @var string
     * 
     * @ORM\Column(name="status", type="string") 
     */
    private $status;
    
    
    
    

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
}
