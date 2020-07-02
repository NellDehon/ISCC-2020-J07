<!DOCTYPE html>
<html>
<body>
 
<?php

$date1 = new Datetime();

?>
<p>
<?php
echo $date1->format('Y/m/d à H:i:s');
?>
</p>
<?php

 $date2 = new DateTime();
 $date2->setDate(2020,06,22);
 $date2->setTime(9,00,00);

 ?>
 <?php
 $interval = $date1->diff($date2);
 echo $interval->format("%djours");
 ?>
 <p>
     <?php
$interval=$date1->diff($date2);
echo $interval->format("%d jours %h heures %i minutes")
?>
</p>
</body>
</html>