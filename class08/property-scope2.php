<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
class me{
    public $iqu = 10;
    private $bijoy = 20;
    protected $iqbal = 30;

   public function sett($mm){ $this->bijoy = $mm;}
   public function gett(){return $this->bijoy;}

}
$obj = new me();
//$obj->iqu;
echo $obj->iqu;
echo "<br>";

echo $obj->gett();

?>
<hr>

<?php

class A{
    public $s = 7;
    private $d = 9;
    protected $f  = 3;

    public function setter($g){$this->d = $g;}
    public function getter(){return $this->d;}
}
$objectt = new A();
echo $objectt->s;
echo "<br>";
echo $objectt->getter();


?>
</body>
</html>