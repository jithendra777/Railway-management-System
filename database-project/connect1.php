<html>
<head>
    <style>
        h1{
            font-family: 'Courier New', monospace;
            margin-left:450px;
        }
        table{
            font-family: 'Courier New', monospace;
            margin-left:250px;
        }
    </style>
</head>
    <body>
        
    <?php 
$From=$_POST["From"];
$To=$_POST["To"];
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'database');
$query="Select * from train where Starting_place='$From' and Ending_Place='$To'";
$result=mysqli_query($conn,$query);

?>
    <h1>The Available Trains are </h1>
<table border="1" align="Centre">
    <tr>
<th>Train name</th>
<th>Train number</th>
<th>Starting Place</th>
<th>Ending Place</th>,
<th>Train Type</th>
<th>Arrival Time</th>
<th>Departure Time</th>
</tr>
<?php
while($row=mysqli_fetch_assoc($result))
{
?>
<tr>
<form method="post" action="personaldetails.php"><td><?php echo $row['Train_Name'];?></td>
<input type="hidden" value="<?php echo $_POST["From"]?>" name="From">
<input type="hidden" value="<?php echo $_POST["To"]?>" name="To">
<input type="hidden" value="<?php echo $_POST["not"]?>" name="not">
<input type="hidden" value="<?php echo $_POST["class"]?>" name="class">
    <td><input type="submit" name= "Train_Number"value="<?php echo $row['Train_Number'];?>"
     style="background-color: white; border: none; cursor:pointer; text-decoration:underline; color:red;" name="Train_Number"></td>
    <td><?php echo $row['Starting_Place'];?></td>
    <td><?php echo $row['Ending_Place'];?></td>
    <td><?php echo $row['Train_Type'];?></td>
    <td><?php echo $row['Arrival_Time'];?></td>
    <td><?php echo $row['Depature_Time'];?></td></a>
</tr>
<?php
}
?>
</table>
</form>
</body>
</html>