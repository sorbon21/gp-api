<?php

namespace Guarantpay\models\agents;

class SoleProprietor implements IAgent
{
    /**
     * @var integer
     */
    private $id;


    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;


    /**
     * @var string
     */
    private $secondaryName;


    /**
     * @var string
     */
    private $birthDate;


    /**
     * @var integer
     */
    private $inn;

    /**
     * @var integer
     */
    private $ogrn;


    private $legalAddress;


    /**
     * @var array
     */
    private $paymentMethods;


    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getSecondaryName()
    {
        return $this->secondaryName;
    }

    /**
     * @param string $secondaryName
     */
    public function setSecondaryName($secondaryName)
    {
        $this->secondaryName = $secondaryName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * @param string $birthDate
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
    }

    /**
     * @return int
     */
    public function getInn()
    {
        return $this->inn;
    }

    /**
     * @param int $inn
     */
    public function setInn($inn)
    {
        $this->inn = $inn;
    }

    /**
     * @return int
     */
    public function getOgrn()
    {
        return $this->ogrn;
    }

    /**
     * @param int $ogrn
     */
    public function setOgrn($ogrn)
    {
        $this->ogrn = $ogrn;
    }

    /**
     * @return mixed
     */
    public function getLegalAddress()
    {
        return $this->legalAddress;
    }

    /**
     * @param mixed $legalAddress
     */
    public function setLegalAddress($legalAddress)
    {
        $this->legalAddress = $legalAddress;
    }

    /**
     * @return mixed
     */
    public function getPaymentMethods()
    {
        return $this->paymentMethods;
    }

    /**
     * @param mixed $paymentMethods
     */
    public function setPaymentMethods($paymentMethods)
    {
        $this->paymentMethods = $paymentMethods;
    }
}