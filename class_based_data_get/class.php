<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>class</title>
</head>

<body>
    <form action="" method="post">
        Give ID: <input type="text" name="idDaw" id=""> <br>
        <input type="submit" name="submit" id=""> <br>
    </form>

    <?php
    class student
    {
        public $filearray;
        public function __construct()
        {
            $this->filearray = file("studentData.txt");
            /*  echo "<pre>";
        echo var_dump($this->filearray);
        echo "</pre>"; */
        }

        function result($id)
        {
            foreach ($this->filearray as  $line) {
                $parts = explode(",", $line);
                /* echo "<pre>";
                echo var_dump($parts);
                echo "</pre>"; */

                if ($parts[0]==$id) {
                    echo "<b> Student ID: $parts[0] </b><br>";
                    echo "<b> Student Name:  $parts[1] </b><br>";
                    echo "<b> Student Batch: $parts[2] </b><br>";
                    break;
                }
            }
        }
    }

    $obj = new student();
    
    if (isset($_POST['submit'])) {
       $userID = $_POST['idDaw'];
       $obj->result($userID);

    }


    ?>
</body>

</html>