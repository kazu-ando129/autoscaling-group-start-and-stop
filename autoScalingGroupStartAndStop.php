<?php
require 'vendor/autoload.php';

use Aws\AutoScaling\AutoScalingClient;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

if (!isset($argv[1])) {
    return;
}

$mode = $argv[1];

$value = null;
if ($mode === 'up') {
    $value = 1;
}
if ($mode === 'down') {
    $value = 0;
}

if (is_null($value)) {
    return 1;
}

$client = AutoScalingClient::factory(array(
    'profile' => getenv('PROFILE'),
    'region'  => 'ap-northeast-1',
    'version' => 'latest'
));

$result = $client->updateAutoScalingGroup(array(
    'AutoScalingGroupName' => getenv('AUTO_SCALING_GROUP_NAME'),
    'MinSize' => $value,
    'MaxSize' => $value,
    'DesiredCapacity' => $value,
    'DefaultCooldown' => 360
));
