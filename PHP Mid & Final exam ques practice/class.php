<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    Input ID: <input type="text" name="formid" id=""> <br>
    <input type="submit" name="submit"  id=""> <br>
</form>


<h3>Create a class named student where fields are id, name, batch and one method result which will take id as parameter and search the corresponding result from a file and print result. Must use constructor to initialize the data and print a result.
</h3>
<?php
class Student
{
    public $id;
    public $name;
    public $batch;
    public $filearr;
    public function __construct()
    {
        $this->filearr = file("student.txt");
        /*  echo "<pre>";
        echo var_dump($this);
        echo "</pre>"; */
    }

    function result($id)
    {
        foreach ($this->filearr as $line) {
            $parts  = explode(",", $line);
            /* echo "<pre>";
        echo var_dump($parts);
        echo "</pre>"; */
            if ($parts[0] == $id) {
                echo "<b> Student ID: $parts[0] </b><br>";
                echo "<b> Student Name:  $parts[1] </b><br>";
                echo "<b> Student Batch: $parts[2] </b><br>";
                break;
            }
        }
    }
}
$s = new Student();
  //$s->result("3");
  if (isset($_POST['submit'])) {
    $formId = $_POST['formid'];
    $s->result($formId);
  }
?>

</body>
</html>