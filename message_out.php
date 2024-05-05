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
$out=$data['outgoing'];
$in=$data['incoming'];



$sql="SELECT * FROM message WHERE (outgoingid=$out  and incomingid=$in)  or (outgoingid=$in  and incomingid=$out) ORDER BY mid";

if(mysqli_query($conn,$sql))
{
     // echo "sql right";
      $result=mysqli_query($conn,$sql);

    $response=array();
    $text="";
    while($row=mysqli_fetch_all($result,MYSQLI_ASSOC)){
        $response[]=$row;
    
       // $text+="<div class='outgoing'>"+$row['message']+"</div>";
  
}
echo json_encode($response);
//echo $text;


 
 

}
else {
      die("sql query failed");
}






?>