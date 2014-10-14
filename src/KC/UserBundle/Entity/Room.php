<?php

namespace KC\UserBundle\Entity;

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
     * @ORM\Column(name="workerId", type="integer") 
     */
    private $workerId;
    
    /**
     * @ORM\Column(name="standardId", type="integer") 
     */
    private $standardId;
    
    /**    
     * @ORM\Column(name="availability", type="string", length=1) 
     */
    private $availability;
    
    /**    
     * @ORM\Column(name="nrOfBeds", type="string", length=1) 
     */
    private $nrOfBeds;
    
    /**    
     * @ORM\Column(name="faultInformation", type="string", length=200) 
     */
    private $faultInformation;
    
    
    

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
     * Set workerId
     *
     * @param integer $workerId
     * @return Room
     */
    public function setWorkerId($workerId)
    {
        $this->workerId = $workerId;

        return $this;
    }

    /**
     * Get workerId
     *
     * @return integer 
     */
    public function getWorkerId()
    {
        return $this->workerId;
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
     * Set availability
     *
     * @param string $availability
     * @return Room
     */
    public function setAvailability($availability)
    {
        $this->availability = $availability;

        return $this;
    }

    /**
     * Get availability
     *
     * @return string 
     */
    public function getAvailability()
    {
        return $this->availability;
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
}
