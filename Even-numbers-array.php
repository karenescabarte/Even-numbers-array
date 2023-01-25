<?php 
    echo "<h1>Even numbers array</h1>";
    echo "<p>Create an array that inclusively contains all even numbers between 0 to 10,000. Use the var_dump() function at the end to display the array values.</p>";

    $even_array = array();
    for($num = 0; $num <=10000 ; $num++){
        if($num %2 == 0){
            $even_array[] = $num;
        }
    }
    var_dump($even_array);
?>