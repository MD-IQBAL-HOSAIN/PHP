<h1>Object cloning example</h1>
<?php
class Stud{
    public $name = "not set yet";
    //will call automatically when object is cloned
    function __clone() {
        $this->name = "anonymous";
       }
}

$nas = new Stud();
$nas->name = "Nasrin";
//when you assign object variables to another variable a copy is not created, only the reference is used.
//to copy an object you need to use the keyword "clone"

$jui = clone $nas;
echo $jui->name;

echo "<br>";

$jui->name = "Jui";
echo $jui->name;

echo "<br>";
echo $nas->name;

?>


<hr>
<h1>Another Object cloning example</h1>
<?php
class employee{
    public $firstName = "empty value";

    function __clone(){
        $this->firstName = "ASA Rahim shaheb";
    }

}

$obj = new employee();
$obj->firstName="Karim uddin";

$iqu = clone $obj ;
echo $iqu->firstName;

$iqu->firstName = "Mr. clark";
echo "<br>";
echo $iqu->firstName;

echo "<br>";
echo $obj->firstName;


?>
<hr>
<h1>More Another Object cloning example</h1>

<?php

class teacher{
    public $student = "void value";

    function __clone()
    {
        $this->student = "Rajdeep shah";
    }
}

$class7 = new teacher;
$class7->student = "Julquer Nain";

$class8 = clone $class7;
echo $class8->student; 

echo "<br>";

echo $class8->student="Khusdil shah";
echo "<br>";

echo $class7->student;


?>

