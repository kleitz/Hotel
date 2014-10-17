<?php

namespace KC\HotelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="standard")
 */
class Standard
{
    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
   protected $id;
    
    /**
     * @ORM\OneToMany(targetEntity="Room", mappedBy="standard")
     */
    protected $room;
    
    /**
     * @ORM\Column(name="standardName", type="string", length=20)
     */
    private $standardName;

    /**
    * @ORM\Column(name="priceForBed", type="decimal", precision=14, scale=2)
    */
    private $priceForBed;
    
    /**
    * @ORM\Column(name="description", type="string", length=500)
    */
    private $description;
    
    
    
    public function __toString()
    {
        return $this->getStandardName();
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return Standard
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
     * Set price
     *
     * @param string $price
     * @return Standard
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
     * Set priceForBed
     *
     * @param string $priceForBed
     * @return Standard
     */
    public function setPriceForBed($priceForBed)
    {
        $this->priceForBed = $priceForBed;

        return $this;
    }

    /**
     * Get priceForBed
     *
     * @return string 
     */
    public function getPriceForBed()
    {
        return $this->priceForBed;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Standard
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set room
     *
     * @param \KC\HotelBundle\Entity\Room $room
     * @return Standard
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
     * @param \KC\HotelBundle\Entity\Room $room
     * @return Standard
     */
    public function addRoom(\KC\HotelBundle\Entity\Room $room)
    {
        $this->room[] = $room;

        return $this;
    }

    /**
     * Remove room
     *
     * @param \KC\HotelBundle\Entity\Room $room
     */
    public function removeRoom(\KC\HotelBundle\Entity\Room $room)
    {
        $this->room->removeElement($room);
    }

    /**
     * Set standardName
     *
     * @param string $standardName
     * @return Standard
     */
    public function setStandardName($standardName)
    {
        $this->standardName = $standardName;

        return $this;
    }

    /**
     * Get standardName
     *
     * @return string 
     */
    public function getStandardName()
    {
        return $this->standardName;
    }
}
