<a href='/'>Back</a><br>
<?php

// Tools
require('tools/boyer-moore.php');
require('parser.php');
require('variables.php');

// Variables
$inputText = $_POST['input_text'];
$debug = false;

if ($debug){
    var_dump($_POST);
    echo "Length of input text is ", strlen($_POST['input_text']), ".<br>";
    echo 'Input word: <br>'.$_POST['input_text'].'<br><br>';
}


switch($_POST['mode-of-operation']){
    case 'translate':
        $dictionary = require('parser.php');

        //echo $inputText.'<br>';
        var_dump($inputText);

        foreach ($dictionary as $key => $value) {
            boyerMooreReplace($inputText, $value[1], $value[0]);
        }

        echo '<br>------------<br><br>';
        echo $inputText.'<br>';
        break;
    case 'analyse':
        // var_dump(variables\DIALECTS);
        $startTimer = microtime(true);
        $foundAmount = [];

        foreach (variables\DIALECTS as $dialect){
            if ($debug) echo 'Searching for ',$dialect,'.<br>';
            $dictionary = parser\loadDictionary($dialect);
            $tempAmount = 0;
            foreach($dictionary as $value){
                //echo '&emsp;Checking for '.$value[0];
                $tempAmount += boyerMooreFind($inputText, $value[0]);
                //echo '.<br>';
            }
            array_push($foundAmount, $tempAmount);
            //var_dump($dictionary);
            //echo '<br>';
        }
        $stopTimer = microtime(true);
        $timeElapsed = $stopTimer - $startTimer;
        echo 'Time: '.$timeElapsed.'<br>';
        for ($i = 0; $i < count(variables\DIALECTS); $i++)
            echo variables\DIALECTS[$i], ': ', $foundAmount[$i], '<br>';
        break;
}