<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>class2</title>
</head>

<body>
    <form action="" method="post">
        Give valid id: <input type="text" name="giveid" id=""><br>
        <input type="submit" name="submit" id="">
    </form>


    <?php
    class idbStudent
    {
        public $fileArray;

        public function __construct()
        {
            $this->fileArray = file("studentData.txt");
        }

        function result($id)
        {
            foreach ($this->fileArray as $value) {
                $part = explode(",", $value);
                if ($part[0] == $id) {
                    echo "<br><br><strong> Student ID: $part[0] </strong> <br>";
                    echo "<strong> Student Name: $part[1] </strong> <br>";
                    echo "<strong> Student Round: $part[2] </strong> <br>";
                }
            }
        }
    }

    $obj = new idbStudent();
    if (isset($_POST['submit'])) {
        $std = $_POST['giveid'];
        $obj->result($std);
    }


    ?>
</body>

</html>