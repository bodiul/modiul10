<?php
    function count_vowels($str) {

        // vowel
        $vowels = array('a', 'e', 'i', 'o', 'u');
        // count
        $Vowel_Count = 0;
        // loop
        for ($i=0; $i <strlen($str); $i++) { 
            // code

            if (in_array($str[$i], $vowels)) {
                # code...
                $Vowel_Count++;
            }
        }
        return $Vowel_Count;
    }

    $strings = ["Hello", "World", "PHP", "Programming",];
    for ($i=0; $i <count($strings) ; $i++) { 
        # code...
        $Vowel_Count = count_vowels($strings[$i]);
        $strev = strrev($strings[$i]);
        echo "Original String: $strings[$i], Vowel Count: $Vowel_Count, Reversed String: $strev<br>";
    }
    
?>


