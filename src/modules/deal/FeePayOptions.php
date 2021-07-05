<?php

namespace Guarantpay\modules\deal;

use Guarantpay\models\DealTypes;
use Guarantpay\modules\Auth;

class FeePayOptions
{
    private $token;

    private $feePayOptions;

    private $path;

    public function __construct(Auth $auth)
    {
        $this->token = $auth->auth();
        $this->path = 'deal/fee-payer-options';
    }

    public function getFeePayOptions()
    {
        $request = new \Guarantpay\core\Request();
        $request->setToken($this->token);
        if (empty($this->feePayOptions)) {
            $response = $request->sendRequest($this->path);
            if (!empty($response['data']["fee_payer_options"])) {
                foreach ($response['data']["fee_payer_options"] as $item) {
                    $this->feePayOptions[] = new \Guarantpay\models\FeePayOptions($item['id'], $item['name'], $item['description']);
                }
            }
        }
        return $this->feePayOptions;
    }


}
