<h1>Exerice 4</h1>
<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>
<h2>Résultat</h2>

<?php

$sentence = "Engage le jeu que je le gagne";
$sentenceLowerCaseNoSpace =  str_replace(" ", "", strtolower($sentence)); // str replace whitespace
$inverse = strrev($sentenceLowerCaseNoSpace);

if ($sentenceLowerCaseNoSpace  === $inverse) {
    echo "«" . $sentence .  "» est palindrome.";
} else {
    echo "La phrase «" . $sentence . "» n'est pas palindrome.";
};
?>