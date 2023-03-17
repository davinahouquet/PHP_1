<h1>Exercice 2</h1>
<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots
    contenus dans celle-ci.</p>
<h2>Résultat</h2>

<?php

$my_str1 = "Notre formation DL commence aujourd'hui";
$numberOfWords = str_word_count($my_str1);
echo "La phrase «" . $my_str1 . " contient " . $numberOfWords . "» mots.";
?>
