<?php

namespace KC\HotelBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"user" = "User", "client" = "Client", "worker" = "Worker"})
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    
    /**
    * @ORM\Column(name="name", type="string", length=20)
    * @Assert\NotBlank(message="Please enter your name.")
    * @Assert\Length(
    *     min=3,
    *     max="255",
    *     minMessage="The name is too short.",
    *     maxMessage="The name is too long.")
    */
    protected $name;
    
    /**
    * @ORM\Column(name="surname", type="string", length=50)
    */
    protected $surname;
    
    /**
    * @ORM\Column(name="addressStreetName", type="string", length=30)
    */
    protected $addressStreetName;
    
    /**
    * @ORM\Column(name="addressHouseNumber", type="string", length=8)
    */
    protected $addressHouseNumber;
    
    /**
    * @ORM\Column(name="addressApartmentNumber", type="integer", nullable=true)
    */
    protected $addressApartmentNumber;
    
    /**
    * @ORM\Column(name="addressZipCode", type="string", length=6)
    */
    protected $addressZipCode;
    
    /**
    * @ORM\Column(name="pesel", type="integer", length=11)
    */
    protected $pesel;
    
    /**
    * @ORM\Column(name="telephoneNumber", type="integer", length=11)
    */
    protected $telephoneNumber;
    
    /**
    * @ORM\Column(name="bankAccountNumber", type="integer", length=11)
    */
    protected $bankAccountNumber;
  
    

    public function __construct()
    {
        parent::__construct();
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
     * @param \KC\HotelBundle\Entity\Booking $booking
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
     * @return \KC\HotelBundle\Entity\Booking 
     */
    public function getBooking()
    {
        return $this->booking;
    }

    /**
     * Set addressApartmentNumber
     *
     * @param \integer $addressApartmentNumber
     * @return Client
     */
    public function setAddressApartmentNumber($addressApartmentNumber)
    {
        $this->addressApartmentNumber = $addressApartmentNumber;

        return $this;
    }

    /**
     * Get addressApartmentNumber
     *
     * @return \integer 
     */
    public function getAddressApartmentNumber()
    {
        return $this->addressApartmentNumber;
    }
}
