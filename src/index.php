<?php
require_once __DIR__ . '/../vendor/autoload.php';
use dima\simplecalc\Hello;

$instance = new Hello();

echo $instance->say("Hello Calc");