<?php
namespace Mattsmithdev;


class MainController
{
    const MIN_GUESS = 1;
    const MAX_GUESS = 4;

    public function indexAction()
    {
        // set PHP variables used in template
        $max = MainController::MAX_GUESS;

        // display index home page
        include __DIR__ . '/../views/index.php';
    }

    public function processGuessAction()
    {
        // get guess data from request
        $guess = filter_input(INPUT_GET, 'guess');
        $rightAnswer = rand(MainController::MIN_GUESS, MainController::MAX_GUESS);

        // display appropriate page
        if($guess == $rightAnswer) {
            include __DIR__ . '/../views/resultWin.php';
        } else {
            include __DIR__ . '/../views/resultLose.php';
        }
    }
}
