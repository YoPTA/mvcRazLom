<?php

namespace app; // Теперь, чтобы подключить этот файл с классом достаточно использовать use app;
use vendor\GoodRoom;

class Room extends GoodRoom
{
    public $color = 'Красная';

    public function getWindows()
    {
        return $this->windows;
    }
}