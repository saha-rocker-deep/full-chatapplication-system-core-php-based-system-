<?php
session_start();
$_SESSION['id']=$_GET['kd'];
echo "my id" .$_SESSION['id'];
echo "my friend";
$_SESSION['fd']=$_GET['fd'];
echo $_SESSION['fd'];
?>
<script>
    location.replace("chat-up-section.php");
</script>