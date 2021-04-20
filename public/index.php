<?php

require '../vendor/autoload.php';

$api = (new \Tiltshift\AlgoritmeRegister\Api())->get();

$api->run();
