<?php

namespace Guarantpay\modules\deal;

use Guarantpay\modules\Auth;

class CreateCounterAgent
{
    private $token;

    private $body;

    private $counterAgent;

    private $path;

    /**
     * CreateCounterAgent constructor.
     * @param Auth $auth
     * @param $createModel
     * @throws \Exception
     */
    public function __construct(Auth $auth, $createModel)
    {
        $this->token = $auth->auth();
        $this->path = 'deal/create-counteragent';
        $this->body = $createModel->getOutputArray();
    }

    public function doCreate()
    {
        $request = new \Guarantpay\core\Request();
        $request->setToken($this->token);
        if (empty($this->counterAgent) and !empty($this->body)) {
            $response = $request->sendRequest($this->path, $this->body);
            if (!empty($response['data']['counteragent'])) {
                $counterAgentData = $response['data']['counteragent'];
                $this->counterAgent = new \Guarantpay\models\counteragent\response\Create();
                $this->counterAgent->setUserId($counterAgentData['user_id'] ?? null);
                $this->counterAgent->setCounterAgent($counterAgentData['counteragent_id'] ?? null);
                $this->counterAgent->setPaymentMethodId($counterAgentData['payment_method_id'] ?? null);
            }
        }
        return $this->counterAgent;
    }


}
