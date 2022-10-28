<!DOCTYPE html>
<html>

<head>
    <title>ChatApp back</title>
</head>

<body>
    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>City</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            $con =  mysqli_connect("localhost:3308","root","","mydb01");

// checking the connection
            if(!$con){
                die("failed con:".mysqli_connect_error());
            }
            echo "";

            //query adding
            $query = "select * from student";



            $result = mysqli_query($con,$query);
             if($result!=true ){
                 echo"unsuccess";
             }

        //     echo "<tr>";
        //         echo "<td>".$row1['Id']."</td>"; 
        //         echo "<td>".$row1['Name']."</td>"; 
        //         echo "<td>".$row1['City']."</td>"; 
        //     echo "</tr>";
        //     $row2 = $result-> fetch_assoc();
        //     echo "<tr>";
        //     echo "<td>".$row2['Id']."</td>"; 
        //     echo "<td>".$row2['Name']."</td>"; 
        //     echo "<td>".$row2['City']."</td>"; 
        
        // echo "</tr>";
        while($row = $result->fetch_assoc()){
            echo "<tr>";
                echo ("<td>".$row['Id']."</td>");
                echo ("<td>".$row['name']."</td>");
                echo ("<td>".$row['City']."</td>");
            echo "</tr>";
        }
               
 
            ?>
        </tbody>
    </table>

</body>


</html>