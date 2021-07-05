<?php

namespace Guarantpay\modules\deal;

use Guarantpay\models\counteragent\request\Create;
use Guarantpay\modules\Auth;

class CreateCounteragent
{
    private $token;

    private $body;

    private $counteragent;

    private $path;

    public function __construct(Auth $auth, Create $createModel)
    {
        $this->token = $auth->auth();
        $this->path = 'deal/create-counteragent';
        $this->body = $createModel->getOutputArray();
    }

    public function doCreate()
    {
        $request = new \Guarantpay\core\Request();
        $request->setToken($this->token);
        if (empty($this->feePayOptions)) {
            $response = $request->sendRequest($this->path, $this->body);
            if (!empty($response['data']['counteragent']))
            {
                $counteragentData = $response['data']['counteragent'];
                $this->counteragent = new \Guarantpay\models\counteragent\response\Create($counteragentData['user_id'], $counteragentData['counteragent_id'], $counteragentData['payment_method_id']);
            }
        }
        return $this->counteragent;
    }


}
