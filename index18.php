
<?php
$prices=[120,130,150,130,180];
$sum =0;
$avg=0;
foreach ($prices as $price){
$sum+=$price;}
		
			$avg= $sum/count($prices);
			echo $avg;
?>