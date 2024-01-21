<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    class students{
        public $id;
        public $name;
        public $batch;
        public $filearray;
     public function __construct()
     {
        $this->filearray =file("student.txt");
     }   

     function result($id){
        foreach ($this->filearray as $line) {
           $parts = explode(",",$line);

           if ($parts[0]==$id) {
            echo "Student ID: ".$parts[0]."<br>";
            echo "Student Name: ".$parts[1]."<br>";
            echo "Student Batch: ".$parts[2]."<br>";
           }
        }
     }
    }
      $obj = new students;
      $obj->result("5")."<br>";
      echo "<hr>";
      $obj->result("4")."<br>";
      echo "<hr>";   
      $obj->result("3")."<br>";
      echo "<hr>";
      $obj->result("2")."<br>";
      echo "<hr>";
      $obj->result("1")."<br>";
    
    ?>
</body>
</html>