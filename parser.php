<?php
$file = fopen("belandaify.csv", "r");
$dictionary = fgetcsv($file, 0, "|");
return $dictionary;
?>