<?php
/*
Opdracht les 3

Definieer een variabele
Laat zien of die variabele WEL of NIET aan een bepaalde voorwaarde voldoet

Bijvoorbeeld:
*/

$mijnVar = 0.99;

// voorbeeld 1
if ( 100 === $mijnVar) {
	$res = 'WEL';
} else {
	$res = 'NIET';
}
echo '$mijnVar is ' . $res . ' gelijk aan 100<br>';

// Voorbeeld 2
if ( is_array( $mijnVar ) ) {
	echo 'Mijn variabele is een array<br>';
}

// Voorbeeld 3
if ( $mijnVar > 0.9 && $mijnVar < 1 ) {
	echo 'MijnVar zit tussen de 0.9 en 1 in<br>';
}

/*
Voorwaarden:
is $mijnVar groter dan 100?
is $mijnVar kleiner dan 5.50?
is $mijnVar een string?
is $mijnVar een nummer of een int?
zit $mijnVar tussen de 0.9 en 1 in?
wat is de waarde van mijnVar na de controles?
*/


//var_dump( $mijnVar );







