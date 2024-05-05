<?php

header('Acess-control-Allow-origin:*');
$conn=mysqli_connect("localhost","deep","0234aniket","chat-up");

 if($conn){
     //echo "ok";
 }
  else{
    //echo "not ok";
  }

$data=json_decode(file_get_contents("php://input"),true);
//echo $data['outgoing'];
//echo $data['incoming'];
$status=$data['status'];

//echo $del;
$sql="UPDATE  signup SET status='offline' WHERE uniqueid=$status";
 if(mysqli_query($conn,$sql)){
 echo "offline";

}
else{
     echo "not offline";
}


?>