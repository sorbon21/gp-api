<?php

namespace Guarantpay\modules\deal;

use Guarantpay\models\agents\LegalEntity;
use Guarantpay\models\agents\NaturalPerson;
use Guarantpay\models\agents\SoleProprietor;
use Guarantpay\models\PaymentMethod;
use Guarantpay\modules\Auth;

class AgentList
{
    private $token;


    private $agentList;

    private $path;

    public function __construct(Auth $auth)
    {
        $this->token = $auth->auth();
        $this->path = 'agent/list';
    }

    public function getList()
    {
        $request = new \Guarantpay\core\Request();
        $request->setToken($this->token);
        if (empty($this->agentList)) {
            $response = $request->sendRequest($this->path);
            if (!empty($response['data']['agents'])) {
                $data = $response['data']['agents'];
                foreach ($data as $key => $item) {

                    foreach ($item as $subItem) {
                        $agent = null;
                        if ($key == 'natural_persons') {
                            $agent = new NaturalPerson();
                            $agent->setId($subItem['id'] ?? null);
                            $agent->setFirstName($subItem['first_name'] ?? null);
                            $agent->setLastName($subItem['last_name'] ?? null);
                            $agent->setSecondaryName($subItem['secondary_name'] ?? null);
                            $agent->setBirthDate($subItem['birth_date'] ?? null);
                        }
                        if ($key == 'sole_proprietors') {
                            $agent = new SoleProprietor();
                            $agent->setId($subItem['id'] ?? null);
                            $agent->setName($subItem['name'] ?? null);
                            $agent->setFirstName($subItem['first_name'] ?? null);
                            $agent->setLastName($subItem['last_name'] ?? null);
                            $agent->setSecondaryName($subItem['secondary_name'] ?? null);
                            $agent->setBirthDate($subItem['birth_date'] ?? null);
                            $agent->setInn($subItem['inn'] ?? null);
                            $agent->setOgrn($subItem['ogrn'] ?? null);
                        }
                        if ($key == 'legal_entities') {
                            $agent = new LegalEntity();
                            $agent->setId($subItem['id'] ?? null);
                            $agent->setName($subItem['name'] ?? null);
                            $agent->setLegalAddress($subItem['legal_address'] ?? null);
                            $agent->setInn($subItem['inn'] ?? null);
                            $agent->setKpp($subItem['kpp'] ?? null);
                            $agent->setOgrn($subItem['ogrn'] ?? null);
                            $agent->setNds($subItem['nds'] ?? null);
                        }
                        $paymentMethods = [];
                        foreach ($subItem['payment_methods'] as $subItemPaymentMethod) {
                            $paymentMethod = new PaymentMethod();
                            $paymentMethod->setType($subItemPaymentMethod['type'] ?? null);
                            $paymentMethod->setName($subItemPaymentMethod['name'] ?? null);
                            $paymentMethod->setId($subItemPaymentMethod['id'] ?? null);
                            $paymentMethods[] = $paymentMethod;
                        }
                        $agent->setPaymentMethods($paymentMethods);
                        $this->agentList[] = $subItem;
                    }
                }


            }
        }
        return $this->agentList;
    }


}
