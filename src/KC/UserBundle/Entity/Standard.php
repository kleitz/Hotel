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
    * @ORM\Column(name="id", type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $id;
    
    /**
    * @ORM\Column(name="priceForBed", type="decimal", precision=14, scale=8)
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
}
