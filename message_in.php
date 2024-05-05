<?php
header('Acess-control-Allow-origin:*');
$conn=mysqli_connect("localhost","deep","0234aniket","chat-up");

 if($conn){
     echo "ok";
 }
  else{
    echo "not ok";
  }

$data=json_decode(file_get_contents("php://input"),true);
echo $data['out'];
echo $data['in'];
echo $data['message'];
echo $data['extension'];
$out= $data['out'];
$in= $data['in'];
$message= $data['message'];
$extension=$data['extension'];

if($extension!=""){

$sql="INSERT INTO message(outgoingid,incomingid,message,extension)VALUES('$out','$in','$message','$extension')";
if(mysqli_query($conn,$sql))
{
     echo  "send......";
}
else{
echo "sql not right";
}
}
else{

  $extension="";
  $sql="INSERT INTO message(outgoingid,incomingid,message,extension)VALUES('$out','$in','$message','$extension')";
  if(mysqli_query($conn,$sql))
  {
       echo  "send......";
  }
  else{
  echo "sql not right";
  }


}
?>