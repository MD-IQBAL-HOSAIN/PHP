<?php

if (isset($_POST['name'])) {
    $db = new mysqli('localhost','root',null,'evally');
    $name = $_POST['name'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $qurey = "call add_manufact('$name','$address','$contact')";
    $db->query($qurey);
    $sms = "<h1>Data Added Successfully !!</h1>";
    $db->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        tr,
        td,
        input {
            padding: 5px;
        }        
    </style>    
</head>

<body>
    <form action="#" method="post">
        <table style="width: 60%; margin: 0 auto; margin-top: 20px; border: 2px solid gray; box-shadow: 0px 0px 40px red; border-radius: 10px;">

            <tr>           
                <td align="center"> <h3> <?php echo isset($sms) ? $sms : " ";?> </h3> </td>  
                        
            </tr>
            <tr>           
                <td align="center"> <h3>Data insert Table</h3> <hr></td>  
                        
            </tr>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><input type="text" name="name" id="name"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td>:</td>
                <td><input type="text" name="address" id="address"></td>
            </tr>
            <tr>
                <td>contact_no</td>
                <td>:</td>
                <td><input type="number" name="contact" id="contact"></td>
            </tr>
            <tr>
                <td align="center" colspan="3"> <input type="submit" name="add" id="add" value="ADD !"></td>
            </tr>
        </table>
    </form>
</body>

</html>