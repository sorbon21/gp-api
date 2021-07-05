<?php
require_once 'autoload.php';
$auth = new \Guarantpay\modules\Auth('user_5fabb0eedc7e77.10207965', 'Clofsj');
$dealTypes = new \Guarantpay\modules\deal\PayOptions($auth, 1870);

var_dump($dealTypes->getPayOptions());