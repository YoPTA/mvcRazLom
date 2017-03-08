<?php

namespace vendor; // Теперь, чтобы подключить этот файл с классом достаточно использовать use vender;

class GoodRoom
{
    public $form = 'Квадрат';
    protected $windows = 2;

    public function getInfo()
    {
        return 'Информация о комнате';
    }
}