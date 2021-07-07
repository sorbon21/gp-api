<?php
require_once 'autoload.php';
$auth = new \Guarantpay\modules\Auth('user_5d81ee0f6da0d8.59342429', 'luna20191Q');
$counterAgent = new \Guarantpay\models\counteragent\request\CreateCounterAgent();
$counterAgent->setTypeAgent('natural_person');
$counterAgent->setEmail('clofsj2@gmail.com');
$counterAgent->setPhone('+79836205177');
$counterAgent->setAgentData([
    'first_name' => 'Иван',
    'last_name' => 'Иванович',
    'secondary_name' => 'Иванов',
    'birth_date' => '1993-02-01'
]);
//5517
//3940

$deal = new \Guarantpay\models\deal\request\CreateDeal();
$deal->setName('test1');
$deal->setAmount(200);
$deal->setAddonTerms('nwwewewe');
$deal->setDealRole('contractor');
$deal->setDealType(1);
$deal->setDeliveryPeriod(22);
$deal->setFeePayerOption(1);
$deal->setFeePayerOption(1);
$agentList = new \Guarantpay\modules\deal\AgentList($auth);
echo '<pre>';

echo '</pre>';

$agentList = new \Guarantpay\modules\deal\CounterAgentList($auth);



$deal->setAgent(['agent_id' => 101, 'payment_method_id' => 76]);
$deal->setCounterAgent(['email' => 'clofsj2@gmail.com', 'phone' => '+79003353599', 'counteragent_id' => '3931']);


//
$deal = new \Guarantpay\modules\deal\CreateDeal($auth, $deal);
//
$delConfirm =  new \Guarantpay\modules\deal\ConfirmConditionsDeal($auth,1882);
var_dump($delConfirm->doConfirm());
