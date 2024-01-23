<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="dropAddress.php" mathod="get">
        <!-- <input type="text" name="div"> -->
        <select name="div" id="">
<?php
$dropdata = file_get_contents("bdAddress.json");
$myArray = json_decode($dropdata);
foreach ($myArray as $keyy => $valuee) {
    foreach ($valuee as $ids => $lang) {
        if($ids == "en"){
            $divfision = $lang->division;
            // $arrayyyy =  array("$divfision");
            // $divUniqe = array_unique($divfision);
            // echo $divfision;
            // var_dump($arrayyyy);
            // echo $divUniqe;
            echo "<option value='$divfision'>$divfision</option>";
        }
    }
}

?>

        </select>
        <button type="submit">Submit</button>
    </form>
</body>
</html>