<h1>Exerice 14</h1>
<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).
</p>
<h2>Résultat</h2>

<?php

$dateNaissance = date_create("1985-01-17");
$aujourdhui = date_create("2018-05-21");
$diff = date_diff($dateNaissance, $aujourdhui);


echo "Affichage (si la date courante est le 21/05/2018 et la date de naissance le
17/01/1985 :";
echo "<br>";
echo "Age de la personne :" . $diff->format('%y') . " ans ";
echo $diff->format('%m') . " mois ";
echo $diff->format('%d') . " jours";
?>