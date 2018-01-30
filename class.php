<?php


ini_set('display_errors',1);
error_reporting(E_ALL);

abstract class Business {

    public $name;
    protected $address;
    private $email;

    function __construct($thisName, $address)
    {
        $this->name = $thisName;
        $this->address = $address;
    }

    //setter or mutator
    public function setEmail($kusum)
    {
        if (!filter_var($kusum, FILTER_VALIDATE_EMAIL)) {
            throw new Exception('Invalid email');
        }

        $this->email = $kusum;
    }

    //accessor or getter
    public function email()
    {
        return $this->email;
    }

    public function getName()
    {
        return $this->name();
    }

    private function name()
    {
        return $this->name;
    }

    public function save()
    {

//        mysqli_query($mysql, "insert into users (firstname, lastname) VALUES ('$firstname','$lastname')");
    }
}

class Restaurant extends Business
{
    public $name;
    public $address;
    private $email;

    public function orderPizza()
    {

    }


}


class Bar extends Business {

    public $name;
    protected $address;
    protected $email;

    function orderJD()
    {

    }

}


class FastFood extends Business {

    public $name;
    protected $address;
    protected $email;

}

$restaurant1 = new Restaurant('Bricks', 'Kupondole');
$restaurant1->setEmail('test@email.com');
echo $restaurant1->getName() . PHP_EOL;
echo $restaurant1->email();

$bar = new Bar('Bricks', 'Kupondole');
$bar->setEmail('test@email.com');
echo $bar->getName() . PHP_EOL;
echo $bar->email();


$restaurant2 = new Restaurant('Old School', 'Jhamsikhel');
echo $restaurant2->getName() . PHP_EOL;
echo $restaurant2->email();













//echo $restaurant->name;
//
//$restaurant1 = new Restaurant('Tamarind', 'Kupondole');
//echo $restaurant1->name;








