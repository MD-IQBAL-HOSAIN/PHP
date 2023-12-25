<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch</title>
</head>

<body>
    <?php
    $result = $_GET['result']??null;

    switch (true) {
        case($result>=90 && $result <=100):
            echo "A+ Excellent.";
            break;
        case($result>=80 && $result <=89):
            echo "A (Talent.)";
            break;
        case($result>=70 && $result <=79):
            echo "A- (Average.)";
            break;
        case($result>=60 && $result <=69):
            echo "B (you have to practice.)";
            break;
        case($result >=50 && $result <=59);
            echo "C (you have to learn more.)";
            break;    

        default:
          echo "You must have fail. plz try again";
          break;
    }

    ?>
    <hr>

    <?php
    $result = "Bijoy";

    switch ($result) {
        case($result=="Bijoy" || $result =="Chowdhury"):
            echo "Hello $result";
            break;  

        default:
          echo "Didn't match. plz try again";
          break;
    }


    
    ?>
<hr>
    <?php

    $name = "iqu warrior";

    switch ($name) {
        //double case or er kaj kore.
        case "Bijoy";
        case "Chowdhury":
            echo "Hello MD. $name";
            break;
        case "iqu warrior":
            echo "Is this $name !!";
            break;

        default:
            echo "Didn't match. plz try again";
            break;
    };

    ?>
    <hr>
    <?php
    
    $number = "3PHP";
    switch ($number) {
        case 1:
           echo "one";
            break;
        case 2:
           echo "two";
            break;
        case 3:
           echo "three";
            break;
        
        default:
        echo "Default output : did not match";
         ;   break;
    }
    
    ?>
    <hr>
    <?php
    
    $number = "Bijoy";
    switch ($number) {
        case ($number=="Raj"):
           echo "ck 1";
            break;
        case ($number=="Rajamouli"):
           echo "ck 2";
            break;
            case ($number=="Bijoy"):
           echo "ck 3";
            break;
        
        default:
        echo "Default output : did not match";
          break;
    }
    
    ?>

</body>

</html>