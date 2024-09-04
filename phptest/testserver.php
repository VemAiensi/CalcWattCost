
<?php
require "header.php";
// declaring a empty variable
$unit = $hours = $price= $power = "";
$kwhr = $x = "";

// form Validation
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $unit = test_input($_POST["units"]);
    $pow = test_input($_POST["pow"]);
    $hours = test_input($_POST["hours"]);
    $price = test_input($_POST["Price"]);   

         /*converting unit to KWhr*/
         if($unit !=null){

         
        switch($unit) 
        {
            case "watts":
                $kwhr = ($pow * $hours) / 1000 ;
                $x = $kwhr * $price;
                
                break;
            case "amp":
                $kwhr = ($pow * $hours) / 1000 ;
                $x = $kwhr * $price;
                
                break;
            case "volt":
                $kwhr = ($pow * $hours) / 1000 ;
                $x = $kwhr * $price;
               
                break;
            
        }
    }
        
       

}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  
}
echo $x;
echo "\n \n \n";

?> 

<html>
    <br></br>
    <a href="testUI.php">Back</a>
</html>