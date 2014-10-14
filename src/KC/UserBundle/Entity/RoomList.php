<?php

namespace KC\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="roomlist")
 */
class RoomList
{
    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $id;
    
    /**   
     * @ORM\Column(name="bookingId", type="integer") 
     */
    private $bookingId;
    
     /**
     * @ORM\Column(name="roomNumber", type="integer") 
     */
    private $roomNumber;
    
    /**
    * @ORM\Column(name="price", type="decimal", precision=14, scale=2)
    */
    private $price;

    /**
     * Set bookingId
     *
     * @param integer $bookingId
     * @return RoomList
     */
    public function setBookingId($bookingId)
    {
        $this->bookingId = $bookingId;

        return $this;
    }

    /**
     * Get bookingId
     *
     * @return integer 
     */
    public function getBookingId()
    {
        return $this->bookingId;
    }

    /**
     * Set roomNumber
     *
     * @param integer $roomNumber
     * @return RoomList
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
     * Set price
     *
     * @param string $price
     * @return RoomList
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
}
