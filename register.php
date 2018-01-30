<?php

$mysql = mysqli_connect("localhost", "root", "root", "test");

if (isset ($_POST ['Submit'])) {
    $firstname = $_POST["Firstname"];
    $lastname = $_POST["Lastname"];
    mysqli_query($mysql, "insert into users (firstname, lastname) VALUES ('$firstname','$lastname')");
    echo "Data inserted to the database";
}
