<?php

namespace Guarantpay\modules\deal;

use Guarantpay\modules\Auth;

class PayOptions
{
    private $token;

    private $payOptions;

    private $path;

    public function __construct(Auth $auth, int $deal_id)
    {
        $this->token = $auth->auth();
        $this->path = "deal/{$deal_id}/pay/options";
    }

    public function getPayOptions()
    {
        $request = new \Guarantpay\core\Request();
        $request->setToken($this->token);
        if (empty($this->payOptions)) {
            $response = $request->sendRequest($this->path);
            if (!empty($response['data']["pay_options"])) {
                foreach ($response['data']["pay_options"] as $item) {
                    $this->payOptions[] = new \Guarantpay\models\PayOptions($item['id'], $item['name'], $item['output_name'], $item['url']);
                }
            }
        }
        return $this->payOptions;
    }


}
