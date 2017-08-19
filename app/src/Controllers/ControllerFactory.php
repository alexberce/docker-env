<?php

namespace Invobox\Template\Controllers;


class ControllerFactory
{
    /**
     * @return ControllerInterface
     */
    public static function getInstance(){
        /**
         * Basic site controller
         */
        switch(true){
            case empty($_REQUEST):
                return new HomeController();
                break;
            default:
                return new ErrorController(404);
                break;
        }
    }
}