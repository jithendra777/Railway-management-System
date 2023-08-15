<?php
session_start();
$username=$_SESSION["username"];
$From=$_POST["From"];
$To=$_POST["To"];
$not=$_POST["not"];
$class=$_POST["class"];
$trainnumber=$_POST["Train_Number"];
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'database');
$query="select * from personal_details";
$result=mysqli_query($conn,$query);
$s=mysqli_num_rows($result);
$y=100+$s;
$z1=1;
for($x=1;$x<=$not;$x++)
{
$query1="insert into ticket values('$From','$To','$class','$y','','$z1','$username','$trainnumber')";
$result=mysqli_query($conn,$query1);
$y=$y+1;
$z1=$z1+1;
}
?>
<!doctype html>
<html>
<head>
  <style> personal details</style> 
    </head>
    <style>
        h2{
            margin-left:30%;
            border-left:20px;
            
        }
        .box{
            background-color: black;
            color: white;
            border:10px;
            border-left:5%;
            border-right:20px;
            margin-left:1%;
            margin-right:10px;
            text-align: middle;
            border-top:20px;
            margin-top: 20px;
            padding-left: 5%;
            padding-top:2%;
        }
        .box button:hover{
            background:#ff96ad;
            box-shadow: 0 0 5px #ff96ad,0 0 25px;
        }

        </style>
    <body>
     
        <h2>Please Enter the personal details</h2>
        <div class="box">
        <form action="Checkout page.php" method="post">
            <input type="hidden" value="<?php echo $_POST["not"]; ?>" name="not">
            <input type="hidden" value="<?php echo $y; ?>" name="y">
           <ol >
           <li>
               <p>First name:<input type="text" name="f1"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  Last name:<input type="text" name="l1"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  dob:<input type="date" name="n1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  phone number:<input type="text" name="ph1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  Gender:<select name="g1">
                     <option>select</option>
                      <option>male</option>
                      <option>female</option>
                      <option>others</option></p>
                         
                      </select>

           </li>
           <li>
            <p>First name:<input type="text" name="f2"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Last name:<input type="text" name="l2"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               dob:<input type="date" name="n2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               phone number:<input type="text" name="ph2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               Gender:<select  name="g2">
                <option>select</option>
                   <option>male</option>
                   <option>female</option>
                   <option>others</option></p>
                      
                   </select>

        </li> 
        <li>
            <p>First name:<input type="text" name="f3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Last name:<input type="text" name="l3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               dob:<input type="date" name="n3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               phone number:<input type="text" name="ph3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               Gender:<select  name="g3">
                <option>select</option>
                   <option>male</option>
                   <option>female</option>
                   <option>others</option></p>
                      
                   </select>

        </li>
        <li>
            <p>First name:<input type="text" name="f4"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Last name:<input type="text" name="l4"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               dob:<input type="date" name="n4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               phone number:<input type="text" name="ph4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               Gender:<select  name="g4">
                <option>select</option>
                   <option>male</option>
                   <option>female</option>
                   <option>others</option></p>
                      
                   </select>

        </li>
        <li>
            <p>First name:<input type="text" name="f5"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Last name:<input type="text" name="l5"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               dob:<input type="date" name="n5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               phone number:<input type="text" name="ph5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               Gender:<select  name="g5">
                <option>select</option>
                   <option>male</option>
                   <option>female</option>
                   <option>others</option></p>
                      
                   </select>

        </li>
           
           </ol>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <button type="submit">Book</button>
        </form>

    </div>

        
    </body>
</html>