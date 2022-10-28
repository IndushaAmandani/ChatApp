<?php   

$con =new mysqli("localhost:3308","root","","mydb01");

// checking the connection
if(!$con){
    die("failed con:".mysqli_connect_error());
}
echo "";

//query adding
$query = "select * from chat order by Send_at asc";
$result = $con->query($query);




while($row = $result->fetch_assoc()){
    $dateText =$row['Send_at']; 
    $timestamp = strtotime($dateText);
    $time = date('h:i a', $timestamp);
if($row['Sender'] == 'user1'){
    echo '<div class="senderMsgContainer"><span class="senderMsg">'.$row['Message'].'</span><br><span class ="sendAt">'.$time.'</span> </div>' ;
}else{
    echo '<div class="recieverMsgContainer"> <span class="recieverMsg">'.$row['Message'].'</span><br><span class ="sendAt">'.$time.'</span> </div>';

}  
}
?>