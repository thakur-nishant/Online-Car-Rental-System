<?php
 session_start();
 
 $con=  mysql_connect("localhost","root","nishant");

 mysql_select_db("login")or die(mysql_error());

 $un=$_POST['username'];
 $ps=$_POST['password'];
 
$sql="SELECT * FROM uses WHERE userName='$un' AND Password='$ps'";

$result=  mysql_query($sql);

 
 if(mysql_num_rows($result) > 0)
 {
 
    echo "<script>alert('sss')</script>";
    $_SESSION['username'] = $un;
    header('Location: index.html?username=' . $un);    
 }
 else
 {

    header('Location: index.php?login=fail');    
 
 }
 
?>


