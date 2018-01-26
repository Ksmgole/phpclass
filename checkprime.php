<?php


$number=349;
$flag=0;

for($i =2 ; $i<=$number ; $i++)
{
    if($number%$i==0) {
        $flag =1;
        echo "$number is not a prime number";
        break;
    }
}

if($flag==0){
    echo "$number is a prime number";
}

?>