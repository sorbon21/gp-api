<?php

namespace Guarantpay\core;

class Request
{
    /**
     * @var string
     */

    private $host = 'http://guarant.local/api/v2';

    private $header;

    private $token;

    /**
     * @return mixed
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param mixed $token
     */
    public function setToken($token)
    {
        $this->token = $token;
        $this->header[] = 'token: ' . $token;
    }

    public function __construct()
    {
        $this->header[] = "Content-type: multipart/form-data";
    }

    public function headerPush($key, $value)
    {
        array_push($this->header, [sprintf("$key: %s", $value)]);
    }


    /**
     * @param string $value
     *
     * @return Request
     */
    public function setHost($value)
    {
        $this->host = $value;

        return $this;
    }

    private function build_post_fields( $data,$existingKeys='',&$returnArray=[]){
        if(!(is_array($data) or is_object($data))){
            $returnArray[$existingKeys]=$data;
            return $returnArray;
        }
        else{
            foreach ($data as $key => $item) {
                $this->build_post_fields($item,$existingKeys?$existingKeys."[$key]":$key,$returnArray);
            }
            return $returnArray;
        }
    }

    /**
     * @param string $path
     * @param mixed $data
     *
     * @return mixed
     * @throws \Exception
     */
    public function sendRequest($path, $data = null)
    {
        $url = sprintf('%s/%s', $this->host, $path);
        $method = $data !== null ? 'POST' : 'GET';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        if (!empty($this->getToken())) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $this->header);
        }
        if (in_array($method, array('POST', 'PUT'))) {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $this->build_post_fields($data));
        }
        $response = curl_exec($ch);
        if ($response === false) {
            throw new \Exception(curl_error($ch));
        }
        curl_close($ch);
        return json_decode($response, true);
    }

}