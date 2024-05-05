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
$del=$data['dele'];

echo $del;
$sql="UPDATE  message SET message='MESSAGE HASBEEN DELETED' WHERE mid=$del";
 if(mysqli_query($conn,$sql)){
 echo "message deleted ";

}
else{
     echo "message not deleted";
}
?>s