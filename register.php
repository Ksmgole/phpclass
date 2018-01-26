<?php
    $fn = $_POST["Firstname"];
    $ln = $_POST["Lastname"];
    $submit = $_POST ['Submit'];

    $mysql = mysqli_connect("localhost","root","root","test");
    if(isset ($submit))
    {
        $mysqli_query($mysql,'insert into users (firstname, lastname) VALUES ("$fn", "$ln")');
        echo "inserted";


    }




/**
 * Created by PhpStorm.
 * User: kusum
 * Date: 1/26/18
 * Time: 9:04 AM
 */