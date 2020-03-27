<?php

echo "Merci " . $_POST['surname'] . " " . $_POST['name'] . "de nous avoir contacté à propos de " . '"' . $_POST['subject'] .
'".</br>Un de nos conseillers vous contactera soit à l’adresse ' . $_POST['email'] . " ou par téléphone au " . $_POST['phone']
. " dans les plus brefs délais pour traiter votre demande : </br>" . $_POST['msg'];