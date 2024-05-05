<?php     
session_start();

 //$_SESSION['p']=$_GET['td'];
 //$_SESSION['id']=$_SESSION['p'];



// $_SESSION['id']=$_GET['td'];

 $sess=$_SESSION['id'];
 $_SESSION['change']=$_SESSION['id'];


 echo $sess;

 $conn=mysqli_connect("localhost","deep","0234aniket","chat-up");
 
 if(!empty($sess)){
    $sql3="UPDATE  signup  SET status='online'  WHERE uniqueid='$sess'";
    if(mysqli_query($conn,$sql3)){
        echo "just come in online";
    }
     else{
     echo "not in online";

     }
 }
 
 
 

 
 ?>
<html>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<div class="wrapper">
    <section>
    <a href="update-photo.php">profile photo updater</a>
<div class="header">
<?php  
header('Acess-control-Allow-origin:*');
$conn=mysqli_connect("localhost","deep","0234aniket","chat-up");
$sql="SELECT * FROM signup WHERE uniqueid='$sess'";

 if($conn){

 }
  else{
   
  }
  if(mysqli_query($conn,$sql))
  {
   $result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
?>



   













 
 
 
 



<div class="first">
<img src="<?php echo $row['photo'];?>" class="im" width="20%" height="30%">

<div id="change" class="first2">
    <div class="name"><div> <?php echo $row['fname'];?></div> <div> <?php echo $row['lname'];?> </div> </div>
    <div class="status"><?php echo $row['status'];?></div>
</div>






</div>



<div class="second">
<button class="butt">
logout
</button>

</div><!--second-->

</div><!--header-->
 <?php  }
  }

else{
echo "sql not right";
}
?>
<div class="header1">
<input   class="ini"  type="text" placeholder="enter the name to search">
<button class="butt2">

<i style='font-size:24px' class='fas'>&#xf002;</i>
</button>
</div>

<div class="header2">
// <!--friend section-->
<?php    
$sql1="SELECT * FROM signup  WHERE uniqueid!='$sess'";
$result1=mysqli_query($conn,$sql1);
if($result1){
    $i=0;
while($row=mysqli_fetch_assoc($result1)){
?>





<div class="firstone">
<div class="first1">
<img src="<?php echo $row['photo']; ?>" class="im" width="10%" height="100%">

<div class="first2">
<div class="name1"><div> <?php echo $row['fname'];?></div> <div> <?php echo $row['lname'];?></div></div>





    <div class="status1"> <a href="chatup-test.php?fd=<?php echo $row['uniqueid'];?>&kd=<?php echo $sess;?>">   

    <?php
    $fd='fd'.$i;

    $_SESSION[$fd]= $row['uniqueid'];
    
    ?>

    click to start messaging</a></div>
</div>






</div>

<div class="second1">
<input  type="hidden"     value='<?php   echo $row['status']; ?>'>
</div>

</div><!--firstone-->

<?php
$i++;
}
}

else{
     echo "not right sql";
}
?>

</div><!--heaader2-->
    


























































    </section>


</div>


<script src="https://code.jquery.com/jquery-2.2.4.min.js">

</script>
<script>
$(".ini").on("keyup",function(){
    search=$(".ini").val();
    id=<?php echo $_SESSION['id'] ;?>;
  //  console.log(id);
    
    data={
     myid:id,
         search:search
    };
    data=JSON.stringify(data);

    jQuery.ajax({
  url:'search_engine.php',
  type:'POST',
  data:data,
  success:function(result){
     // console.log(result);
   console.log(JSON.parse(result))
     p=JSON.parse(result);
     //console.log(JSON.parse(result
     //console.log(p[0].length);
     i=0;
     while(p[0].length>i){
        text="";
        text+="<div class='firstone'><div class='first1'><img src='"+p[0][i].photo +"' class='im' width='10%' height='100%'><div class='first2'><div class='name1'><div>"+p[0][i].fname+"</div> <div> "+p[0][i].lname+"</div></div><div class='status1'> <a href='chatup-test.php?fd="+p[0][i].uniqueid+"'>click to start messaging</a></div></div></div><div class='second1'></div></div>";
        
        
        i++;
     }
    
    $(".header2").html("");
    $(".header2").html(text);
    console.log(text);
  }
    
    
   
    
    
    
    
    
  
    
    
    
    
    
    
    
    
  
});








});

$(".butt").on("click",function(){
    val="";
s=<?php echo $sess?>;
console.log(s);
data={
    status:s
}
data=JSON.stringify(data);
    jQuery.ajax({
    url:'status.php',
    type:'POST',
    data:data,
    success:function(result){
        console.log(result);

if(result=="offline"){
   
   location.replace("login.php");
}
else{
    console.log("not offline");
}


    // console.log(JSON.parse(result));
      // p=JSON.parse(result);
       //console.log(JSON.parse(result));
       //console.log(p[0].length);
      
      
    }
      
    
});



























})




</script>
</html>

 <style>

.status{
    font-size:19px;
}




#change{
    display:flex;
    flex-direction:column;
    gap:5px;
}



    .name{
        display:flex;
    gap:20px;
    }
    a:link{
    text-decoration:none;
 font-size:20px;
 
 
 
}


    .header2::-webkit-scrollbar{
        width:0px;
height:0px;
    }
    .second1{
width:3%;
height:20%;
background-color:green;
border-radius:100%;

    }
    .name1{
font-size:26px;
display:flex;
gap:20px;

    }
    .status1{


    }
    .first1{
        width:59%;
 height:20%;
 display:flex;
  flex-direction:row;
  gap:14px;
  justify-content:center;

  }
    

.firstone{
    width:100%;
    height:20%;
    display:flex;
    flex-direction:row;
    gap:0px;
    justify-content:

    position:relative;
    gap:208px;
    right:70px;ss
}

  
  .butt2{
    width:10%;
    height:40%;
    background-color:black;
    color:white;
  }
  

    .ini{
        width:80%;
        height:40%;
        border-radius:5px;
        font-size:23px;
    }
.butt{
    width:60%;
    height:20%;
    background-color:black;
    font-size:23px;
    font-weight:bolder;
    color:white;
    border-radius:10px;

}

    .im{
        border-radius:100%;
        border:7px solid pink;
    }
.first2{
 
 disp
      font-size:white;
      font-size:26px;
      
    }
  .second{
    width:30%;
    height:100%;
    display:flex;
     flex-direction:row;
     justify-content:center;
     align-items:center;
  }
.first{
     width:70%;
     background-color:white;
     height:100%;
     display:flex;
     flex-direction:row;
     gap:8px;
     justify-content:center;
     align-items:center;

}
.header,.header1,.header2{
    width:100%;

}
.header{
height:20%;
background-color:;
display:flex;
 flex-direction:row;
 gap:188px;
 justify-content:center;
 align-items:center;

}
.header1{
height:10%;
background-color:;
display:flex;
flex-direction:row;
justify-content:center;
align-items:center;
background-color:

}
.header2{

    height:70%;
 width:100%;
    display:flex;
 flex-direction:column;
gap:15px;
 justify-content:space-evenly;
 overflow-y:auto;


}


.wrapper{
background-color:white;
width:50%;
height:90%;
box-shadow:0px 0px 2px 2px 	#E8E8E8;

}
body{
      display:flex;
      flex-direction:row;
      justify-content:center;
       align-items:center;
       background-color:#F5F5F5;
 }

 section{
      width:100%;
      height:100%;
       display:flex;
        flex-direction:column;
       
}





</style>
 
 
 
 
 
 

 
 
 

 
 
 
 
 