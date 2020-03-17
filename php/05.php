<?php
$weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0, 2)];

switch ($opponentWeapon) {
    case 'fists':
        $indyWeapon = "gun";
        echo "Indiana's opponent has choosen his <strong>$opponentWeapon
        </strong>!</br>";
        echo "Indiana Jones decides then to counter him with his <strong>
        $indyWeapon</strong>!";
        break;
    case 'whip' :
        $indyWeapon = "fists";
        echo "Indiana's opponent has choosen his <strong>$opponentWeapon
        </strong>!</br>";
        echo "Indiana Jones decides then to counter him with his <strong>
        $indyWeapon</strong>!";
        break;
    case 'gun' :
        $indyWeapon = "whip";
        echo "Indiana's opponent has choosen his <strong>$opponentWeapon
        </strong>!</br>";
        echo "Indiana Jones decides then to counter him with his <strong>
        $indyWeapon</strong>!";
        break;
}
