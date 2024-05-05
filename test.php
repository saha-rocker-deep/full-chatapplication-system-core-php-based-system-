










<?php     session_start();

$_SESSION['id'];?>

<html>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<div class="wrapper">
   <section>

<a href="update-photo.php">profile photo updater</a>


<div class="header">


<div class="first">
<img src="photo 13 kilo da.jpg" class="im" width="20%" height="30%">

<div class="first2">
   <div class="name">ANIKET KUMAR SAHA</div>
   <div class="status"> ACTIVE NOW</div>
</div>






</div>



<div class="second">
<button class="butt">
logout
</button>

</div><!--second-->

</div><!--header-->

<div class="header1">
<input   class="ini"  type="text" placeholder="enter the name to search">
<button class="butt2">

<i style='font-size:24px' class='fas'>&#xf002;</i>
</button>
</div>

<div class="header2">
// <!--friend section-->

<div class="firstone">

<div class="first1">
<img src="photo 13 kilo da.jpg" class="im" width="10%" height="100%">

<div class="first2">
   <div class="name1">ANIKET KUMAR SAHA</div>
   <div class="status1"> <a href="login.php">click to start messaging</a></div>
</div>






</div>

<div class="second1">

</div>

</div><!--firstone-->



</div><!--heaader2-->
   


























































   </section>


</div>




</html>

<style>

input[type="file"]{
    position: relative;
    left:390px;
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
width:5%;
height:20%;
background-color:green;
border-radius:100%;
   }
   .name1{
font-size:16px;

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
   justify-content:;

   position:relative;
   gap:352px;
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
gap:78px;
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
gap:px;
justify-content:center;
align-items:center;
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
















