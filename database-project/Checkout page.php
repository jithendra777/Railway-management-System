<?php
$y=$_POST["y"];
$not=$_POST["not"];
$z=$y-$not;
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'database');
$f1=$_POST["f1"];
$l1=$_POST["l1"];
$ph1=$_POST["ph1"];
$n1=$_POST["n1"];
$g1=$_POST["g1"];
$f2=$_POST["f2"];
$l2=$_POST["l2"];
$ph2=$_POST["ph2"];
$n2=$_POST["n2"];
$g2=$_POST["g2"];
$f3=$_POST["f3"];
$l3=$_POST["l3"];
$ph3=$_POST["ph3"];
$n3=$_POST["n3"];
$g3=$_POST["g3"];
$f4=$_POST["f4"];
$l4=$_POST["l4"];
$ph4=$_POST["ph4"];
$n4=$_POST["n4"];
$g4=$_POST["g4"];
$f5=$_POST["f5"];
$l5=$_POST["l5"];
$ph5=$_POST["ph5"];
$n5=$_POST["n5"];
$g5=$_POST["g5"];
$i=0;
   if($ph1!='')
    {
      $query="insert into personal_details values('$f1','$l1','$ph1','$z','$n1','$g1')";
      mysqli_query($conn,$query);
      $z=$z+1;
    }
    if($ph2!='')
    {
      $query="insert into personal_details values('$f2','$l2','$ph2','$z','$n2','$g2')";
      mysqli_query($conn,$query);
      $z=$z+1;
    }
    if($ph3!='')
    {
      $query="insert into personal_details values('$f3','$l3','$ph3','$z','$n3','$g3')";
      mysqli_query($conn,$query);
      $z=$z+1;
    }
    if($ph4!='')
    {
      $query="insert into personal_details values('$f4','$l4','$ph4','$z','$n4','$g4')";
      mysqli_query($conn,$query);
      $z=$z+1;
    }
    if($ph5!='')
    {
      $query="insert into personal_details values('$f5','$l5','$ph5','$z','$n5','$g5')";
      mysqli_query($conn,$query);
      $z=$z+1;
    }
?>
<!DOCTYPE html>
<html>
<head>
<style>
body {
  font-family: 'Courier New', monospace;
  font-size: 17px;
  padding: 8px;
}
.column {
  margin: 0 -16px;
  padding: 0 16px;
}
.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}
input {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 25%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}
.btn:hover {
  background-color: #2ca532;
}
</style>
</head>
<body>
          <div class="container">
            <form action="thankyou.php" method="post">
              <input type="hidden" value="<?php echo $not*350;?>" name="amount">
                <div class="column">
                  <h3>Payment &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp  &nbsp&nbsp  &nbsp&nbsp  &nbsp&nbsp  &nbsp&nbsp  &nbsp&nbsp  &nbsp&nbsp  &nbsp&nbsp  &nbsp&nbsp  &nbsp&nbsp  &nbsp&nbsp  &nbsp&nbsp  &nbsp&nbsp  &nbsp&nbsp  &nbsp&nbsp  &nbsp&nbsp  &nbsp&nbsp  &nbsp&nbsp  &nbsp&nbsp  &nbsp&nbsp  &nbsp&nbsp  &nbsp The amount is <?php echo $not*350 ;?></h3>
                  <label >Name on Card</label>
                  <input type="text" placeholder="Ex:-Madhav Krishna" name="name">
                  <label >Credit card number</label>
                  <input type="text" placeholder="1111-2222-3333-4444" name="cardno">
                  <label >Exp Month</label>
                  <input type="text" placeholder="September">
                      <label >Exp Year</label>
                      <input type="text" placeholder="2018">
                      <label >CVV</label>
                      <input type="text" placeholder="XXX">
                &nbsp&nbsp  &nbsp&nbsp  &nbsp&nbsp  &nbsp&nbsp  &nbsp&nbsp  &nbsp&nbsp  &nbsp&nbsp  &nbsp&nbsp  &nbsp&nbsp  &nbsp&nbsp &nbsp&nbsp  &nbsp&nbsp   &nbsp&nbsp  &nbsp&nbsp  &nbsp&nbsp  &nbsp&nbsp  &nbsp&nbsp  &nbsp&nbsp  &nbsp&nbsp  &nbsp&nbsp  &nbsp&nbsp  &nbsp&nbsp  &nbsp&nbsp  &nbsp&nbsp  &nbsp&nbsp  &nbsp&nbsp  &nbsp&nbsp &nbsp&nbsp  &nbsp&nbsp  &nbsp&nbsp  &nbsp&nbsp          
                      <input type="submit" value="Pay" class="btn">
                      <input type="hidden" value="<?php echo $_POST["not"]; ?>" name="not">
          <input type="hidden" value="<?php echo $z;?>" name="start">
            </form>
          </div>
      </body>
      </html>