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
                echo "Student ID: " . $parts[0] . "<br>";
                echo "Student Name: " . $parts[1] . "<br>";
                echo "Student Batch: " . $parts[2] . "<br>";
                break;
            }
        }
    }
}
$s = new Student();
$s->result("3");
