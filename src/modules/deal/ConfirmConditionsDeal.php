<?php

namespace Guarantpay\modules\deal;

use Guarantpay\modules\Auth;

class ConfirmConditionsDeal
{
    private $token;

    private $body;

    private $confirmConditionsDeal;

    private $path;

    /**
     * CreateDeal constructor.
     * @param Auth $auth
     * @param $dealId
     * @throws \Exception
     */
    public function __construct(Auth $auth, int $dealId)
    {
        $this->token = $auth->auth();
        $this->path = "deal/{$dealId}/confirm-conditions";

    }

    public function doConfirm()
    {
        $request = new \Guarantpay\core\Request();
        $request->setToken($this->token);
        if (empty($this->confirmConditionsDeal)) {
            $response = $request->sendRequest($this->path);
            return $response;
        }
        return $this->confirmConditionsDeal;
    }
}
