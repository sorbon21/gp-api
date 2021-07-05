<?php

namespace Guarantpay\modules;

use Guarantpay\core\Request;

class Auth
{
    /**
     * @var
     */
    public $login;
    /**
     * @var
     */
    public $password;
    /**
     * @var
     */
    private $token;
    /**
     * @var string
     */
    private $path;


    /**
     * Auth constructor.
     * @param $login
     * @param $password
     */
    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
        $this->path = 'auth';
    }

    /**
     * @return mixed
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param string $token
     */
    public function setToken(string $token)
    {
        $this->token = $token;
    }

    /**
     * @return mixed
     * @throws \Exception
     */
    public function auth()
    {
        if (empty($this->getToken())){
            $request = new Request();
            $response = $request->sendRequest($this->path, ['login' => $this->login, 'password' => $this->password]);
            $this->setToken($response['data']['token']);
        }
        return $this->getToken();
    }


}