<?php

define('MIN_GUESS', 1);
define('MAX_GUESS', 4);

function processGuessAction()
{
    // choose random number
    $rightAnswer = rand(MIN_GUESS, MAX_GUESS);

    // get guess data from request
    $guess = filter_input(INPUT_GET, 'guess');

    // display appropriate page
    if($guess == $rightAnswer) {
        include __DIR__ . '/../views/resultSuccess.php';
    } else {
        include __DIR__ . '/../views/resultFailure.php';
    }
}

function indexAction()
{
    // display index home page
    include __DIR__ . '/../views/index.php';
}

