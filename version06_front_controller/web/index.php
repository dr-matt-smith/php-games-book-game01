<?php
// (0) read in our functions
require_once __DIR__ . '/../src/controllerFunctions.php';

// (1) find user action from request
$action = filter_input(INPUT_GET, 'action');

// (2) run logic based on user action
switch($action){
    case 'processGuess':
        // get guess data from request
        $guess = filter_input(INPUT_GET, 'guess');
        processGuessAction($guess);
        break;

    case 'index':
    default:
        indexAction();
}

