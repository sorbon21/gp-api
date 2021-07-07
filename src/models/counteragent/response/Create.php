<?php

namespace Guarantpay\models\counteragent\response;
class Create
{
    private $userId;
    private $counterAgent;
    private $paymentMethodId;

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return mixed
     */
    public function getCounterAgent()
    {
        return $this->counterAgent;
    }

    /**
     * @param mixed $counterAgent
     */
    public function setCounterAgent($counterAgent)
    {
        $this->counterAgent = $counterAgent;
    }

    /**
     * @return mixed
     */
    public function getPaymentMethodId()
    {
        return $this->paymentMethodId;
    }

    /**
     * @param mixed $paymentMethodId
     */
    public function setPaymentMethodId($paymentMethodId)
    {
        $this->paymentMethodId = $paymentMethodId;
    }
}