<?php

namespace Guarantpay\models\agents;
class LegalEntity implements IAgent
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
    private $legalAddress;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var string
     */
    private $inn;

    /**
     * @var string
     */
    private $kpp;

    /**
     * @var string
     */
    private $ogrn;

    /**
     * @var string
     */
    private $positionOfRepresentative;

    /**
     * @var string
     */
    private $nameOfRepresentative;

    /**
     * @var array
     */
    private $nds;

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
    public function getLegalAddress()
    {
        return $this->legalAddress;
    }

    /**
     * @param string $legalAddress
     */
    public function setLegalAddress($legalAddress)
    {
        $this->legalAddress = $legalAddress;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getInn()
    {
        return $this->inn;
    }

    /**
     * @param string $inn
     */
    public function setInn($inn)
    {
        $this->inn = $inn;
    }

    /**
     * @return string
     */
    public function getKpp()
    {
        return $this->kpp;
    }

    /**
     * @param string $kpp
     */
    public function setKpp($kpp)
    {
        $this->kpp = $kpp;
    }

    /**
     * @return string
     */
    public function getOgrn()
    {
        return $this->ogrn;
    }

    /**
     * @param string $ogrn
     */
    public function setOgrn($ogrn)
    {
        $this->ogrn = $ogrn;
    }

    /**
     * @return string
     */
    public function getPositionOfRepresentative()
    {
        return $this->positionOfRepresentative;
    }

    /**
     * @param string $positionOfRepresentative
     */
    public function setPositionOfRepresentative($positionOfRepresentative)
    {
        $this->positionOfRepresentative = $positionOfRepresentative;
    }

    /**
     * @return string
     */
    public function getNameOfRepresentative()
    {
        return $this->nameOfRepresentative;
    }

    /**
     * @param string $nameOfRepresentative
     */
    public function setNameOfRepresentative($nameOfRepresentative)
    {
        $this->nameOfRepresentative = $nameOfRepresentative;
    }

    /**
     * @return array
     */
    public function getNds()
    {
        return $this->nds;
    }

    /**
     * @param array $nds
     */
    public function setNds($nds)
    {
        $this->nds = $nds;
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

    public function getOutputArrray()
    {
        $output = [];
        $output['id'] = $this->getId();
        $output['name'] = $this->getName();
        $output['legal_address'] = $this->getLegalAddress();
        $output['phone'] = $this->getPhone();
        $output['inn'] = $this->getInn();
        $output['kpp'] = $this->getKpp();
        $output['ogrn'] = $this->getOgrn();
        $output['name_of_representative'] = $this->getNameOfRepresentative();
        $output['position_of_representative'] = $this->getPositionOfRepresentative();
        $output['nds'] = $this->getNds();
        $output['payment_methods'] = $this->getPaymentMethods();
        return $output;

    }

}