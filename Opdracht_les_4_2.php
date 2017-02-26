<?php
$bierArr = array();	// reset de array en define de variabele.

$bierArr["ij"]					= array("KEY"=>"VALUE", "schuim"=>"ja", "kleur"=>"blond");
$bierArr["jupiler"]				= array();	// zeg dat de inhoud van jupiler een array is
$bierArr["jupiler"]["KEY"]		= "VALUE";	// jupiler heeft een onderdeel KEY
$bierArr["jupiler"]["kleur"]	= "blond";

$bierArr["guinnes"]	= array();
$bierArr["guinnes"]["KEY"]		= "VALUE";
$bierArr["guinnes"]["schuim"]	= "nee";
$bierArr["guinnes"]["kleur"]	= "donker";

$bierArr["amstel"]	= array();
$bierArr["amstel"]["KEY"]		= "VALUE";
$bierArr["amstel"]["schuim"]	= "ja";
$bierArr["amstel"]["kleur"]		= "licht";

$bierArr["amstel2"]	= array();
$bierArr["amstel2"]["KEY"]		= "VALUE";
$bierArr["amstel2"]["schuim"]	= "ja";
$bierArr["amstel2"]["kleur"]	= "donker";

/*
ij, shuim=ja
jupiler, shuim=niet bekend
guinness, shuim=nee
amstel, shuim=ja
amstel2, shuim=ja
*/


// Geef alle items uit de array weer in de vorm van een list, bv:
?>
<ul>
	<li>ij</li>
	<li>jupiler</li>
	<li>cola</li>
</ul>
<?php
// hoeveel items zitten er in de array?
// alleen het item 'spa' zien
// vervang amstel voor palm
// voeg een nieuw item toe
// voeg nog een nieuwe drank toe
// sorteer op naam en laat het resultaat zien
// Laat alles zien behalve de appelsap
// geef alle items weer die schuim hebben