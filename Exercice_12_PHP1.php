<h1>Exerice 12</h1>
<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée
    (tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue
    respective</p>
<h2>Résultat</h2>

<?php

$name = [
    "Mickaël" => "FRA",
    "Virgile" => "ESP",
    "Marie-Claire" => "ENG"
];
echo "Affichage :";
echo "<br>";
ksort($name);

foreach ($name as $prenom => $lang) {
    // if ($lang == "FRA"){
    //     echo "Salut ";
    // } 
    // elseif ($lang == "ESP"){
    //     echo "Hola ";
    // } 
    // elseif ($lang == "ENG"){
    //     echo "Hello ";
    // } 


    switch ($lang) {
        case "FRA":
            echo "Salut ";
            break;
        case "ESP":
            echo "Hola ";
            break;
        case "ENG":
            echo "Hello ";
            break;
    }
    echo $prenom;
    echo "<br>";
};
?>