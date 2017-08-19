<?php

namespace Invobox\Template\Controllers;


use Invobox\Template\Render\Views;

class HomeController extends BaseController implements ControllerInterface
{
    public function run(){
        Views::load('views/Homepage/index.php');
    }
}