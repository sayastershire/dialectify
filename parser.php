<?php

/*
DATA STRUCTURE DESCRIPTION:
dictionary
[line]
[0,1] where 0 = Dutch word and 1 = Indonesian synonym
*/

$FILENAME = "belandaify.csv";

$file = fopen($FILENAME, "r");

$dictionaryRaw = fread($file, filesize($FILENAME)) or die("Unable to open the dictionary!");
$dictionaryImperfect = explode("\n", $dictionaryRaw);
$dictionary = [];
for ($i = 0; $i < count($dictionaryImperfect); $i++)
    $dictionary[] = explode("|", $dictionaryImperfect[$i]);

return $dictionary;

?>