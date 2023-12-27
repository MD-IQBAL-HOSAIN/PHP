<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

class iqu{
    public $t;
    //function __construct($num){$this->t = $num;}
    function __construct($num=5){$this->t = $num;}

    function sq(){return $this->t*$this->t;}
    function cube(){return $this->sq()*$this->t;}
  
}

//$obj = new iqu(8);
$obj = new iqu();
echo $obj->sq() ."<br>";
echo $obj->cube();


?>
<hr>

<?php

class u{
    public $e;

    function __construct($numberr)
    {
       return $this->e = $numberr; 
    }

    function sqr(){return $this->e * $this->e;}
    function cubee(){return $this->sqr() * $this->e;}
}
$oobj = new u(5);
echo $oobj->sqr()."<br>";
echo $oobj->cubee();

?>

</body>
</html>