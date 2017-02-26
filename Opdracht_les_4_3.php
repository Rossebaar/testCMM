<?php
// laat alle errors zien:
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);


$itemsArray = array();
$itemsArray['appel'] 	= array( "aantal_items" => 12,
								"naam" 			=> "appel",
								"type" 			=> "fruit",
								"stuk_prijs" 	=> 0.10,
								"kleur" 		=> "groen" );
$itemsArray['peer'] 		= array( "aantal_items" => 32,
								"naam" 			=> "peer",
								"type" 			=> "fruit",
								"stuk_prijs" 	=> 0.12,
								"kleur" 		=> "groen" );
$itemsArray['aardbei']	= array( "aantal_items" => 92,
								"naam" 			=> "aardbei",
								"type" 			=> "fruit",
								"stuk_prijs" 	=> 0.06,
								"kleur" 		=> "rood" );
$itemsArray[]			= array( "aantal_items" => 32,
								"naam" 			=> "banaan",
								"type" 			=> "fruit",
								"stuk_prijs" 	=> 0.13,
								"kleur" 		=> "geel" );
$itemsArray['sla']		= array( "aantal_items" => 10,
								"naam" 			=> "rucola",
								"type" 			=> "groente",
								"stuk_prijs" 	=> 0.30,
								"kleur" 		=> "groen" );
$itemsArray['mandarijn']		= array( "aantal_items" => 15,
								"naam" 			=> "mandarijn",
								"type" 			=> "fruit",
								"stuk_prijs" 	=> 0.20,
								"kleur" 		=> "oranje" );


								echo var_dump($itemsArray);
								echo '<hr>';
								// mandarijn wordt sinaasappel
$itemsArray['mandarijn']['naam'] = 'sinaasappel';
if(isset($itemsArray['mandarijn'])) {
	$itemsArray['sinaasappel'] = $itemsArray['mandarijn'];
	unset($itemsArray[mandarijn]);
}

print_r($itemsArray);

$totaal = 0;
$num = 1;
$kleur = '#aaa;';   // kleur tabelrijen
$uitvoer  = "<h3>Alleen het fruit tonen</h3>\n";
// tabelhoofd
$uitvoer .= '<table style="font-family:sans-serif; background: #aaa;" cellspacing=0 cellpadding=12>'."\n";
$uitvoer .= "<tr>
	<th>groente/fruit</th>
	<th>kleur</th>
	<th>stukprijs</th>
	<th>aantal</th>
	<th>subtotaal</th>
</tr>";


foreach ($itemsArray as $item) {
	// groente overslaan zodat alleen fruit wordt getoond
	if($item['type'] != 'fruit') {
		continue;
	}
	$num++;
	($num % 2 == 0) ? $kleur = '#eee' : $kleur = '#aaa;';
	$subtotaal = $item['aantal_items']* $item['stuk_prijs'];
	$totaal += $subtotaal;
	// voor de weergave subtotaal omzetten naar Nederalndse weergave
	// hierna wordt er niet meer mee 'gerekend'
	$subtotaal = number_format($subtotaal, 2 , ",", "." );
	// uitvoer maken
	$uitvoer .= "<tr style=\"background:" . $kleur 										. " \">\n";
	$uitvoer .=  " <td>$item[naam]	</td>\n";
	$uitvoer .=  ' <td>' . $item['kleur'] 															. "</td>\n";
	$uitvoer .=  ' <td>' . '&euro; ' . number_format(  $item['stuk_prijs'] , 2 , ",", "." ) . "</td>\n";
	$uitvoer .=  ' <td>' . $item['aantal_items'] 											. "</td>\n";
	$uitvoer .= " <td style=\"text-align:right;\">&euro; $subtotaal </td>\n";
	$uitvoer .=  "</tr>\n";
}
// nog een rij met totaal
$uitvoer .= "<tr> <th colspan=\"4\"> Totaal:</th><th style=\"text-align:right;\">&euro;" . number_format(  $totaal , 2 , ",", "." ) . " </th>";
$uitvoer .= "</table>\n";

echo $uitvoer;
// Opdracht dag 2
//
// $itemsArray = array();
// $itemsArray['appel'] 	= array( "aantal_items" => 12,
// 								"naam" 			=> "appel",
// 								"type" 			=> "fruit",
// 								"stuk_prijs" 	=> 0.10,
// 								"kleur" 		=> "groen" );
// $itemsArray[''] 		= array( "aantal_items" => 32,
// 								"naam" 			=> "peer",
// 								"type" 			=> "fruit",
// 								"stuk_prijs" 	=> 0.12,
// 								"kleur" 		=> "groen" );
// $itemsArray['aardbei']	= array( "aantal_items" => 92,
// 								"naam" 			=> "aardbei",
// 								"type" 			=> "fruit",
// 								"stuk_prijs" 	=> 0.06,
// 								"kleur" 		=> "rood" );
// $itemsArray[]			= array( "aantal_items" => 32,
// 								"naam" 			=> "banaan",
// 								"type" 			=> "fruit",
// 								"stuk_prijs" 	=> 0.13,
// 								"kleur" 		=> "geel" );
// $itemsArray['sla']		= array( "aantal_items" => 10,
// 								"naam" 			=> "rucola",
// 								"type" 			=> "groente",
// 								"stuk_prijs" 	=> 0.30,
// 								"kleur" 		=> "groen" );
//
// Er is een winkelmandje met diverse producten.
// Er moet een weergave van een groenten / fruit mandje gemaakt worden.
// Alle items uit de array moeten weergegeven worden ( alle appels, peren, bananen, etc )
// Opmaak is niet belangrijk, gebruik simpele HTML. Bijvoorbeeld een tabel.
// Maak het in php op de voor jou beste manier, zorg er wel voor dat de code leesbaar blijft.
//
// - Er zijn minimaal 5 soorten groente of fruit, je mag er natuurlijk ook meer bij plaatsen.
// - Prijs per stuk moet zichtbaar zijn (in euro's, 2 getallen achter komma)
//
// extra:
// - Bereken het totaal bedrag per kistje en maak dit zichtbaar op elke regel.
// - Onder de tabel moet de totale som van 'aantal_items' weergegeven worden
//
//
// bv
// Aarbei, aantal items: 92 stuks, kleur: rood, prijs 92 * € 0,06 =  € 5,52
