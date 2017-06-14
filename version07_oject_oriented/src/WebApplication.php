<?php

namespace Mattsmithdev;

class WebApplication
{
    private $mainController;

    public function __construct()
    {
        $this->mainController = new MainController();
    }

    public function run()
    {
        $action = filter_input(INPUT_GET, 'action');

        switch($action){
            case 'processGuess':
                $this->mainController->processGuessAction();
                break;

            case 'index':
            default:
                $this->mainController->indexAction();
        }

    }
}
