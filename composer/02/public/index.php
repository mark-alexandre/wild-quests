<?php
require '../vendor/autoload.php';
use App\Wcs\Hello;
use HelloWorld\SayHello;

// Quest #1
$var = new Hello();
echo $var->talk('') . '<br>'; //With an empty string
echo $var->talk('Hello World !') . '<br>'; //With a proper string

// Quest #2
$foo = new SayHello;
echo $foo::world();