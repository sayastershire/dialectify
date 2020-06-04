<?php

function boyerMooreReplace(&$fullString, $pattern, $replace){
    $explodedString = str_split($fullString);
    $explodedPattern = str_split($pattern);
    $stringPointer = strlen($pattern) - 1;
    $patternPointer = strlen($pattern) - 1;
    $i = 0;
    while ($stringPointer < count($explodedString)){
        if ($pattern == '') break;
        if ($i >= 1000) break;
        $match = 0;
        $patternPointer = strlen($pattern) - 1;
        while ($patternPointer > -1){
            if ($explodedString[$stringPointer] == $explodedPattern[$patternPointer]){
                // If matched
                $stringPointer--;
                $patternPointer--;
                ++$match;
            }
            else {
                // If did not match
                $patternPointer--;
            }
        }
        if ($match == strlen($pattern)) { // Replace the stuff here.
            if ($explodedString[$stringPointer + strlen($pattern) + 1] == ' ' || $explodedString[$stringPointer + strlen($pattern) + 1] == ',' || $explodedString[$stringPointer + strlen($pattern) + 1] == '.') {
                // Word prefix
                $constructedWord = [];
                $stringPrefix = [];
                $stringSuffix = [];
                for ($j = 0; $j < $stringPointer + 1; $j++){
                    $constructedWord[] = $explodedString[$j];
                }
                // replace Word = $replace
                $explodedReplace = str_split($replace);
                for ($j = 0; $j < strlen($replace); $j++)
                    $constructedWord[] = $explodedReplace[$j];
                // Word suffix
                for ($j = $stringPointer + strlen($pattern) + 1; $j < strlen($fullString); $j++){
                    $constructedWord[] = $explodedString[$j];
                }

                //Getting it all together
                $stringPointer += strlen($replace);
                $explodedString = $constructedWord;
            }
        }
        else { // Sliding mechanism
            if ($stringPointer + strlen($pattern) < strlen($fullString)){
                // If the pointer is still far in the safe zone
                $stringPointer += strlen($pattern);
            }
            else if ($stringPointer + strlen($pattern) >= strlen($fullString)){
                // If the pointer is somewhere near the limit
                if ($stringPointer == strlen($fullString) - 1)
                    $stringPointer = strlen($fullString);

                else
                    $stringPointer = strlen($fullString) - 1;
            }
            $patternPointer = strlen($pattern) - 1;
        }
        ++$i;
    }
    $fullString = implode($explodedString);
    return 0;
}

function boyerMooreFind(&$fullString, $pattern){
    //echo '&emsp;Word: ',$pattern;
    // Variables
    $PATTERN_STRLEN = strlen($pattern);
    $STRING_STRLEN = strlen($fullString);
    $explodedString = str_split($fullString);
    $explodedPattern = str_split($pattern);
    $stringPointer = $PATTERN_STRLEN - 1;
    $patternPointer = $PATTERN_STRLEN - 1;
    $i = 0;
    $foundWord = 0;

    // Lookup table
    $lookupTable = array_fill(0, 255, false);
    for ($i = 0; $i < $PATTERN_STRLEN; $i++)
        $lookupTable[ord($explodedPattern[$i])] = true;

    while ($stringPointer < $STRING_STRLEN) {
        //if ($pattern == 'hina dina') echo '('.$stringPointer.'|'.$patternPointer.')';
        if ($pattern == '') break;
        $match = 0;
        $patternPointer = $PATTERN_STRLEN - 1;
        while ($patternPointer > -1){
            if ($explodedString[$stringPointer] == $explodedPattern[$patternPointer]){
                // If matched
                $stringPointer--;
                $patternPointer--;
                ++$match;
            }
            else {
                // If did not match
                if ($lookupTable[ord($explodedString[$stringPointer])] == false) break;
                $patternPointer--;
            }
        }
        // A word is found.
        if ($match == $PATTERN_STRLEN) {
            if (($explodedString[$stringPointer + $PATTERN_STRLEN + 1] == ' ' || $explodedString[$stringPointer + $PATTERN_STRLEN + 1] == ',' || $explodedString[$stringPointer + $PATTERN_STRLEN + 1] == '.') && ($explodedString[$stringPointer] == ' ' || $explodedString[$stringPointer] == ',' || $explodedString[$stringPointer] == '.')) {
                echo '&emsp;Word found.(', $pattern,'|',$stringPointer,'|',strlen($fullString),').<br>';
                ++$foundWord;
            }
            $stringPointer += ($PATTERN_STRLEN + 1);
        }
        else {
            $stringPointer += $PATTERN_STRLEN;
        }
        $patternPointer = $PATTERN_STRLEN - 1;
        ++$i;
    }
    $fullString = implode($explodedString);
    return $foundWord;
}
