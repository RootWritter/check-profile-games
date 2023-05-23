<?php
require 'vendor/autoload.php';

use RootWritter\Init;

$check = new Init();

/**
 * Check ML
 */
$data = $check->initCheck('MOBILE_LEGENDS', [
    'userId' => '1131281222',
    'zoneId' => '13566',
]);
echo $data;
