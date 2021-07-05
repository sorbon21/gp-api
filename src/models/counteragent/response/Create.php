<?php

namespace Guarantpay\models\counteragent\response;
class Create
{
    private $user_id;
    private $counteragent_id;
    private $payment_method_id;

    public function __construct(int $user_id = null, int $counteragent_id = null, $payment_method_id = null)
    {
        $this->user_id = $user_id;
        $this->counteragent_id = $counteragent_id;
        $this->payment_method_id = $payment_method_id;
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
     * @return int
     */
    public function getCounteragentId()
    {
        return $this->counteragent_id;
    }

    /**
     * @param int $counteragent_id
     */
    public function setCounteragentId($counteragent_id)
    {
        $this->counteragent_id = $counteragent_id;
    }

    /**
     * @return null
     */
    public function getPaymentMethodId()
    {
        return $this->payment_method_id;
    }

    /**
     * @param null $payment_method_id
     */
    public function setPaymentMethodId($payment_method_id)
    {
        $this->payment_method_id = $payment_method_id;
    }




}