<?php
$number1= $_POST['number1'];
$number2= $_POST['number2'];

checkEven($number1);
checkEven($number2);

function checkEven ( $number){
    if($number%2 === 0)
    {
        echo $number.'is even<br>';

    }
    echo $number.'is odd';
}

