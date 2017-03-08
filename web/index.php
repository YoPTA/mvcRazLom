<?php

use app\Room;
use vendor\GoodRoom;

require '../app/classes/Loader.php';

$loader = new Loader();

spl_autoload_register([$loader, 'loadClass']);

$myRoom = new Room();
echo $myRoom->form . '<br>';
echo $myRoom->getWindows() . '<br>';
