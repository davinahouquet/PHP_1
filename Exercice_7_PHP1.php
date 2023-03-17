<h1>Exerice 7</h1>
<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :<br>
    Poussin : entre 6 et 7 ans<br>
    Pupille : entre 8 et 9 ans<br>
    Minime : entre 10 et 11 ans<br>
    Cadet : à partir de 12 ans<br>
    Si la catégorie n’est pas gérée, merci de le préciser.</p>
<h2>Résultat</h2>

<?php
$age = 10;
if (6 > $age && $age <= 7) {
    echo "L'enfant qui a  " . $age . " ans appartient à la catégorie «Poussin».";
} elseif (8 > $age && $age <= 9) {
    echo "L'enfant qui a  " . $age . " ans appartient à la catégorie «Pupille».";
} elseif (10 >= $age && $age < 11) {
    echo "L'enfant qui a  " . $age . " ans appartient à la catégorie «Minime».";
} elseif ($age > 12) {
    echo "L'enfant qui a  " . $age . " ans appartient à la catégorie «Cadet».";
};

?>