<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>country</title>
</head>
<body>
    <?php
    $countryList2 = [
        "AF" => "Afghanistan",
        "AL" => "Albania",
        "DZ" => "Algeria",
        "AS" => "American Samoa",
        "AD" => "Andorra",
        "AO" => "Angola",
        "AI" => "Anguilla",
        "AQ" => "Antarctica",
        "AG" => "Antigua and Barbuda",
        "AR" => "Argentina",
        "AM" => "Armenia",
        "AW" => "Aruba",
        "AU" => "Australia",
        "AT" => "Austria",
        "AZ" => "Azerbaijan",
        "BS" => "Bahamas",
        "BH" => "Bahrain",
        "BD" => "Bangladesh",
    ];
    $countryList2['NK']= "Noakhali";  
    
echo "<label id='c'>Country:</lavel>"; 
echo "<select name='' id='c'>\n";
foreach ($countryList2 as $key => $value) {
    echo"<option value='$key'>$value</option>\n";
}

echo "</select>";
    ;?>

    <br>
    <hr>
    <form action="">
<h1>please select your country:</h1>

<?php

foreach ($countryList2 as $key => $value) {
    echo "<label for='country{$key}'>$value</label>\n";
    echo "<input type='checkbox' id='country{$key}' name='' value='$key'>\n";
}

?>


    </form>

</body>
</html>