<?php

namespace KC\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use KC\UserBundle\Entity\Booking;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="client")
 */
class Client extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="Booking", inversedBy="client")
     * @ORM\JoinColumn(name="booking_id", referencedColumnName="id")
     */
    private $booking;
    
    /**
    * @ORM\Column(name="name", type="string", length=20)
    */
    private $name;
    
    /**
    * @ORM\Column(name="surname", type="string", length=50)
    */
    private $surname;
    
    /**
    * @ORM\Column(name="addressStreetName", type="string", length=30)
    */
    private $addressStreetName;
    
    /**
    * @ORM\Column(name="addressHouseNumber", type="string", length=8)
    */
    private $addressHouseNumber;
    
    /**
    * @ORM\Column(name="addressZipCode", type="string", length=5)
    */
    private $addressZipCode;
    
    /**
    * @ORM\Column(name="pesel", type="integer", length=11)
    */
    private $pesel;
    
    /**
    * @ORM\Column(name="telephoneNumber", type="integer", length=11)
    */
    private $telephoneNumber;
    
    /**
    * @ORM\Column(name="bankAccountNumber", type="integer", length=11)
    */
    private $bankAccountNumber;
  
    

    public function __construct()
    {
        parent::__construct();
        // your own logic
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
     * Set name
     *
     * @param string $name
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set surname
     *
     * @param string $surname
     * @return User
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string 
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set addressStreetName
     *
     * @param string $addressStreetName
     * @return User
     */
    public function setAddressStreetName($addressStreetName)
    {
        $this->addressStreetName = $addressStreetName;

        return $this;
    }

    /**
     * Get addressStreetName
     *
     * @return string 
     */
    public function getAddressStreetName()
    {
        return $this->addressStreetName;
    }

    /**
     * Set addressHouseNumber
     *
     * @param string $addressHouseNumber
     * @return User
     */
    public function setAddressHouseNumber($addressHouseNumber)
    {
        $this->addressHouseNumber = $addressHouseNumber;

        return $this;
    }

    /**
     * Get addressHouseNumber
     *
     * @return string 
     */
    public function getAddressHouseNumber()
    {
        return $this->addressHouseNumber;
    }

    /**
     * Set addressZipCode
     *
     * @param string $addressZipCode
     * @return User
     */
    public function setAddressZipCode($addressZipCode)
    {
        $this->addressZipCode = $addressZipCode;

        return $this;
    }

    /**
     * Get addressZipCode
     *
     * @return string 
     */
    public function getAddressZipCode()
    {
        return $this->addressZipCode;
    }

    /**
     * Set pesel
     *
     * @param integer $pesel
     * @return User
     */
    public function setPesel($pesel)
    {
        $this->pesel = $pesel;

        return $this;
    }

    /**
     * Get pesel
     *
     * @return integer 
     */
    public function getPesel()
    {
        return $this->pesel;
    }

    /**
     * Set telephoneNumber
     *
     * @param integer $telephoneNumber
     * @return User
     */
    public function setTelephoneNumber($telephoneNumber)
    {
        $this->telephoneNumber = $telephoneNumber;

        return $this;
    }

    /**
     * Get telephoneNumber
     *
     * @return integer 
     */
    public function getTelephoneNumber()
    {
        return $this->telephoneNumber;
    }

    /**
     * Set bankAccountNumber
     *
     * @param integer $bankAccountNumber
     * @return User
     */
    public function setBankAccountNumber($bankAccountNumber)
    {
        $this->bankAccountNumber = $bankAccountNumber;

        return $this;
    }

    /**
     * Get bankAccountNumber
     *
     * @return integer 
     */
    public function getBankAccountNumber()
    {
        return $this->bankAccountNumber;
    }

    /**
     * Set booking
     *
     * @param \KC\UserBundle\Entity\Booking $booking
     * @return Client
     */
    public function setBooking(\KC\UserBundle\Entity\Booking $booking = null)
    {
        $this->booking = $booking;

        return $this;
    }

    /**
     * Get booking
     *
     * @return \KC\UserBundle\Entity\Booking 
     */
    public function getBooking()
    {
        return $this->booking;
    }
}
