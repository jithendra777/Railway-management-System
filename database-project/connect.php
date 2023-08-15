<?php 
session_start();
$_SESSION["username"]=$_POST["username"];
$username=$_POST["username"];
$password=$_POST["password"];
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'database');
$query="select * from customer where emailID='$username' and passwords='$password'";
$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)==1){
    echo "you are successfully logged in";
    header("Location: htmlproject.php");
    exit();
}
else{
    echo "invalid username or password";
    exit();
}
?>
