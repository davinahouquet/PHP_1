<h1>Exercice 1</h1>
<p>Soit la phrase « Notre formation DL commence aujourd'hui »<br>
    Ecrire un algorithme permettant de compter le nombre de caractères contenus dans cette phrase
    (espaces inclus).</p>

<h2>Résultat</h2>

<?php

$my_str1 = "Notre formation DL commence aujourd'hui";
$numberOfChars =  strlen($my_str1);
echo "La phrase «" . $my_str1 . " contient " . $numberOfChars . "» caractères.";

?>