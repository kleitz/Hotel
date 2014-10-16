<?php

namespace KC\HotelBundle\Entity;

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
   protected $id;
    
    /**
     * @ORM\ManyToMany(targetEntity="Booking", inversedBy="list")
     * @ORM\JoinTable(name="roomlist_booking")
     **/
    private $booking;
    
    
    /**
     * @ORM\ManyToOne(targetEntity="Room", inversedBy="roomlist")
     * @ORM\JoinColumn(name="room_id", referencedColumnName="id")
     */
    private $room;
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
     * @return RoomList
     */
    public function addBooking(\KC\UserBundle\Entity\Booking $booking)
    {
        $this->booking[] = $booking;

        return $this;
    }

    /**
     * Remove booking
     *
     * @param \KC\HotelBundle\Entity\Booking $booking
     */
    public function removeBooking(\KC\UserBundle\Entity\Booking $booking)
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
}
