<?php
require_once 'autoload.php';

$auth = new \Guarantpay\modules\Auth('user_5fabb0eedc7e77.10207965','Clofsj');
$dealTypes= new \Guarantpay\modules\deal\FeePayOptions($auth);
 var_dump($dealTypes->getFeePayOptions());


