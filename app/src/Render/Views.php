<?php

namespace Invobox\Template\Render;


class Views
{
    /**
     * @param string $filePath
     * @param array $args
     * @param bool $echoOutput
     * @return string
     * @throws \InvalidArgumentException
     */
    public static function load(string $filePath, array $args = [], bool $echoOutput = true)
    {
        ob_start();

        foreach($args as $variableName => $variableValue)
            $$variableName = $variableValue;

        $filePath = $_SERVER['DOCUMENT_ROOT'] . '/' . ltrim($filePath, '/');

        if(is_file($filePath)){
            include $filePath;
        }
        else
            throw new \InvalidArgumentException('Invalid file path');

        $content = ob_get_clean();

        if($echoOutput)
            echo $content;

        return $content;
    }
}