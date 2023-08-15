<!doctype html>
<html>
<head>
    <title>
       Check trains
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
        .top {
            font-family: impact;
            padding: 10px;
            width: 150px;
            font-size: 20px;
            border-radius: 14px;
            border: none;
        }

        .top:hover {
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
select,option,input{
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
    <div class="k1">
        <h1 align="center">SELECT AND FILL THE REQUIRED DETAILS </form></h1>
       <form action="cancel.php"><input type="submit" value="cancellation">
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
<label id="hih">Select the Class</label><br><br>
<select name="class">
    <option value="AC">AC</option>
    <option value="General">General</option>
    <option value="Sleeper">Sleeper</option>
</select><br><br>
<label>Select the number of tickets</label><br><br>
<input type="number" name="not"min=1 max=5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>
</div>
<div>
</div><br>
&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp
<input type="submit" value="SHOW" class="top">
</form>
    </div>
</body>
</html>