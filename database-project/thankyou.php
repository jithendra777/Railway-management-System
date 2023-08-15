<?php
session_start();
$emailid=$_SESSION["username"];
$start=$_POST["start"];  
$not=$_POST["not"];
$y=$start-$not;
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'database');
for($i=1;$i<=$not;$i++)
{
$query="update ticket set status='booked' where Ticket_Number='$y'";
mysqli_query($conn,$query);
$y=$y+1;
}
$cardno=$_POST["cardno"];
$amount=$_POST["amount"];
$date=date("Y/m/d");
$query="select * from payments";
$result=mysqli_query($conn,$query);
$s=mysqli_num_rows($result);
$y=1000+$s;
$query1="insert into payments values('$y','credit/debit','$date','$emailid','$amount','$cardno')";
mysqli_query($conn,$query1);
?>
<!doctype html>
<html>
<head><br><br><br><br><br><br><br><br><br><br>
    <style>p{font-family: 'Courier New', monospace;
    font-size:60px;
    }</style>
</head>
<body>
    <p align="center">THANK YOU YOUR TICKETS ARE BOOKED!!!!</p>
</body>
</html>