<?php 
$name=$_POST["Train_Number"];
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'database');
$query="";
$result=mysqli_query($conn,$query);
?>