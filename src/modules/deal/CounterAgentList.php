<?php

namespace Guarantpay\modules\deal;

use Guarantpay\models\counteragent\request\CreateCounterAgent;
use Guarantpay\models\PaymentMethod;
use Guarantpay\modules\Auth;

class CounterAgentList
{
    private $token;


    private $counterAgentList;

    private $path;

    public function __construct(Auth $auth)
    {
        $this->token = $auth->auth();
        $this->path = 'counteragent/list';
    }

    public function getList()
    {
        $request = new \Guarantpay\core\Request();
        $request->setToken($this->token);
        if (empty($this->feePayOptions)) {
            $response = $request->sendRequest($this->path);
            if (!empty($response['data']['counteragents'])) {
                $counterAgentsData = $response['data']['counteragents'];
                foreach ($counterAgentsData as $counterAgentData) {
                    foreach ($counterAgentData['counteragent'] as $item) {
                        $counterAgent = new \Guarantpay\models\counteragent\response\CounterAgent();
                        $counterAgent->setName($item['name'] ?? null);
                        $counterAgent->setId($item['id'] ?? null);
                        $counterAgent->setType($item['type'] ?? null);
                        $counterAgent->setUserId($counterAgentData['user_id']);
                        $paymentMethods = [];
                        foreach ($item['payment_method'] as $paymentItem) {
                            $paymentMethod = new PaymentMethod();
                            $paymentMethod->setId($paymentItem['id'] ?? null);
                            $paymentMethod->setName($paymentItem['name'] ?? null);
                            $paymentMethod->setType($paymentItem['type'] ?? null);
                            $paymentMethods[] = $paymentMethod;
                        }
                        $counterAgent->setPaymentMethods($paymentMethods);
                        $this->counterAgentList[] = $counterAgent;
                    }
                }
            }
        }
        return $this->counterAgentList;
    }


}
