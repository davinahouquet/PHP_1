<h1>Exerice 11</h1>
<p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce
    tableau<br> et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé
    d’afficher le nombre<br> de marques de voitures présentes dans le tableau.</p>
<h2>Résultat</h2>

<?php
echo "Il y a 4 marques de voiture dans le tableau : ";
echo "<br>";

$cars = [
    "Peugeot",
    "Renault",
    "BMW",
    "Mercedes",
];

foreach ($cars as $cars) {
    echo $cars;
    echo "<br>";
}
?>