<h1>Exercice 9</h1>
<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.<br>
    Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de <br>
    plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).
</p>
<h2>Résultat</h2>


<?php

$age = 32;
$sexe = "F";
echo "Age : 32 ";
echo "Sexe : F ";
if ($age > 18 && $age <= 32) {
    echo "La personne est imposable.";
} elseif ($sexe = "H" && $age > 20) {
    echo "La personne est imposable.";
} else {
    echo "Non imposble";
};
?>