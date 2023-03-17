<h1>Exerice 6</h1>
<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité<br>
    d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)</p>
<h2>Résultat</h2>

<?php
$article_prix = 9.99;
$quantite_article = 5;
$tva = 1.2;

$total = $article_prix * $quantite_article;
$total_final = $total * $tva;
echo "Le montant de la facture à régler est de : " . $total_final . " €";
?>