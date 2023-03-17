<h1>Exercice 8</h1>
<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la
    forme :<br>
</p>
<h2>Résultat</h2>

<?php

$chiffreTable = 8;

for ($i = 2; $i <= 10; $i++) {
    echo $i . " x " . $chiffreTable . " = " . ($i * $chiffreTable) . "<br>";
}
?>