<a href="/">Back</a><br>
<?php

require("tools/boyer-moore.php");

$dictionary = require("parser.php");

$inputText = $_POST["input_text"];
//echo $inputText."<br>";
var_dump($inputText);

foreach ($dictionary as $key => $value) {
    boyerMooreReplace($inputText, $value[1], $value[0]);
}

echo "<br>------------<br><br>";
echo $inputText."<br>";



?>