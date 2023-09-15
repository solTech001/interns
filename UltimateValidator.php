<?php
require_once __DIR__ . '/vendor/autoload.php';
use \UltimateValidator\UltimateValidator;

$form = new UltimateValidator();
$data = [
    'user' => 'F. Pete', 
    'marital' => 'Single',
];

$form = new UltimateValidator\UltimateValidator($data);

$form = form();


?>