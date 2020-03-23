<?php

function writeSecretSentence(string $param1, string $param2) : string
{
    return $result = nl2br("$param1 s'incline face à $param2.\n");
}

echo writeSecretSentence("Indy", "Sauron");
echo writeSecretSentence("Gilles", "Indy");
