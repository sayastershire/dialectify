<?php

$dictionary = require("parser.php");

$inputText = $_POST["input_text"];
echo $inputText;
$inputText = preg_replace("/\. /", ".", $inputText);
$inputSentence = explode(".", $inputText);
$splitSentence = [];

for ($i = 0; $i < count($inputSentence); $i++){
    $splitSentence[] = explode(" ", $inputSentence[$i]);
}

//foreach ($dictionary as $word){
//
//}


for ($i = 0; $i < count($splitSentence); $i++) {
   for ($j = 0; $j < count($splitSentence[$i]); $j++){
       echo ($i+1).".".($j+1).": ".$splitSentence[$i][$j]."<br>";
   } 
}
?>