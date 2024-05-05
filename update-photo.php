<?php

session_start();

$_SESSION['change'];
$sess=$_SESSION['change'];
if(isset($_POST['submit'])){
    $file2= $_FILES['photo']['name'];
    $file5=$_FILES['photo']['tmp_name'];
    $file6="./".$file2;
 
    echo $file2;
 
 
 
 
 
 
header('Acess-control-Allow-origin:*');
$conn=mysqli_connect("localhost","deep","0234aniket","chat-up");

 if($conn){
     echo "ok";
 }
  else{
    echo "not ok";
  }

  if(move_uploaded_file($file5,$file6)){
  //  echo "reached sucessfully";
    
  $sql="UPDATE signup SET photo='$file2' WHERE uniqueid='$sess'";
  if(mysqli_query($conn,$sql))
  {
      // echo  "send......";
  }
  else{
  echo "sql not right";
  }





  }

  else{
    echo "sucessfully not reached";
}





}
?>
<form method="POST" ACTION="update-photo.php" enctype="multipart/form-data">
     <input type="file" name="photo" width="100%" height="100%">

     <input type="submit" name="submit" value="submit">
</form>
<style>
input[type="file"]{
font-size:30px;

}
input[type="submit"]{
    font-size:30px;
}

form{
    display:flex;
    flex-direction:column;
    justify-content:center;
}
</style>