<?php
$values=[120,130,-150,-130,180];

foreach ($values as $index=> $val){
if ($val<0){
echo $index;
break;
}			}

?>