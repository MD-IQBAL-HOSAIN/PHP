<?php
class Employee
{
    public $confusedgirl;
    private $name;
 
    // Setter
    public function setName($uu){ $this->name = $uu; }
       // Getter
       public function getName(){ return "I am " . $this->name;}
}
$e = new Employee;
$e->confusedgirl = "Maria";
echo $e->confusedgirl . "<br>";


$e->setName("Nasrine");
echo  $e->getName();
?>
<hr>



<?php
class h{
    public $CG;
    private $d = "aziz";
    public function setter($g){$this->d = $g;}
    public function getter(){return $this->d;}
}
$xobject = new h();
$xobject->CG = "Maria BD";
echo "I am {$xobject->CG}";
echo "<br";

//$xobject->setname("Aziz");
echo $xobject->getter();


?>