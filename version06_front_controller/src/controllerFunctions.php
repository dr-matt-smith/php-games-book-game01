<?php

define('MIN_GUESS', 1);
define('MAX_GUESS', 4);


function indexAction()
{
    // display index home page
    include __DIR__ . '/../views/home.php';
}


function processGuessAction($guess)
{
    // choose random number
    $rightAnswer = rand(MIN_GUESS, MAX_GUESS);

    // display appropriate page
    if($guess == $rightAnswer) {
        include __DIR__ . '/../views/resultWin.php';
    } else {
        include __DIR__ . '/../views/resultLose.php';
    }
}
