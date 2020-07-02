<!DOCTYPE html>
<html>
    <head>
</head>
<body>
<?php
$produits = array (
    "T-shirt rouge" => 15.50,
    "T-shirt vert" => 15.50,
    "T-shirt argent" => 16.50,
    'Short bleu' => 19.99,
    'Short vert' => 19.99,
   'veste argent' => 35);
 
function afficher_produits($produits){
    echo
    "<table>
    <tr>
        <th>produit</th>
        <th>prix</th>
    </tr>
    <tr>";
 
foreach($produits as $key => $price){
    echo 
    
   "<tr>
        <td>$key</td>
        <td>$price</td>
    </tr>
    <tr>";
}
echo "</table>";
}
afficher_produits($produits);
?>

</body>
</html>