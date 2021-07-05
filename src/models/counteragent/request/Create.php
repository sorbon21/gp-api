<?php

namespace Guarantpay\models\counteragent\request;


/**
 * Class Create
 * @package Guarantpay\models\counteragent\request
 */
class Create
{
    /**
     * @var string
     */
    private $email;
    /**
     * @var string
     */
    private $phone;
    /**
     * @var string
     */
    private $type_agent;
    /**
     * @var array
     */
    private $agent_data = [];

    /**
     * @var array
     */
    private $payment_data = [];

    /**
     * Create constructor.
     * @param string $email
     * @param string $phone
     * @param string $type_agent
     * @param array $agent_data
     * @param array|null $payment_data
     */
    public function __construct(string $email = null, string $phone = null, string $type_agent = null, array $agent_data = null, array $payment_data = null)
    {
        $this->email = $email;
        $this->phone = $phone;
        $this->type_agent = $type_agent;
        $this->agent_data = $agent_data;
        $this->payment_data = $payment_data;
    }


    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
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
    public function getTypeAgent()
    {
        return $this->type_agent;
    }

    /**
     * @param string $type_agent
     */
    public function setTypeAgent($type_agent)
    {
        $this->type_agent = $type_agent;
    }

    /**
     * @return array
     */
    public function getAgentData()
    {
        return $this->agent_data;
    }

    /**
     * @param array $agent_data
     */
    public function setAgentData($agent_data)
    {
        $this->agent_data = $agent_data;
    }

    /**
     * @return array
     */
    public function getPaymentData()
    {
        return $this->payment_data;
    }

    /**
     * @param array $payment_data
     */
    public function setPaymentData($payment_data)
    {
        $this->payment_data = $payment_data;
    }


    /**
     * @return array
     */
    public function getOutputArray()
    {
        $output = [];
        $output[] = ['email' => $this->email];
        $output[] = ['phone' => $this->phone];
        $output[] = ['type_agent' => $this->type_agent];
        $output[] = ['agent_data' => $this->agent_data];
        $output[] = ['payment_data' => $this->payment_data];
        return $output;
    }

}
