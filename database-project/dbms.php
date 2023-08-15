<!doctype html>
<html>
    <style>
        body {
  font-family: 'Courier New', monospace;
  font-size: 20px;
  padding: 8px;
}
.row {
 
  margin: 0 -16px;
}
.col-50 {
  padding: 0 15px;
  background-color: rgb(236, 233, 217);
  display:table;
  width:95%;
}
input {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
.btn {
  background-color: #04aa94;
  font-family: 'Courier New', monospace;
  color: white;
  padding: 10px;
  margin: 8px 0;
  border: none;
  width: 20%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}
.btn:hover {
  background-color: #b2dabe;
  color:black;
}
.hi{
  width: 100%;
  height:18px;
  border-radius: 3px;
}
table{
    width:50%;
}
::placeholder
{
  font-size: 16px;
  font-family: 'Courier New', monospace;
}
    </style>
<head>
</head>
<body>
    <form action="connect.php" method="post">
  <div class="col-50">
        <h1>Person Details</h1>
        <label>First Name</label>
        <input type="text" placeholder="Ex:-Madhav" name="firstname"class="hi"><br>
        <label >Last Name</label>
        <input type="text" placeholder="Ex:-Krishna" name="lastname"class="hi"><br>
        <label >Date of birth</label>
        <input type="text" placeholder="01-01-2020" name="dob"class="hi">
        <label >Phone number</label>
        <input type="number" placeholder="9189109101" name="phnumber"class="hi"><br>
        </div>
      <br><br><br>
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      <input type="submit" value="Next-->" class="btn">
  </form>
</body>
</html>