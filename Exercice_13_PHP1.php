<h1>Exerice 13</h1>
<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de
    coefficient).<br> Elle devra être affichée avec 2 décimales.
</p>
<h2>Résultat</h2>

<?php

$notes = [
    10,
    12,
    8,
    19,
    3,
    16,
    11,
    13,
    9
];

$sum = array_sum($notes);
$moyenne = $sum / count($notes);

echo "Les notes obtenues par l’élève sont : 10 12 8 19 3 16 11 13 9";
echo "<br>";
echo "Sa moyenne générale est donc de :" . round($moyenne, 2);

?>