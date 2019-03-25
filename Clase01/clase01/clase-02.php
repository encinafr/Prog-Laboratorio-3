<?php
 function Potencia($num){
     return pow($num,4);
 }

 $num = 2;
 echo("La potencia  ala 4 del numero $num es:".Potencia($num)."</br>");




 $array = array('H','O','L','A');
 echo "Array sin invertir: ";
 foreach ($array as $key => $value) {
     echo $value;
 }
 echo "<br/>Array invertido: ";
 foreach (invertirArray($array) as $key => $value) {
     echo $value;
 }
 function invertirArray($array){
     $arrayTemporal = array_reverse($array);
     return $arrayTemporal;
 }
 

?>