<?php

// On définit nos variables contenant nos messages codés.
$message1 = (string) "0@sn9sirppa@#?ia'jgtvryko1";
$message2 = (string) "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
$message3 = (string) "aopi?sgnirts@#?sedhtg+p9l!";

/*  Pour chaque variable, on utilise la fonction strlen($foo) afin d'obtenir
    la longueur de la chaine. Le résultat obtenu doit donc etre un entier
    (integer), que l'on divisera par 2.
*/
$chiffreCle1 = (int) strlen($message1) / 2;
$chiffreCle2 = (int) strlen($message2) / 2;
$chiffreCle3 = (int) strlen($message3) / 2;

/*  On récupère ensuite la sous-chaîne de longueur $chiffreCleN en
    commençant à partir du 6ème caractère.
*/
$sousChaine1 = (string) substr($message1, 5, $chiffreCle1);
$sousChaine2 = (string) substr($message2, 5, $chiffreCle2);
$sousChaine3 = (string) substr($message3, 5, $chiffreCle3);

//  On remplace les chaînes '@#?' par un espace
$sousChaine1 = (string) str_replace("@#?", " ", $sousChaine1);
$sousChaine2 = (string) str_replace("@#?", " ", $sousChaine2);
$sousChaine3 = (string) str_replace("@#?", " ", $sousChaine3);

/*  On termine ce script en inversant la chaine de caractères de nos $sousChaineN.
    On peut directement utiliser nos variables $messageN, par souci de clarté
    du code, d'autant plus que l'on a plus besoin des valeurs d'origine.
*/
$message1 = (string) strrev($sousChaine1);
$message2 = (string) strrev($sousChaine2);
$message3 = (string) strrev($sousChaine3);

// On peut finalement passer à l'affichage de nos 3 messages enfin déchiffrés.
echo "<pre>Message 1 : " . $message1 . "</pre>";
echo "<pre>Message 2 : " . $message2 . "</pre>";
echo "<pre>Message 3 : " . $message3 . "</pre>";
