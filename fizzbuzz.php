<?php

    if(isset($_POST['number'])){
        $number = $_POST['number'];
        if(is_numeric($number)){
            if($number <= 2046){
                for ($i = 1; $i <= $number; $i++) {
                    if ($i % 15 == 0) {
                        echo 'FizzBuzz<br>';
                    } elseif ($i % 3 == 0) {
                        echo 'Fizz<br>';
                    } elseif ($i % 5 == 0) {
                        echo 'Buzz<br>';
                    } else {
                        echo $i . '<br>';
                    }
                }
            } else {
                echo "Please, Enter a lower number than 2046";
            }
        } else {
            echo "Please, Enter a number in the field";
        }
    }

?>
