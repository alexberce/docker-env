<?php

namespace Invobox\Template\Controllers;


use Invobox\Template\Render\Views;

abstract class BaseController implements ControllerInterface
{
    function getHeader(){
        Views::load('views/Partials/header.php');
    }

    function getFooter(){
        Views::load('views/Partials/footer.php');
    }

    function run()
    {
        Views::load('views/Homepage/index.php');
    }
}