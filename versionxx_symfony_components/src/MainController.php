<?php
namespace Mattsmithdev;


use Symfony\Component\HttpFoundation\Request;

class MainController
{
    const MIN_GUESS = 1;
    const MAX_GUESS = 4;

    private $request;
    private $rightAnswer;

    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->rightAnswer = rand(MainController::MIN_GUESS, MainController::MAX_GUESS);
    }

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
        $defaultGuess = 1;
        $guess = $this->request->query->get('guess', $defaultGuess);

        // display appropriate page
        if($guess == $this->rightAnswer) {
            include __DIR__ . '/../views/resultWin.php';
        } else {
            include __DIR__ . '/../views/resultLose.php';
        }
    }
}
