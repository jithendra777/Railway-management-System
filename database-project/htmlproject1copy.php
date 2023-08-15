<!doctype html>
<html>

<head>
    <title>
        7HITTER
    </title>
    <link rel="stylesheet" href="style.css">

    <style>
        .hello {
            background-color: #e35d46fa;
            margin-top: 30px;
            height: 18px;
            padding: 28px;
            padding-right: 10px;
            padding-left: 10%;
         
    
        }
        
        

        button {
            width: 110px;
            height: 35px;
            font-family: impact;
            font-size: 15px;
            background-color: #e35d46fa;
            border-radius: 7px;
            border: none;
        }

        .hi {
            width: 25px;
        }


        
        button:hover {
            background-color: #e35d46fa;
            color: rgb(255, 255, 255);
        }

        .aboutus {
            background-color: #e35d46fa;
            Height: 200px;
        }

        input {
            font-family: impact;
            padding: 10px;
            width: 150px;
            font-size: 20px;
            border-radius: 14px;
            border: none;
        }

        input:hover {
            background-color: rgb(72, 238, 30);
            color: rgb(255, 255, 255);
        }

        .mycontact {
            width: 80px;
            height: 45px;
            font-size: 20px;
        }
        .madhav{
    background-color: #65e0e4;
float: left;
width:68%
}
.madhav1{
    background-color:#65e0e4;
    
}
.Krishna{
display:table;
border-radius:5px;
margin: 4%;
background-color: #c6f8fa;
padding:2%;
width:90%
}
select,option{
font-family: 'Courier New', monospace;
width:25%;
font-size: 34px;
background-color: rgb(240, 236, 231);
border-radius:6px;
}
label{
    font-size: 25px;
}
input{
    font-family: 'Courier New', monospace;
    background-color: rgb(240, 236, 231);
    border-radius:6px;
    width:25%;
font-size: 34px;   
}
.top{
    font-family: 'Courier New', monospace;
    background-color: rgb(240, 236, 231);
    border-radius:6px;
    
    width:25%;
    background-color: #65e0e4;
font-size: 34px;    
}
.top:hover{
    background-color: #c6f8fa;
  color:black;
}
    </style>
</head>

<body>
    <div class="hello">
        <font face="impact" size="5" color="white">INDIAN RAILWAYS</font>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a
            href="Signup.php"><button>SIGN
                UP</button></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a
            
            href=""><button>PNR STATUS
                </button></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <a
            href=""><button>CANCEL TICKET</button></a>
    </div>
    
   
    <div class="k1">
        <h1 align="center">SELECT AND FILL THE REQUIRED DETAILS</h1>
    <form action="connect1.php" method="post">
<div class="Krishna">
<div class="madhav">
<label id ="hello">Select the starting place</label><br><br>
<select name="From">
    <option value="Bengaluru">Bengaluru</option>
    <option value="Nellore">Nellore</option>
    <option value="Delhi">Delhi</option>
    <option value="Vizag">Vizag</option>
</select><br><br>
<label id="hi">Select the destination place</label><br><br>
<select name="To">
    <option value="Hyderabad">Hyderabad</option>
    <option value="Coimbatore">Coimbatore</option>
    <option value="Chennai">Chennai</option>
    <option value="Vellore">Vellore</option>
</select><br><br>
</div>
<div class="madhav1">
<label>Select the date</label><br><br>
<input type="date" name="date" ><br><br>
<label id="hih">Select the type</label><br><br>
<select>
    <option value="AC">AC</option>
    <option value="General">General</option>
    <option value="Sleeper">Sleeper</option>
</select><br><br>
</div>
</div>
<div>

</div><br><br><br>
&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp
<input type="submit" value="SHOW" class="top">
    </div>
</body>
<?php
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$email=$_POST["email"];
$password=$_POST["pwd"];
$dob=$_POST["DOB"];
$gender=$_POST["gender"];
$occupation=$_POST["Occupation"];
$nationality=$_POST["nationality"];
$conn=mysqli_connect('localhost','root','');
 mysqli_select_db($conn,'database');
$query="insert into customer value('$firstname','$lastname','$email','$password','$dob','$gender','$occupation','$nationality')";
mysqli_query($conn,$query);
?>
</html>