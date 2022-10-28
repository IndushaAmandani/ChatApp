<?php 
 $con = new mysqli("localhost:3308","root","","mydb01");

 $query = "select * from student";

 $result = $con->query($query);

 
?>