<!DOCTYPE html>
<html>
<body>
 
<?php
class date1
{
 function DateTime()
 {
 echo "02/07/2020";
 }
}
 
$bar = new date1;
$bar->DateTime();
?>
<p>
<?php
$maintenant = new DateTime();
echo 'Cette page a été générée le'. $maintenant->format('d/m/Y à H:i:s').' (heure locale)';
?>
</p>
<?php
class date2
{
 function DateTime()
 {
 echo "22/06/2020";
 }
 }
 
 $bar = new date2;
 $bar->DateTime();
 ?>
</body>
</html>