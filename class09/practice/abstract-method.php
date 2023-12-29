<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
abstract class AbstractClass{
    // Our abstract method only needs to define the required arguments
    abstract protected function getName($name);
    }
 
class childClass extends AbstractClass{
    public function getName($name) {
        return 'Hi '.$name.' !';
    }
}
 
$class = new childClass;
echo $class->getName('Shahriar');
?>
<hr>





</body>
</html>