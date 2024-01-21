<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>class_object_oop</title>
</head>
<body>
    <form action="" method="post">

        Input your ID:<input type="text" name="inputid" placeholder="Enter id(101-105)" min="101" require> <br>
        <input type="submit" name="submit">

    </form>

    <?php
    class student{
        public $file;
        public $id;
        public $name;
        public $round;
        function __construct($file){
            $this->file = file($file);
        }
        function result($id){
            foreach ($this->file as $key => $value){
                $data = explode("," , $value);
                $this->id = $data[0];
                $this->name = $data[1];
                $this->round = $data[2];
                if($this->id == $id){
                    echo "<h4>ID: $this->id</h4>";
                    echo "<h4>ID: $this->name</h4>";
                    echo "<h4>ID: $this->round</h4>";
                }
            }
        }
    }
    $student = new student("studennt_file.txt");
    if(isset($_POST['submit'])){
        $postId= $_POST['inputid'];
        $student->result($postId);
    }
    
    ?>
</body>
</html>