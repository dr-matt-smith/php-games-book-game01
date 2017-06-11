<?php

namespace Mattsmithdev;


use Symfony\Component\HttpFoundation\Request;

class WebApplication
{
    private $mainController;
    private $request;

    public function __construct()
    {
        $this->request = Request::createFromGlobals();
        $this->mainController = new MainController($this->request);
    }

    public function run()
    {
        $defaultAction = 'index';

        /*
         *
         * attempt to use pathInfo ...
        // e.g. /processGuess?guess=8
        $pathInfo = $this->request->getPathInfo();
        $pathComponents = explode($pathInfo, '?', 2);

        // action is first component
        $action = $pathComponents[0];


        die('action = [' . $action . ']');

        print('path info = [' . $action . ']');
        print '<hr>';
*/

        $action = $this->request->query->get('action', $defaultAction);
        switch($action){
            case 'processGuess':
                $this->mainController->processGuessAction($this->request);
                break;

            case 'index':
            default:
                $this->mainController->indexAction();
        }

    }
}
