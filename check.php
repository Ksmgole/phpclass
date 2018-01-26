<?php

if(!isset($_GET['number'])){
    die("Not shit") ;
}

$number = $_GET['number'];



if( $number % 2 === 0){
    echo $number . " is even";
} else {
    echo  $number . " is odd";
}

