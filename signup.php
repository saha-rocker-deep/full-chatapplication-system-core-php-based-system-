<html>

<div class="wrapper">
    <section>
<div class="tex">
    <p> Realtime chat APP</p>


</div>

<div class="error" style="display:none;">
    All input field  are  required!

</div>



<div class="fl">


<input type="text" id="first" placeholder="first" class="f">

<input type="text" id="last" placeholder="last" class="l"></div>

<div class="one">
<input type="text" id="email" class="em" placeholder="email">
</div>

<div class="one">
<input type="text" id="password" class="em" placeholder="password">
</div>







<div class="one">

<button class="em">continue to chat </button>
</div>


<div class="one1">
ALREADY SIGNED UP?<a href="#">LOGIN NOW</a>
</div>



</section>

</div>


</html>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script>

$("button").on("click",function(){
fname=$("#first").val();
lname=$("#last").val();

email=$("#email").val();
password=$("#password").val();

if(fname!="" && lname!="" &&  email!=""  && password!=""){
//console.log(email,password,fname,lname);


$("#first").val("");
$("#last").val("");
$("#email").val("");
$("#password").val("");


data={
        fname:fname,
        lname:lname,
        email:email,
        password:password
      };
      s=JSON.stringify(data);
      jQuery.ajax({
  url:'sign_send.php',
  type:'POST',
  data:s,
  success:function(result){
      console.log(result);
  // console.log(JSON.parse(result));
    // p=JSON.parse(result);
     //console.log(JSON.parse(result));
     //console.log(p[0].length);
     if(result!=""){
     $(".error").html(result);
     $(".error").show();
     console.log(result);
     }
     else{
        $(".error").hide();
     }
    
  }
});
















}
else{












    $(".error").show();








}



});

    </script>
<style>
.em{
width:97%;
height:200%;
border-radius:5px;


}
input[type="file"]{
    width:97%;
height:200%;
 font-size:40px;
}
button{
    font-size:30px;
    color:white;
    background-color:black;
}
 input{
      font-size:21px;
 }
.one{ 
     margin-top:32px;
     margin-left:22px;
ss
}
.one1{
     display:flex;
      flex-direction:row;
       justify-content:center;
       align-items:center;
       margin-top:32px;
       font-size:25px;
}
    .fl{
          display:flex;
           flex-direction: row;
           margin-top:32px;
           margin-left:22px;
           gap:9px;
    }
    .f,.l{
        width:48%;
        height:200%;
        border-radius:5px;
    }
.wrapper{
background-color:white;
width:50%;
height:80%;
box-shadow:0px 0px 2px 2px 	#E8E8E8;

}
.error{
    width:90%;
    height:5%;
    background-color:#E56E94;
     display:flex;
      flex-direction:row ;
       justify-content:center;
        align-items: center;
        margin-left:32px;
         font-size:27px;
         border-radius:10px;
         word-wrap:break-word;
}
section{
      width:100%;
      height:100%;
       display:flex;
        flex-direction:column;
        gap:55px;
}
.tex{
          color:black;
          font-family:bolder;
           font-size:53px;
           margin-left:32px;
}
 body{
      display:flex;
      flex-direction:row;
      justify-content:center;
       align-items:center;
       background-color:#F5F5F5;
 }

</style>