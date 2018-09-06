<?php
 session_start();
 
 $con=  mysqli_connect("localhost","root","",);

 mysqli_select_db("login")or die(mysqli_error());

 $un=$_POST['username'];
 $ps=$_POST['passowrd'];
 $em=$_POST['email'];
 
$sql="INSERT INTO user(u_name,u_pass,email) 
VALUES 
('$un','$ps','$em')";
 
 $result=  mysqli_query($con,$sql);

 
 if($result)
 {
    
    echo "<script>alert('sss')</script>";
    $_SESSION['username'] = $un;
    header('Location: index.php?username=' . $un);    
 }
/* else
 {

    header('Location: index.php?login=fail');    
 
 }
 */
 
?>
