

<?php
session_start();
header('Acess-control-Allow-origin:*');
$conn=mysqli_connect("localhost","deep","0234aniket","chat-up");

 if($conn){
     //echo "ok";
 }
  else{
   // echo "not ok";
  }

$data=json_decode(file_get_contents("php://input"),true);

//echo $_SESSION['id'];


if(!empty($data['email']&&$data['password'])){
$email=$data['email'];
$password=$data['password'];
   // echo "YOUR-ID:".$_SESSION['id'];

    $sql2="SELECT * from signup WHERE email='$email' and password='$password'";
    $result=mysqli_query($conn,$sql2);
    if(mysqli_query($conn,$sql2)){
        if(mysqli_num_rows($result)>0){
        

    
          //  $response=array();
            while($row=mysqli_fetch_array($result)){
            //$row['uniqueid'];
            if($row['password']==$password){
               $_SESSION['id']=$row['uniqueid'];
               echo $_SESSION['id'];
            }
           //   $_SESSION['id']=$row['uniqueid'];
             //   echo $_SESSION['id'];
            
         //  <script>location.replace("chatter-peopel2.php");</script>
            
      // $response[]=$row;


            
            
          
        }






        }


      // echo json_encode($response);
        
        
          
       
         
         
         
        }


}




?>