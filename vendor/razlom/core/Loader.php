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
            $prefix_file = '../app/';
        }
        elseif($prefix == 'razlom')
        {
            $prefix_file = '../vendor/razlom/';//.array_shift($arr).'/';
        }

        $file = $prefix_file.implode('/', $arr).'.php';

        if (is_file($file))
        {
            require_once $file;
        }
    }
}