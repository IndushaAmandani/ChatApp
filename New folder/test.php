
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Form</title>
</head>
<body>
    <form action="insert2.php" method="post">
         Name: <input type="text" name = "Name"><br><br>
      City: <input type="text" name = "City"><br><br>

        Nic: <input type="text" name="Nic"><br><br>
        <input type="submit">
        <?php 


$connection = new mysqli("localhost","root","1234","student");

$connection = mysqli_connect("localhost","root","1234","student");
if ($connection -> connection_error){
    die("db connection is not succesful".$connection -> connect_error);
}else {
echo "successfully created";
};





//crete conncection
/* 
srvername
username
password
databse



//create connection
 $conn= new mysqli(srver,user,passaword,db);

 //check connection
 $conn->connction_error ====> boolean

 if ($conn-> connection_error){
     die ("databse die". $conn -> connection_error);
 }



*/


// $name = $_POST("Name");
// $city = $_POST("City");
// $nic = $_POST("Nic");

// $sql =  "insert into student(Name,City,Nic) values($name,$city, $nic)";
// if (mysqli_query($connection,$sql)){
//     echo "data inserted succesfully";
// }else
// echo 
// "insertion failed".$connection-> error;







?>

    </form>
</body>
</html>
C:\wamp64\www\Sem03\New folder\insert2.php