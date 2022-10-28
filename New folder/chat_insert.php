<?php

//connecting  database

$connection = mysqli_connect("localhost:3308","root","","mydb01");


//connection failure checking
if(!$connection ){
  die("failed con:".mysqli_connect_error());
}
else{echo"dfcxzf";}

//defining variables

 date_default_timezone_set("Asia/Colombo");
 $message = "fghgfghffghg";
 $sender = "hfdjhgkj";
  $reciever ="hfhlkjnhl";
    $now = date("Y-m-d h:i:sa", $d  );
 

 //building queries   

  $query = 'insert into chat values (null,'.$message.','.$sender.','.$reciever.','.$now.')';
  if (mysqli_query($connection, $query)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $query . "<br>" . mysqli_error($connection);
    }

  
mysqli_close($connection);
 
 


?>