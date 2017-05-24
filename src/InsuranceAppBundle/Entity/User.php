<?php
/**
 * Created by PhpStorm.
 * User: wcs-fontainebleau
 * Date: 10/05/17
 * Time: 22:10
 */

namespace InsuranceAppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;



class User extends BaseUser

{
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }


/***CODE GENERATED ********/



    /**
     * @var string
     */
    private $First_Names;

    /**
     * @var string
     */
    private $Surname;

    /**
     * @var string
     */
    private $Genre;

    /**
     * @var string
     */
    private $Nationality;

    /**
     * @var \DateTime
     */
    private $Date_of_Birth;

    /**
     * @var string
     */
    private $Adress;

    /**
     * @var string
     */
    private $Postcode;

    /**
     * @var string
     */
    private $City;

    /**
     * @var string
     */
    private $Country;

    /**
     * @var string
     */
    private $Cardholder_Name;

    /**
     * @var integer
     */
    private $Card_Number;

    /**
     * @var \DateTime
     */
    private $End_Date;

    /**
     * @var integer
     */
    private $CSV_Number;

    /**
     * @var string
     */
    private $PayPal_Email;

    /**
     * @var string
     */
    private $PayPal_Password;


    /**
     * Set firstNames
     *
     * @param string $firstNames
     *
     * @return User
     */
    public function setFirstNames($firstNames)
    {
        $this->First_Names = $firstNames;

        return $this;
    }

    /**
     * Get firstNames
     *
     * @return string
     */
    public function getFirstNames()
    {
        return $this->First_Names;
    }

    /**
     * Set surname
     *
     * @param string $surname
     *
     * @return User
     */
    public function setSurname($surname)
    {
        $this->Surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->Surname;
    }

    /**
     * Set genre
     *
     * @param string $genre
     *
     * @return User
     */
    public function setGenre($genre)
    {
        $this->Genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return string
     */
    public function getGenre()
    {
        return $this->Genre;
    }

    /**
     * Set nationality
     *
     * @param string $nationality
     *
     * @return User
     */
    public function setNationality($nationality)
    {
        $this->Nationality = $nationality;

        return $this;
    }

    /**
     * Get nationality
     *
     * @return string
     */
    public function getNationality()
    {
        return $this->Nationality;
    }

    /**
     * Set dateOfBirth
     *
     * @param \DateTime $dateOfBirth
     *
     * @return User
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->Date_of_Birth = $dateOfBirth;

        return $this;
    }

    /**
     * Get dateOfBirth
     *
     * @return \DateTime
     */
    public function getDateOfBirth()
    {
        return $this->Date_of_Birth;
    }

    /**
     * Set adress
     *
     * @param string $adress
     *
     * @return User
     */
    public function setAdress($adress)
    {
        $this->Adress = $adress;

        return $this;
    }

    /**
     * Get adress
     *
     * @return string
     */
    public function getAdress()
    {
        return $this->Adress;
    }

    /**
     * Set postcode
     *
     * @param string $postcode
     *
     * @return User
     */
    public function setPostcode($postcode)
    {
        $this->Postcode = $postcode;

        return $this;
    }

    /**
     * Get postcode
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->Postcode;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return User
     */
    public function setCity($city)
    {
        $this->City = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return User
     */
    public function setCountry($country)
    {
        $this->Country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     * Set cardholderName
     *
     * @param string $cardholderName
     *
     * @return User
     */
    public function setCardholderName($cardholderName)
    {
        $this->Cardholder_Name = $cardholderName;

        return $this;
    }

    /**
     * Get cardholderName
     *
     * @return string
     */
    public function getCardholderName()
    {
        return $this->Cardholder_Name;
    }

    /**
     * Set cardNumber
     *
     * @param integer $cardNumber
     *
     * @return User
     */
    public function setCardNumber($cardNumber)
    {
        $this->Card_Number = $cardNumber;

        return $this;
    }

    /**
     * Get cardNumber
     *
     * @return integer
     */
    public function getCardNumber()
    {
        return $this->Card_Number;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     *
     * @return User
     */
    public function setEndDate($endDate)
    {
        $this->End_Date = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->End_Date;
    }

    /**
     * Set cSVNumber
     *
     * @param integer $cSVNumber
     *
     * @return User
     */
    public function setCSVNumber($cSVNumber)
    {
        $this->CSV_Number = $cSVNumber;

        return $this;
    }

    /**
     * Get cSVNumber
     *
     * @return integer
     */
    public function getCSVNumber()
    {
        return $this->CSV_Number;
    }

    /**
     * Set payPalEmail
     *
     * @param string $payPalEmail
     *
     * @return User
     */
    public function setPayPalEmail($payPalEmail)
    {
        $this->PayPal_Email = $payPalEmail;

        return $this;
    }

    /**
     * Get payPalEmail
     *
     * @return string
     */
    public function getPayPalEmail()
    {
        return $this->PayPal_Email;
    }

    /**
     * Set payPalPassword
     *
     * @param string $payPalPassword
     *
     * @return User
     */
    public function setPayPalPassword($payPalPassword)
    {
        $this->PayPal_Password = $payPalPassword;

        return $this;
    }

    /**
     * Get payPalPassword
     *
     * @return string
     */
    public function getPayPalPassword()
    {
        return $this->PayPal_Password;
    }
}
