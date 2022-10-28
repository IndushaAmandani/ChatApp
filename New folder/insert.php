<?php




$srver ="localhost:3308";
$usrname = "root";
$passwrd = "";
$database = "mydb01";
// create connection 
$connection = mysqli_connect($srver,$usrname,$passwrd,$database);

//Check connection 
if(!$connection ){
    die("failed con:".mysqli_connect_error());
}
echo"";

//Variables from page2.html         
$name = $_GET["name"];
$city = $_GET["city"]  ;

//query adding 
    $query = "insert into student values(null,'$name','$city') ";


//get info from db server
 $result = mysqli_query($connection,$query);

 //checking query
if ($result != true){
   echo "error";
 }





?>