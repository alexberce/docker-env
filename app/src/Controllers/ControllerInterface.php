<?php

namespace Invobox\Template\Controllers;


interface ControllerInterface
{
    function getHeader();

    function getFooter();

    function run();
}