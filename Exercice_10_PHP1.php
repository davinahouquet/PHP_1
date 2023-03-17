<h1>Exercice 10</h1>
<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui
    affiche <br>à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et
    1 €.</p>
<h2>Résultat</h2>

<?php

echo "Montant à payer : 152 €
Montant versé : 200 €";
$amount_to_pay = 152;
$amount_paid = 200;
$rest = $amount_paid - $amount_to_pay;
echo "Reste à payer :" . $rest . "€";

$nbrBillets10 = intdiv($rest, 10); // le nombre de 10 apparaissant dans le reste
$rest = $rest % 10;

echo "test" . $nbrBillets10;

$nbrBillet5 = $rest / 5; // combien de billet de 5 dans 8
$rest = $rest % 5;

$nbrPieces2 = $rest / 2;
$rest = $rest % 2;

$nbrPieces1 = $rest / 1;
$rest = $rest % 1;

echo "" . $nbrBillets10 . " billets de 10 €" . $nbrBillet5 . " billet de 5 €" . $nbrPieces2 . "pièce de 2 €" . $nbrPieces1 . "pièce de 1 €";
?>