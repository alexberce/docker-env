<?php

namespace Invobox\Template\Controllers;


use Invobox\Template\Render\Views;

class ErrorController extends BaseController implements ControllerInterface
{
    /**
     * @var int
     */
    private $errorType;

    /**
     * ErrorController constructor.
     * @param int $errorType
     */
    public function __construct(int $errorType)
    {
        $this->errorType = $errorType;
    }

    public function run()
    {
        switch($this->errorType){
            case 500:
                $this->display500();
                break;
            case 404:
            default:
                $this->display404();
                break;
        }
    }
    
    function display404(){
        Views::load('views/Error/404.php');
    }

    function display500(){
        Views::load('views/Error/500.php');
    }
}