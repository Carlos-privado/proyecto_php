<?php 
echo "<h2>Crear un script que imprima los número impares del uno al veinte y del cincuenta al cien.</h2>";
$i = 1;     
$n = 20;  
$impares = 1; 
echo "Numeros impares del uno al veinte";
while ( $i <= $n){
	echo "$impares <br />";
	$i = $i + 2;
    $impares = $impares + 2;
}
echo "<hr> Numeros impares del cincuenta al cien";
$ii = 50;     
$n = 100;  
$impares = 49; 
while ( $ii <= $n){
	echo "$impares <br />";
	$ii = $ii + 2;
    $impares = $impares + 2;

}
?>