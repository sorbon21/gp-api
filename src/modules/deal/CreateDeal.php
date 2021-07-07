<?php

namespace Guarantpay\modules\deal;

use Guarantpay\modules\Auth;

class CreateDeal
{
    private $token;

    private $body;

    private $deal;

    private $path;

    /**
     * CreateDeal constructor.
     * @param Auth $auth
     * @param $createModel
     * @throws \Exception
     */
    public function __construct(Auth $auth, $createModel)
    {
        $this->token = $auth->auth();
        $this->path = 'deal/create';
        $this->body = $createModel->getOutputArray();
    }

    public function doCreate()
    {
        $request = new \Guarantpay\core\Request();
        $request->setToken($this->token);
        if (empty($this->deal) and !empty($this->body)) {
            $response = $request->sendRequest($this->path, $this->body);
            echo  '<pre>';
            print_r($response);
            echo  '</pre>';
        }
        return $this->deal;
    }


}
