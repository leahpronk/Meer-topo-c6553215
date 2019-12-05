<?php

$hoeveel = readline ("Hoeveel landen ga je toevoegen?");


for ($i=0; $i <$hoeveel ; $i++) { 

	$data = array();
	$land = readline ("Welk land wil je toevoegen?");
	$hoofdstad = readline ("Wat is de hoofdstad van $land?");
	$combi[$land] = $hoofdstad;
}

echo $s . "De volgende landen en steden zitten in de database" . PHP_EOL;

 foreach ($combi as $land => $hoofdstad) {
 	echo $land . "," . $hoofdstad . PHP_EOL;
 }



