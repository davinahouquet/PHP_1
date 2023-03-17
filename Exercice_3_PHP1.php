<h1>Exercice 3</h1>
<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot
    « aujourd’hui » par le mot « demain ».<br>
    Afficher l’ancienne et la nouvelle phrase.</p>

<h2>Résultat</h2>

<?php

$my_str1 =  "Notre formation DL commence aujourd'hui";

$str_tomorrow = str_replace("aujourd'hui", "demain", $my_str1);
echo "L'ancienne phrase «" . $my_str1 . "» sera remplacée par «" . $str_tomorrow . "» à présent.";

?>