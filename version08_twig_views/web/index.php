<?php
//----------- 1. require the autoloader -----------------
require_once __DIR__.'/../vendor/autoload.php';

//----------- 2. start session -----------------
session_start();

//----------- 3. create top-level application object ---------
use Mattsmithdev\WebApplication;
$app = new WebApplication();

//----------- 4. invoke the application object's run() method ---------
$app->run();
