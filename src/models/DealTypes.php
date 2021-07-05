<?php

namespace Guarantpay\models;
/**
 * Class DealTypes
 */
class DealTypes
{
    /**
     * @var
     */
    private $id;
    /**
     * @var
     */
    private $name;
    /**
     * @var
     */
    private $ident;

    /**
     * DealTypes constructor.
     * @param $id
     * @param $ident
     * @param $name
     */
    public function __construct($id, $ident, $name)
    {
        $this->id = $id;
        $this->ident = $ident;
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getIdent()
    {
        return $this->ident;
    }

    /**
     * @param mixed $ident
     */
    public function setIdent($ident)
    {
        $this->ident = $ident;
    }

}