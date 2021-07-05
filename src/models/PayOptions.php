<?php

namespace Guarantpay\models;
/**
 * Class PayOptions
 */
class PayOptions
{
    /**
     * @var
     */
    private $id;
    /**
     * @var
     */
    private $name;

    /**
     * @var
     */
    private $outputName;

    /**
     * @var
     */
    private $url;


    /**
     * PayOptions constructor.
     * @param $id
     * @param $name
     * @param $outputName
     * @param $url
     */
    public function __construct($id, $name, $outputName, $url)
    {
        $this->id = $id;
        $this->name = $name;
        $this->outputName = $outputName;
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getOutputName()
    {
        return $this->outputName;
    }

    /**
     * @param $outputName
     */
    public function setOutputName($outputName)
    {
        $this->outputName = $outputName;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }



}