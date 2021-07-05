<?php

namespace Guarantpay\modules\deal;

use Guarantpay\models\DealTypes;
use Guarantpay\modules\Auth;

class Types
{
    private $token;

    private $dealTypes;

    private $path;

    public function __construct(Auth $auth)
    {
        $this->token = $auth->auth();
        $this->path = 'deal/types';
    }

    public function getDealTypes()
    {
        $request = new \Guarantpay\core\Request();
        $request->setToken($this->token);
        if (empty($this->dealTypes)) {
            $response = $request->sendRequest($this->path);
            if (!empty($response['data']["deal_types"])){
                foreach ($response['data']["deal_types"] as $item){
                    $this->dealTypes[]= new DealTypes($item['id'],$item['ident'],$item['name']);
                }
            }
        }
        return $this->dealTypes;
    }


}
