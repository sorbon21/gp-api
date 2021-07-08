<?php

namespace Guarantpay\models\deal\request;

class CreateDeal
{
    private $name;
    private $addonTerms;
    private $amount;
    private $dealRole;
    private $deliveryPeriod;
    private $dealType;
    private $feePayerOption;
    private $agent;
    private $counterAgent;

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
    public function getAddonTerms()
    {
        return $this->addonTerms;
    }

    /**
     * @param mixed $addonTerms
     */
    public function setAddonTerms($addonTerms)
    {
        $this->addonTerms = $addonTerms;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return mixed
     */
    public function getDealRole()
    {
        return $this->dealRole;
    }

    /**
     * @param mixed $dealRole
     */
    public function setDealRole($dealRole)
    {
        $this->dealRole = $dealRole;
    }

    /**
     * @return mixed
     */
    public function getDeliveryPeriod()
    {
        return $this->deliveryPeriod;
    }

    /**
     * @param mixed $deliveryPeriod
     */
    public function setDeliveryPeriod($deliveryPeriod)
    {
        $this->deliveryPeriod = $deliveryPeriod;
    }

    /**
     * @return mixed
     */
    public function getDealType()
    {
        return $this->dealType;
    }

    /**
     * @param mixed $dealType
     */
    public function setDealType($dealType)
    {
        $this->dealType = $dealType;
    }

    /**
     * @return mixed
     */
    public function getFeePayerOption()
    {
        return $this->feePayerOption;
    }

    /**
     * @param mixed $feePayerOption
     */
    public function setFeePayerOption($feePayerOption)
    {
        $this->feePayerOption = $feePayerOption;
    }

    /**
     * @return mixed
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * @param  $agent
     */
    public function setAgent($agent)
    {
        $this->agent = $agent;
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


    public function getOutputArray()
    {
        $output = [];
        $output['name'] = $this->name;
        $output['amount'] = $this->amount;
        $output['deal_role'] = $this->dealRole;
        $output['deal_type'] = $this->dealType;
        $output['fee_payer_option'] = $this->feePayerOption;
        $output['addon_terms'] = $this->addonTerms;
        $output['delivery_period'] = $this->deliveryPeriod;
        $output['agent'] = [
            'agent_id' => $this->agent['agent_id'],
            'payment_method_id' => $this->agent['payment_method_id'] ?? null
        ];
        $output['counteragent'] = [
            'email' => $this->counterAgent['email'],
            'counteragent_id' => $this->counterAgent['counteragent_id'],
            'payment_method_id' => $this->counterAgent['payment_method_id'] ?? null
        ];
        return $output;
    }


}