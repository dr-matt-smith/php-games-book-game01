<?php
namespace Mattsmithdev;


use Twig_Environment;

class MainController
{
    const MIN_GUESS = 1;
    const MAX_GUESS = 4;

    private $twig;

    public function __construct(Twig_Environment $twig)
    {
        $this->twig = $twig;
    }

    public function indexAction()
    {
        // set PHP variables used in template
        $max = MainController::MAX_GUESS;

        // output index home page
        $template = 'index.html.twig';
        $argsArray = [
            'max' => MainController::MAX_GUESS
        ];
        $html =  $this->twig->render($template, $argsArray);
        print $html;
    }

    public function processGuessAction()
    {
        // get guess data from request
        $guess = filter_input(INPUT_GET, 'guess');
        $rightAnswer = rand(MainController::MIN_GUESS, MainController::MAX_GUESS);

        // decide which view template is appropriate
        if($guess == $rightAnswer) {
            $template = 'resultWin.html.twig';
        } else {
            $template = 'resultLose.html.twig';
        }

        // build values to send to Twig
        $argsArray = [
            'guess' => $guess,
            'rightAnswer' => $rightAnswer
        ];

        // output result template
        $html =  $this->twig->render($template, $argsArray);
        print $html;

    }
}
