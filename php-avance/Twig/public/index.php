<?php

require '../vendor/autoload.php';

// Routing
$pageName = 'Home';
if (isset($_GET['page'])) {
    $pageName = $_GET['page'];
}

// Template's render
$loader = new Twig\Loader\FilesystemLoader('../src/View');
$twig = new Twig\Environment($loader);

$products = [
    'Blague #1' => 'C\'est l\'histoire de Why. Why est bûcheron, car depuis tout petit, Why aime scier.',
    'Blague #2' => 'Comment appel-t-on un nain distribuant le courrier ? Un truand ! Car c\'est un nain posteur.',
    'Blague #3' => 'C\'est l\'histoire d\'un dealer qui se fait chopper par les flics. C\'est alors dans la panique qu\'il s\'écrit "shit ! shit ! shit !',
    'Blague #4' => 'Quel est le seul animal qui nourrit lui-même sa voiture ? La chèvre car elle nourrit son cabri au lait !',
    'Blague #5' => 'Quelle est la devise des chats diaboliques? Satan est par minou.',
];

switch ($pageName) {
    case 'Contact':
        echo $twig->render('contact.html.twig');
        break;
    case '404' :
        echo $twig->render('404.html.twig');
        break;
    default :
        echo $twig->render('index.html.twig', [
            'getPage' => $_GET['page'],
            'products' => $products,
            ]);
}

