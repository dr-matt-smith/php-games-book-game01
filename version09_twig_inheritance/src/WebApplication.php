<?php

namespace Mattsmithdev;

use Twig_Environment;
use Twig_Loader_Filesystem;

class WebApplication
{
    const PATH_TO_TEMPLATES = __DIR__ . '/../views';
    private $mainController;

    public function __construct()
    {
        //-------- setup Twig --------
        $twig = new Twig_Environment(new Twig_Loader_Filesystem(WebApplication::PATH_TO_TEMPLATES));
        $this->mainController = new MainController($twig);
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
