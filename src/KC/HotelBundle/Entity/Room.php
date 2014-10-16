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
     *
     * @ORM\OneToMany(targetEntity="RoomList", mappedBy="room")
     */
    private $roomlist;
    
    /**
     * @ORM\Column(name="workerId", type="integer") 
     */
    private $workerId;
    
    /**
     * @ORM\ManyToOne(targetEntity="Standard", inversedBy="room")
     * @ORM\JoinColumn(name="standard_id", referencedColumnName="id")
     */
    private $standard;
    
    /**
     * @ORM\ManyToOne(targetEntity="Worker", inversedBy="room")
     * @ORM\JoinColumn(name="worker_id", referencedColumnName="id")
     */
    private $worker;
    
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
    public function addStandard(\KC\UserBundle\Entity\Standard $standard)
    {
        $this->standard[] = $standard;

        return $this;
    }

    /**
     * Remove standard
     *
     * @param \KC\HotelBundle\Entity\Standard $standard
     */
    public function removeStandard(\KC\UserBundle\Entity\Standard $standard)
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
    public function setStandard(\KC\UserBundle\Entity\Standard $standard = null)
    {
        $this->standard = $standard;

        return $this;
    }

    /**
     * Set worker
     *
     * @param \KC\HotelBundle\Entity\Worker $worker
     * @return Room
     */
    public function setWorker(\KC\UserBundle\Entity\Worker $worker = null)
    {
        $this->worker = $worker;

        return $this;
    }

    /**
     * Get worker
     *
     * @return \KC\HotelBundle\Entity\Worker 
     */
    public function getWorker()
    {
        return $this->worker;
    }
}
