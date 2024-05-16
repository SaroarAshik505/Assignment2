<?php 
    
    $strings = ["Hello", "World", "PHP", "Programming"];

    foreach($strings as $item){   
        echo "Original String:$item,";
        $vowels = array("a", "e", "i", "o", "u");
        $count = 0;
        for ($i = 0; $i < strlen($item); $i++){
            if (in_array(strtolower($item[$i]), $vowels)){
                $count++;
        }
     }
      echo "Vowel Count:$count,";   
      $reversed_string = strrev($item);
      echo "Reversed String: $reversed_string";
      echo "\n";
        
    } 
?>