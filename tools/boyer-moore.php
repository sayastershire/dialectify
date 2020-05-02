<?php
function boyerMooreReplace(&$fullString, $pattern, $replace){
    // REMINDER: NO NON-ARRAY ON FULLSTRING.
    // pattern size: strlen($pattern)
    //var_dump($pattern);
    $explodedString = str_split($fullString);
    $explodedPattern = str_split($pattern);
    $stringPointer = strlen($pattern) - 1;
    $patternPointer = strlen($pattern) - 1;
    $i = 0;
    while ($stringPointer < count($explodedString)){
        if ($pattern == "") break;
        if ($i >= 1000) break;
        $match = 0;
        $patternPointer = strlen($pattern) - 1;
        //var_dump($stringPointer);
        //var_dump($patternPointer);
        while ($patternPointer > -1){
            //echo "patternPointer";
            //var_dump($stringPointer);
            //var_dump($patternPointer);
            //var_dump($explodedString);
            //var_dump($explodedString[$stringPointer]);
            //var_dump($explodedPattern);
            //var_dump($explodedPattern[$patternPointer]);
            //var_dump($match);
            if ($explodedString[$stringPointer] == $explodedPattern[$patternPointer]){
                // If matched
                $stringPointer--;
                $patternPointer--;
                $match++;
            }
            else {
                // If did not match
                $patternPointer--;
            }
            //break;
        }
        if ($match == strlen($pattern)) { // Replace the stuff here.
            if ($explodedString[$stringPointer + strlen($pattern) + 1] == " " || $explodedString[$stringPointer + strlen($pattern) + 1] == "," || $explodedString[$stringPointer + strlen($pattern) + 1] == ".") {
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
                //array_push($constructedWord, $stringPrefix, $explodedReplace, $stringSuffix);

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
        $i++;
    }
    $fullString = implode($explodedString);
    return 0;
}
