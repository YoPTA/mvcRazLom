<?php

class Loader
{
    /*
     * app\Room
     */
    public function loadClass($class)
    {
        $arr = explode('\\', $class);
        $prefix = array_shift($arr);

        $file = '';
        $prefix_file = '';
        if ($prefix == 'app')
        {
            $prefix_file = '../app/classes/';
        }
        elseif ($prefix == 'vendor')
        {
            $prefix_file = '../vendor/module/';
        }

        $file = $prefix_file.array_shift($arr).'.php';

        if (is_file($file))
        {
            require_once $file;
        }
    }
}