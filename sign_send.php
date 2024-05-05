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
//echo $data['fname'];
//echo $data['lname'];
//echo $data['email'];
//echo $data['password'];
$fname=$data['fname'];
$lname=$data['lname'];
$email=$data['email'];
$password=$data['password'];
$email=filter_var($email,FILTER_SANITIZE_EMAIL);
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);
//echo $uppercase.$lowercase.$number.$specialChars;







if($fname!=""&& $lname!="" && $email!="" && $password!=""){
        if(!filter_var($email,FILTER_VALIDATE_EMAIL) ){
            echo "REQUIRED A STRONG EMAIL ";







        }
        else{
//checking that the email already have exsists in database
$sql2="SELECT email from signup WHERE email='$email'";
$result=mysqli_query($conn,$sql2);
if(mysqli_query($conn,$sql2)){
    if(mysqli_num_rows($result)>0){
        echo "already exsists";
    }



    else{

        if($uppercase==1 && $lowercase==1 && $number==1 && $specialChars==1){
            echo "password ok";
        $random_id=rand(time(),10000000);
        $sql="INSERT INTO signup(uniqueid,fname,lname,email,password,photo)VALUES('$random_id','$fname','$lname','$email','$password','')";
        if(mysqli_query($conn,$sql)){
        echo "sucess";
        $_SESSION['id']=$random_id;
       ?>
       <script>location.replace("login.php")</script>
       <?php
       
        }
        else{
         echo "SERVER PROBLEM";
        }
           }
          
          
          
        else{
        echo "REQUIRED A STRONG PASWORD";
        }
        
        
        
        
        }





    
}






































        }//else of email
        
}//fname and lname checking if()

else{
    echo "";
}
 
    



















    









      
 
?>
<?php
/*
$sql2="SELECT email from signup WHERE email='$email'";
$result=mysqli_query($conn,$sql2);
if(mysqli_query($conn,$sql2)){
    
$row=mysqli_fetch_assoc($result);
if($row['email']==$email){
    echo "email  have already exsist";
///password("false");
}
else{
echo "email does not exsist";






//password("true");



















}// else of exsistence of email
     


}//num_row
}//query($sql2)


      //echo "email ok";










*/?>