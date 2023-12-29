<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
abstract class dadyClass{
    abstract protected function getval($iqu);
}
class child extends dadyClass {
   public function getval($iqu) {return 'Hello' .$iqu;}
}

$h = new child;
echo $h->getval(' iqu');

?>
</body>
</html>