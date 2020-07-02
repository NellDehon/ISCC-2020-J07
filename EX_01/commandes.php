<!DOCTYPE html>
<html>
 <head>
</head>
<?php
$historique_commandes = array(5.49,9.99,5.49,15.99,25);
function afficher_commandes($historique_commandes) {
 foreach($historique_commandes as $valeurs) { 
 echo "Une commande de $valeurs euros à été reçus.".'<br/>';
 }
}
 echo "Le total des commandes est de " . array_sum($historique_commandes) . '<br/>' ; 
 
 
 
 
 afficher_commandes($historique_commandes) 
 
 
?>
