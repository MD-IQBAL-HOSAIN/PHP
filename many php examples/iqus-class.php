<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class student{
        public $id;
        public $name;
        public $batch;
        public $filearray;

        public function __construct(){

            $this->filearray = file("student.txt");

        }
        function result($id){
            foreach ($this->filearray as $line) {
               $part = explode(",",$line);

               if($part[0]==$id){
                echo "Student ID: ".$part[0]."<br>";
                echo "Student Name: ".$part[1]."<br>";
                echo "Student Batch: ".$part[2]."<br>";
                break;
               }
            }
        }
      
    }
    $all = new student();
    $all->result("6");

    
    ?>  
    
</body>
</html>