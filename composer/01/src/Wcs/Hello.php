<?php
namespace App\Wcs;

class Hello
{
    final public function talk(string $string) : string
    {
        return (isset($string) && !empty($string)) ? $string : 'Wrong parameter inserted in talk() method!';
    }
}
