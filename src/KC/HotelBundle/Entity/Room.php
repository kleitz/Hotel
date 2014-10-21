<?php

namespace KC\HotelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="room")
 */
class Room
{
    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $id;
    
    /**
     * @ORM\OneToMany(targetEntity="Offer", mappedBy="room")
     */
    private $offer;
   
    /**
     * @ORM\ManyToOne(targetEntity="Standard", inversedBy="room")
     * @ORM\JoinColumn(name="standard_id", referencedColumnName="id")
     */
    private $standard;
   
    /**
     * @ORM\Column(name="roomNumber", type="integer")
     */
    private $roomNumber;
    
    /**    
     * @ORM\Column(name="nrOfBeds", type="integer") 
     */
    private $nrOfBeds;
    
    /**    
     * @ORM\Column(name="faultInformation", type="string", length=200, nullable=true) 
     */
    private $faultInformation;
    
    public function __toString() {
        $myroomNumber= (string)$this->roomNumber;
     return $myroomNumber;
}
   
    
    /**
     * Set id
     *
     * @param integer $id
     * @return Room
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
     * Set standardId
     *
     * @param integer $standardId
     * @return Room
     */
    public function setStandardId($standardId)
    {
        $this->standardId = $standardId;

        return $this;
    }

    /**
     * Get standardId
     *
     * @return integer 
     */
    public function getStandardId()
    {
        return $this->standardId;
    }

    /**
     * Set nrOfBeds
     *
     * @param string $nrOfBeds
     * @return Room
     */
    public function setNrOfBeds($nrOfBeds)
    {
        $this->nrOfBeds = $nrOfBeds;

        return $this;
    }

    /**
     * Get nrOfBeds
     *
     * @return string 
     */
    public function getNrOfBeds()
    {
        return $this->nrOfBeds;
    }

    /**
     * Set faultInformation
     *
     * @param string $faultInformation
     * @return Room
     */
    public function setFaultInformation($faultInformation)
    {
        $this->faultInformation = $faultInformation;

        return $this;
    }

    /**
     * Get faultInformation
     *
     * @return string 
     */
    public function getFaultInformation()
    {
        return $this->faultInformation;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->standard = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add standard
     *
     * @param \KC\HotelBundle\Entity\Standard $standard
     * @return Room
     */
    public function addStandard(\KC\HotelBundle\Entity\Standard $standard)
    {
        $this->standard[] = $standard;

        return $this;
    }

    /**
     * Remove standard
     *
     * @param \KC\HotelBundle\Entity\Standard $standard
     */
    public function removeStandard(\KC\HotelBundle\Entity\Standard $standard)
    {
        $this->standard->removeElement($standard);
    }

    /**
     * Get standard
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getStandard()
    {
        return $this->standard;
    }

    /**
     * Set standard
     *
     * @param \KC\HotelBundle\Entity\Standard $standard
     * @return Room
     */
    public function setStandard(\KC\HotelBundle\Entity\Standard $standard = null)
    {
        $this->standard = $standard;

        return $this;
    }


    /**
     * Set roomNumber
     *
     * @param integer $roomNumber
     * @return Room
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
     * Add offer
     *
     * @param \KC\HotelBundle\Entity\Offer $offer
     * @return Room
     */
    public function addOffer(\KC\HotelBundle\Entity\Offer $offer)
    {
        $this->offer[] = $offer;

        return $this;
    }

    /**
     * Remove offer
     *
     * @param \KC\HotelBundle\Entity\Offer $offer
     */
    public function removeOffer(\KC\HotelBundle\Entity\Offer $offer)
    {
        $this->offer->removeElement($offer);
    }

    /**
     * Get offer
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOffer()
    {
        return $this->offer;
    }
}
