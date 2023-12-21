<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #colorDiv{
            display: flex;
            justify-content: flex-start;
            flex-wrap: wrap;
        }
        #colorDiv div{
           width: 150px;
           height: 150px;
        }
    </style>
</head>
<body>
    <?php
   class color{
public $myColor =[
    "red","green","blue","yellow","teal","black","bisque","maroon","purple","fuchsia"
];
   };
    ?>

    <hr>


    <div id="colorDiv">
   <?php
   $me = new color();
  foreach ($me->myColor as $key => $value) {
   echo "<div style='background-color:{$value}'>".$value."</div>";
  }
 
   ?>
    </div>
</body>
</html>