<?php
// (0) read in our functions
require_once __DIR__ . '/../src/functions.php';

// (1) find user action from request
$action = filter_input(INPUT_GET, 'action');

// (2) run logic based on user action
switch($action){
    case 'processGuess':
        processGuessAction();
        break;

    case 'index':
    default:
        homeAction();
}

