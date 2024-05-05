<?php
header('Acess-control-Allow-origin:*');
$conn=mysqli_connect("localhost","deep","0234aniket","chat-up");

 if($conn){
     //echo "ok";
 }
  else{
   // echo "not ok";
  }

$data=json_decode(file_get_contents("php://input"),true);


//echo $data['search'];
//echo $data['myid'];


$search= $data['search'];
$myid=$data['myid'];


$sql="SELECT * FROM signup WHERE uniqueid!=$myid and (fname LIKE '%$search%' or lname LIKE '%$search%' )";


if(mysqli_query($conn,$sql))
{
     // echo "sql right";
      $result=mysqli_query($conn,$sql);

    $response=array();
    while($row=mysqli_fetch_all($result,MYSQLI_ASSOC)){

        $response[]=$row;
    
    
  
}
echo json_encode($response);


 
 

}
else {
      die("sql query failed");
}












?>