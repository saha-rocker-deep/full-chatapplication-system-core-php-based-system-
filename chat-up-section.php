<?php     session_start();


$sess=$_SESSION['id'];
//$td=$_GET['td'];
//$fd='fd'.$_GET['td'];
$get=$_SESSION['fd'];

 $conn=mysqli_connect("localhost","deep","0234aniket","chat-up");
 //$user=mysqli_real_escape_string($conn,$get);
 //echo $user;
$sql="SELECT * FROM signup WHERE uniqueid=$get";

 if($conn){

 }
  else{
          
  }
  if(mysqli_query($conn,$sql))
  {
   $result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result))
{
        $id=$row['uniqueid'];
}
}
 else{
    echo "not sql";
 }
 //echo $id;
 ?>

<html>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

<body>


<div  class="wrapper">
<section>
<header  class="upper-part">
<?php  
header('Acess-control-Allow-origin:*');
$conn=mysqli_connect("localhost","deep","0234aniket","chat-up");
$sql="SELECT * FROM signup WHERE uniqueid=$get";

 if($conn){

 }
  else{
   
  }
  if(mysqli_query($conn,$sql))
  {
   $result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
?>




<div class="d">
<div class="arrow"><i style='font-size:24px' class='fas'>&#xf060;</i></div>
<div class="im"><img width="100%" height="100%" src="<?php  echo $row['photo'] ?>" alt=""></div>
<div class="t-content">
<div class="name"><?php  echo $row['fname']." ".$row['lname']; ?></div>

<div class="status"><?php  echo $row['status']?></div>

</div>
</div>
<?php

}
  }
?>
<div class="head-second">
<form action="chat-up-section.php" method="POST"  enctype="multipart/form-data">
<input type="file" name="doc" style="font-size:20px; color:pink;" >
<input type="submit" style="width:30%;height:40%; font-size:20px;color:white; background:black; border-radius:10%;">
</form>

</div>
</header>


<div class="second-part">










</div>

<!--<div class="typing-area">-->

<div class="typing-area">

 <input type="hidden"  class="outgoing1"   value="<?php echo $sess;?>" >
 <input type="hidden"  class="incoming1"   value="<?php echo $get;?>">

    <input type="text" class="write"  placeholder="Type a message here.....">
    <button>
<i class="fab fa-telegram-plane"></i>

    </button>
</div>

<!--</div>-->


</section>

</div>


</body>


</html>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script>

//

delete chat





$(document).on("click",".outgoing" , function(){
        val= $(this).data("eid");
        console.log(val);
        data={
              dele:val
        }
        s=JSON.stringify(data);
        jQuery.ajax({
   url:'delete-chat.php',
   type:'POST',
   data:s,
   success:function(result){
       console.log(result);
   // console.log(JSON.parse(result))
     // p=JSON.parse(result);
      //console.log(JSON.parse(result
      //console.log(p[0].length);
     
     
   }
     
     
    
     
     
     
     
     
   
     
     
     
     
     
     
     
     
   
});


})

$(document).on("click",".incoming" , function(){
        val= $(this).data("eid");
       // console.log(val);
        data={
              dele:val
        }
        s=JSON.stringify(data);
//console.log(s);
jQuery.ajax({
   url:'delete-chat.php',
   type:'POST',
   data:s,
   success:function(result){
       console.log(result);
   // console.log(JSON.parse(result))
     // p=JSON.parse(result);
      //console.log(JSON.parse(result
      //console.log(p[0].length);
     
     
   }
     
     
    
     
     
     
     
     
   
     
     
     
     
     
     
     
     
   
});
    

});




//send doc

<?php
if(isset( $_FILES['doc']['name'])){
$name= $_FILES['doc']['name'];
$tmp=$_FILES['doc']['tmp_name'];
$dir='./'.$name;
if(move_uploaded_file($tmp,$dir)){
    ?>
    
      var data="<?php echo $name;?>";
   //   console.log(data);
   m1(data);
      function m1(data){
          console.log(data);

          let text = data;
const myArray = text.split(".");

var p=myArray.length;
p=p-1;
console.log(myArray[p]);

extension=myArray[p];
          outgoing=$(".outgoing1").val();
   incoming=$(".incoming1").val();
    message=data;
    
    console.log(message,outgoing,incoming);
 
 
// $(".write").val("");
    
 
 
 




data={
     out:outgoing,
     in:incoming,
     message:message,
     extension:extension
};

s=JSON.stringify(data);

    jQuery.ajax({
    url:'message_in.php',
    type:'POST',
    data:s,
    success:function(result){
        console.log(result);
    // console.log(JSON.parse(result));
      // p=JSON.parse(result);
       //console.log(JSON.parse(result));
       //console.log(p[0].length);
      
      
    }
      
    
});
     

          













      }
    
    <?php
}

else{
      echo "not ok";
}
}



else{
  
}
?>








    $("button").on("click",function(){
    //    val=$(".outgoing").html();
      //  val1=$(".incoming").html();
        outgoing=$(".outgoing1").val();
    incoming=$(".incoming1").val();
    message=$(".write").val();
    
    console.log(message,outgoing,incoming);
 
 
 $(".write").val("");
    
 
 
 




data={
     out:outgoing,
     in:incoming,
     message:message
};

s=JSON.stringify(data);

    jQuery.ajax({
    url:'message_in.php',
    type:'POST',
    data:s,
    success:function(result){
        console.log(result);
    // console.log(JSON.parse(result));
      // p=JSON.parse(result);
       //console.log(JSON.parse(result));
       //console.log(p[0].length);
      
      
    }
      
    
});
     





       // console.log(val,val1,val2,val3);



    });

    setInterval(function(){ 
	
outgoing=$(".outgoing1").val();
incoming=$(".incoming1").val();
  //console.log(outgoing,incoming);
  data={
     outgoing:outgoing,
     incoming:incoming
  };
  s=JSON.stringify(data);

    jQuery.ajax({
    url:'message_out.php',
    type:'POST',
    data:s,
    success:function(result){
   //     console.log(result);
   //  console.log(JSON.parse(result));
      p=JSON.parse(result);
     // console.log(JSON.parse(result));
      // console.log(p[0].length);
       i=0;
       text="";
       console.log($(".d").find("img").val());
      while(p[0].length>i){
if(p[0][i].outgoingid==outgoing){

if(p[0][i].extension!=""){
     console.log(p[0][i].message);

   if(p[0][i].extension=="jpeg"){
   console.log(p[0][i].message,"jpeg");

   text+="<div class='outgoing' data-eid='"+p[0][i].mid+"'><img src="+p[0][i].message+" width='100%' height='50%'></div>";
   }
   else if(p[0][i].extension=="jpg"){
    console.log(p[0][i].message,"jpg");

text+="<div class='outgoing' data-eid='"+p[0][i].mid+"'><img src="+p[0][i].message+" width='100%' height='50%'></div>";

   }
else if(p[0][i].extension=="mp4"){
 /*   <video width="320" height="240" controls>
        <source src="Settings 2022-07-17 22-46-41.mp4">
      
        Your browser does not support the video tag.
      </video>*/

console.log(p[0][i].message);
      text+="<div class='outgoing' data-eid='"+p[0][i].mid+"'><video  width='100%' height='20%' controls> <source src="+p[0][i].message+"type='video/mp4'></video></div>";


}


else if(p[0][i].extension=="ogg"){
 /*  else if(p[0][i].extension=="mp4"){
 /* <audio controls>
  <source src="horse.ogg" type="audio/ogg">
  <source src="horse.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
*/

console.log(p[0][i].message);
      text+="<div class='outgoing' data-eid='"+p[0][i].mid+"'><audio   controls> <source src=localhost/jquery files/chat-up system/"+p[0][i].message+"type='audio/ogg'></audio></div>";


}
  







 
//text+="<div class='outgoing' data-eid='"+p[0][i].mid+"'>"+p[0][i].message+"</div>";
}
else{
    
text+="<div class='outgoing' data-eid='"+p[0][i].mid+"'>"+p[0][i].message+"</div>";
}

}


















else{
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    console.log($(".d .im img").attr('src'));
    val=$(".d .im img").attr('src');
 
    text+="<div class='incoming-part'><img class='pic' width='5%' height='4%' src='"+val+"' alt=''><div class='incoming'data-eid='"+p[0][i].mid+"'>"+p[0][i].message+"</div></div>";
}





        i++;
      }
      console.log(text);
      $(".second-part").html("");
      $(".second-part").html(text);
      
    }
    });


},200);//run this thang every 2 seconds




    </script>

<style>

.head-second{
    display:flex;
    margin-top:
    width:50%;
    height:80%;
    
}

.head-second form{
    display:flex;
    flex-direction:row;

    align-items:center;

}
.typing-area{
    background-color:white;
    border:1px solid white;
    width:100%;
   height:10%;
   

}









    

form{
  

   
}



button {
    width:9%;
    height:50%;
    padding:10px 10px 10px 10px 10px ;
    font-size:25px;
}



input{
  
   width:90%;
   height:50%;
   padding:10px 10px 10px 10px 10px ;
   font-size:25px;

}

input,button{
    margin-top:20px;
}






body{
display:flex;
flex-direction:row;
justify-content:center;
align-items:center;
background-color: #F5F5F5;

}
.wrapper{
background-color:#F5F5F5;

border:3px solid white;
width:50%;
height:90%;
border-radius:10px;
box-shadow:0px 0px 2px 2px 	#E8E8E8;
}
header{
width:100%;
 height:10%;
 background-color:white;
 border:1px solid
 border-radius:px;
 display:flex;
 flex-direction:row;
gap:89px;

 
}
.d{
    width:50%;
    height:80%;
    margin-top:10px;
    display:flex;
    flex-direction:row;
    gap:10px;
    background-color:
    color:white;

}
img{



border-radius:100%;
background-color:black;

}
.arrow{
      margin-top:30px;
}
section{

}
.t-content{
    margin-top:
     display:flex;
      flex-direction:column;

}
.name{
    font-size:17px;
    font-weight:bolder;
    margin-top:10px;
}
.status{
font-weight:bold;

}
.second-part{
    width:100%;
    height:80%;
    overflow-y:auto;

}
.second-part::-webkit-scrollbar{/////////*********************** */
    width:0px;
    height:0px;
}
.outgoing{
    color :white;
    margin-left:412px;
    width:40%;
   font-size:17px;
    background-color:black;
    margin-top:10px;
    border:1px solid black;
    border-radius:5px;s
    padding:6px 6px;
    word-wrap:break-word;

}
.incoming-part{
    display:flex;
margin-top:40px;





     
}
.incoming{
    color :black;

   width:40%;
  
   background-color:white;
   margin-top:
   border:1px solid black;
   border-radius:5px;s
   padding:6px 6px;
   word-wrap:break-word;
     
}
 .pic{
    position:relative;
   
 }
    </style>

