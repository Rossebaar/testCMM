<?php
/*
Opdracht les 3

Definieer een variabele
Laat zien of die variabele WEL of NIET aan een bepaalde voorwaarde voldoet

Ik wil de volgende vergelijken testen
- is het een integer
- is de waarde leeg
- bestaat de variabele
- is $myVar groter dan 100?
- is $myVar kleiner dan 5.50?
- is $myVar een string?
- is $myVar een nummer of een int?
- zit $myVar tussen de 0.9 en 1 in?
- wat is de waarde van mijnVar na de controles?
- is $myVar een nummer en leeg of is het een string en leeg of is het een bolean met de waarde true?
*/

$myVar = 100;

if ( ! isset($myVar) ) {
	die();
}


if ( is_int($myVar) ) {
	echo "yes its a integer : $myVar<br>";
} 
$myVar = '';
if ('' == $myVar) {
	echo "yes its a string : $myVar<br>";
}
$myVar = 102;
if (100 < $myVar) {
	echo "yes its bigger then 100: $myVar <br>";
}
$myVar = 5.6;
if (5.5 < $myVar) {
	echo "yes it's smaller then 5.5 : $myVar<br>";
}
$myVar = 'kippen lopen';
if ( is_string($myVar)) {
	echo "yes its a string : $myVar <br>";
}	
$myVar = 0.93;
if ( is_numeric($myVar) || is_int($myVar)) {
	echo "yes its a num or a int : $myVar<br>";
}	
$myVar = 0.93;
if ( 0.9 > $myVar && 1 > $myVar) {
	echo "yes its between 0.9 and 1 : $myVar<br>";
}	
$myVar = 0.93;
if ( (0.9 < $myVar) && (1 > $myVar)) {
	echo $myVar . '<br>';
}