<!DOCTYPE html>
<html>
<?php
    $panier = array(
        array("Teeshirt rouge",15.50,5),array("Teeshirt vert",15.50,6),array("Teeshirt argent",15.50,8),array("Short bleu",16.50,5),array("Short vert",19.99,5),array("Veste argent",19.99,10),array("Veste argent",35,3)
    );

function afficher_panier($panier){

foreach($panier as $valeurs){
    echo "<ul>";
    foreach($valeurs as $valeurs2){
        echo "<li>". $valeurs2."</li>";
    }
    echo "</ul>";
}
}
afficher_panier($panier);
?>
<?php
function calculer_total_panier($panier){
    $total=0;
    foreach ($panier as $valeurs){
        $total += $valeurs[1]*$valeurs[2];
        }
return $total;
    }
    ?>
    <p>
        <?php
        $prixtotal = calculer_total_panier($panier);
        echo $prixtotal;
?>
</p>
</html>