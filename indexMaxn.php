<?php
$prices=[120,130,150,130,180];
$max =0;
$maxindex=-1;
foreach ($prices as $index =>$price){
if ($max < $price){
$max =$price;
$maxindex=$index;
}			}
echo $maxindex ;
?>