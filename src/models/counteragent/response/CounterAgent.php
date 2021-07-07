<?php

namespace Guarantpay\models\counteragent\response;


/**
 * Class Create
 * @package Guarantpay\models\counteragent\request
 */
class CounterAgent
{

    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $user_id;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $name;


    /**
     * @var array
     */
    private $payments_method = [];

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
     * @return int
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param int $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
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
     * @return array
     */
    public function getPaymentsMethod()
    {
        return $this->payments_method;
    }

    /**
     * @param array $payments_method
     */
    public function setPaymentMethods($payments_method)
    {
        $this->payments_method = $payments_method;
    }


}
