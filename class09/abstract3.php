<?php
abstract class dady{
    abstract function select($a);
    abstract function insert($e);
    abstract function update($f);
    abstract function search($n);
}

class child extends dady{
    public function select($b){return "hello".$b;}
    public function insert($c){return "hello".$c;}
    public function update($j){return "hello".$j;}
    public function search($w){return "hello".$w;}
}
class child2 extends dady{
    public function select($q){return "RFL ".$q;}
    public function insert($s){
        $objj = new child();
        $objj->insert("hey ".$s);
        //echo $objj->insert("who r u ?");
    }
    public function update($j){return "hello".$j;}
    public function search($w){return "hello".$w;}   
  
}

$obj = new child;
echo $obj->select(" Bijoy.")."<br>";
echo $obj->insert(" Rahim.")."<br>";
echo $obj->update(" Karim.")."<br>";
echo $obj->search(" Abdul.")."<br>";





?>