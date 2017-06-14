<?php
//----------- includes -----------------

require_once __DIR__.'/../vendor/autoload.php';

//----------- create 'app' object ---------
use Mattsmithdev\WebApplication;
$app = new WebApplication();
$app->run();
