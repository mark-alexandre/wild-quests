<?php
require '../vendor/autoload.php';
use App\Wcs\Hello;

$var = new Hello();
echo $var->talk('') . '<br>'; //With an empty string
echo $var->talk('Hello World !') . '<br>'; //With a proper string