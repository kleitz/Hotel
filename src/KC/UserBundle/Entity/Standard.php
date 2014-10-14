<?php

namespace KC\UserBundle\Entity;

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
    * @ORM\Column(name="priceForBed", type="decimal", precision=14, scale=2)
    */
    private $priceForBed;
    
    /**
    * @ORM\Column(name="description", type="string", length=500)
    */
    private $description;
    
    
    
    

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
     * @param \KC\UserBundle\Entity\Room $room
     * @return Standard
     */
    public function setRoom(\KC\UserBundle\Entity\Room $room = null)
    {
        $this->room = $room;

        return $this;
    }

    /**
     * Get room
     *
     * @return \KC\UserBundle\Entity\Room 
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
     * @param \KC\UserBundle\Entity\Room $room
     * @return Standard
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
}
