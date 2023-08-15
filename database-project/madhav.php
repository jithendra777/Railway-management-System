<!doctype html>
<html>
<head>
    <style>
        body{
            font-family: 'Courier New', monospace;
            background-color: rgb(231, 231, 231);
        }
.madhav{
    background-color: #65e0e4;
float: left;
width:68%
}
.madhav1{
    background-color: #65e0e4;
    
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
    <option value="General">General</option>
    <option value="Ladies">Ladies</option>
    <option value="Tatkal">Tatkal</option>
</select><br><br>
</div>
</div>
<div>

</div><br><br><br>
&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp
<input type="submit" value="Next" class="top">
</form>
</body>
</html>