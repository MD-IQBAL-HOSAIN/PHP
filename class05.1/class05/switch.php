<?php
$category = $_GET['C']??"weather";
 switch($category) {
 case "news":
 echo "What's happening around the world";
 break;
 case "weather":
 echo "Your weekly forecast <br>";
 echo " about weather";
 break;
 case "sports":
 echo "Latest sports highlights <br>";
 echo "From your favorite teams";
 break;
 default:
 echo "Welcome to my web site";
 }
?>
<hr>
<?php
 $products = $_GET['products']??null;
  
 switch ($products) {
    case 'iphone 13 pro':
        echo "price 1 lack<br>";
        echo "Iphon is not for gorib <br>";
        break;
    case 'walton':
        echo "price 40,000 tk<br>";
        echo "walton deshi freeze.<br>";
        break;
    case 'comforter':
        echo "price 3000tk<br>";
        echo "Easy life.<br>";
        break;
    
    default:
       echo "Ato vul na kore value thik kore de.";
        break;
 }



?>