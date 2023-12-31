
<h1>example of interface and abstract keywords..</h1>
<p>1. abstract class extends only one class(child class), but interface implements multiple interface</p>
<p>2. abstract class used with <strong>Extends</strong> and interface is used with <strong>implements</strong> keyword. </p>
<?php
abstract class x {
    abstract function xx();
}
abstract class y {
    abstract function yy();
}

interface u{
    function reading();
    function writting();
    function speaking();

}
interface p{
    function listening();
    function traveling();
}

class son extends x implements u,p{
    function xx(){}
    function reading(){}
    function writting(){}
    function speaking(){}
    function listening(){}
    function traveling(){}
}


?>