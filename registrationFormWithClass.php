<?php
ini_set("display_errors" , 1);
error_reporting(E_ALL);

class Person{
    public $Firstname;
    public $Lastname;

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->Firstname = $firstname;

    }
    public function setLastname($lastname)
    {
        $this->Lastname = $lastname;
    }
    public function getFirstname()
    {
        return $this->Firstname;

    }
    public function getLastname()
    {
        return $this->Lastname;
    }


    public function saveDetails(){
        $mysql= mysqli_connect("localhost","root","root","test");
        mysqli_query($mysql,"insert into users(firstname, lastname) VALUES ('".$this->getFirstname()."', '".$this->getLastname()."')");
//        $Firstname= getFirstname();
//        $Lastname = getLastname();//
//        mysqli_query($mysql,"insert into users(firstname, lastname) VALUES ('$Firstname', '$Lastname')");
        echo "Data inserted";

    }

}

?>

<!--<html>-->
<!--<head>-->
<!--    <title>Welcome to our page</title>-->
<!--</head>-->
<!--<body>-->
<!--<form action="" method="post">-->
<!--    <table>-->
<!--        <label style="font-size: 30px;">Fill the form</label>-->
<!--        <tr><td>Firstname:<input type="text" name="firstname"></td></tr>-->
<!--        <tr><td>Lastname:<input type="text" name="lastname"></td></tr>-->
<!--        <tr><td><input type="button" name="Submit" value="Submit"></td></tr>-->
<!--    </table>-->
<!--</form>-->
<?php
 $student = new Person;
 if(isset($_POST['Submit'])) {
     $firstname = $_POST["firstname"];
     $lastname = $_POST ["lastname"];
     $student->setFirstname($firstname);
     $student->setLastname($lastname);
     $student->saveDetails();


 }
?>


</body>
</html>
