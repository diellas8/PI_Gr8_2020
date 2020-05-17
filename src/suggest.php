<?php
// People Array @TODO - Get from DB
$people[] = "Nora";
$people[] = "Diella";
$people[] = "EndritB";
$people[] = "EndritM";
$people[] = "Vlera";
$people[] = "Valon";
$people[] = "Dardan";
$people[] = "Blerim";
$people[] = "Lule";
$people[] = "Vjosa";
$people[] = "Faton";
$people[] = "Isak";
$people[] = "Vigan";
$people[] = "Edon";
$people[] = "Valdete";
$people[] = "Qefsere";
$people[] = "Shqipe";
$people[] = "Haxhi";
$people[] = "Sevdie";

sort($people);

// Merri Query Strings
$q = $_REQUEST['q'];

$suggestion = "";

// Merri Suggestions
if($q !== ""){
	$q = strtolower($q);
	$len = strlen($q);
	foreach($people as $person){
		if(stristr($q, substr($person, 0, $len))){
			if($suggestion === ""){
				$suggestion = $person;
			} else {
				$suggestion .= ", $person";
			}
		}
	}
}

echo $suggestion === "" ? "No Suggestion" : $suggestion;