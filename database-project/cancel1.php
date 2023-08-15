<?php

$host = 'localhost';
$username = 'root';
$password = '';
$db = 'database';
$var = $_POST["ticketno"];
$con = mysqli_connect ($host,$username,$password);
mysqli_select_db($con , $db );
$query="select Ticket_Number from ticket where Ticket_Number='$var'";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)==1)
{
$query="DELETE FROM personal_details WHERE Ticket_Number='$var'";
mysqli_query($con,$query);
$query="DELETE FROM ticket WHERE Ticket_Number='$var'";
mysqli_query($conA,$query);
print ('Ticket cancelled successfully ');
}
else{
   echo "no tickets are there with that ticket number"; 
}
?>