<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <h1>functions can be: builtin and user defined</h1>
    <h3>Function has two parts: function definition and function call</h3>
    <h3>Only in function definition you have to use code block {}</h3>
    <h3>in function call you dont need to use code block{}</h3>
    <h3>function can take parameters and can return values</h3>
    <?php
    //built in function
        echo pow(2,5);
        echo "<br>";
        //user defined function
        function sq($n){
            return $n*$n;
        }
        //fx call
        echo pow(2,sq(3));
    ?>
    <hr>
    <h1>iqus practice 1 (pow function)</h1>
    <?php
    
    function sqr($x){
        return $x*$x;
    }
    echo pow(2,sq(3)) ;
    
    ?>
    <hr>
    
    <?php
    //array destructuring using list function
    $colors = ["red","blue","green","yellow","yellow1"];
    list($color1, $color2, $color3,$colorrest) = $colors;
    echo $color3;
    ?>

    <hr>
    <h2>iqus-p:2 (array destructuring using with list function)</h2>
    <?php
    $colorArray = ["red","green","blue","yellow","teal","orange","fuchsia"];
     list($c1,$c2,$c3,$c4,$c5,$c6,$c7) = $colorArray;
     echo $c4 . "<br>" ; 
     echo $c7 . "<br>" ;   
     echo $c3 . "<br>" ;   
    
    ?>  

    <hr>
    <?php
    $numbers = range(12,20);//[12,13,14,15,16,17,18,19,20]
    list($a,$b,$c) = $numbers;
    echo $c;
    ?>
    <hr>


    <h2>iqus-p:3 (range function)</h2>  
    <?php
    $randomNo = range(10,20);
    list($n1,$n2,$n3,$n4,$n5) = $randomNo;
    echo $n4;
    
    ?> 
    <hr>



    <?php
    function retrieveUserProfile()
    {
    $user[] = "Jason Gilmore";
    $user[] = "jason@example.com";
    $user[] = "English";
    return $user;
    }
    list($name) = retrieveUserProfile();
    echo $name;
    ?>
    <hr>

    <h2>iqus-p:3 (range function)</h2>  
    <?php
    function userProfile(){
        $user[] = "Adolf Hitlar";
        $user[] = "Amir khan";
        $user[] = "salman khan";
        $user[] = "Henri Nicols";
        return $user;
    }
    list($name,$name2,$name3) = userProfile();
    echo $name;
   
    ?> 
    <br>
    <br>
    <br>
    <br>

</body>
</html>