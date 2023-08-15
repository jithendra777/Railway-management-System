<!doctype html>
<html>

<head>
    <title>
        Sign in - Irctc Accounts
    </title>
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        background-size: cover;
        background-image: url(https://th.bing.com/th/id/R.04ad3308f7b94860dcf640f8db466da7?rik=aYcZhXN%2bfYxHRQ&riu=http%3a%2f%2f4.bp.blogspot.com%2f-ygGVqAcKYeY%2fT7J9508Ao7I%2fAAAAAAAADqQ%2f7VR-NH7-1yM%2fs1600%2fHdhut.blogspot.com%2b%2525284%252529.jpg&ehk=f3V%2fAsJoW%2fZs5181weXwgFAhy%2bX%2fzmOPj39a80gwsWk%3d&risl=&pid=ImgRaw&r=0);
        font-family: arial;
        width =100%;
        height =100%;
        background-position: center;
        font-style: normal;
       
    }

    .loginbox {
        background-color: white;
        margin-top: 7%;
        margin-left: 6%;
        height: 380px;
        width: 290px;
        font-size: 20px;
        padding: 30px 20px;
        border-radius: 30px;
    }

   

   .loginbox h1 {
        font-style: normal;
        font-size: 25px;
        text-align: center;
       margin-top: -2%;
    }

    .top {
        font-style: normal;
        font-size: 20px;
        margin: 0;
        letter-spacing: 0.6px;
    }

    .loginbox p {
        margin: 0;
        padding: 0;
        font-weight: bold;
        margin-left:2%;
    }

    .loginbox input {
        margin-left: 4pt;
        width: 95%;
        margin-bottom: 20px;
        font-size: 10px;
    }

        .loginbox input[type="email"],
        input[type="password"] {
            border: none;
            border-bottom: 1px solid black;
            background: transparent;
            height: 30px;
            outline: none;
            font-size: 20px;
            font-style: normal;
        }

        .loginbox input[type="submit"] {
            border: none;
            outline: none;
            height: 40px;
            background: #e35d46fa;
            color: #fff;
            font-size: 20px;
            border-radius: 20px;
            cursor: pointer;
        }

    .loginbox a {
        text-decoration: none;
        font-size: 14px;
        line-height: 20px;
        color: rgb(0, 0, 0);
        font-weight: bold;
        text-align: center;
        margin-left: 55pt;
    }

    .nav {
        
        
        color:white;
        background-color: #e35d46fa;
       width:100%;
       height: 100%;
       margin-top:-16pt;
      
       
        
    }
    .nav h1{
        text-align: center;
        text-transform: uppercase;
        font-size: 200%;
        background-color: #e35d46fa;
        height:100%;
        width:100%;
        height:100%;
        margin-bottom:-86pt;
        padding-top:1%;
        border-top:1%;
        font-style: normal;
        font-family: roboto;
        
      
       
       
    }
    .avatar{
        width:4%;
        height: 40pt;
       margin-bottom:-1pt%;
        border-radius:50%;
        margin-left:2%;
       
    }
    .nav h3{
        text-align: center;
        margin-top: 5pt;
       padding-bottom:-50%;
       margin-left:20%;
    }
</style>

<body>
    <div class="nav">
        <h1 >INDIAN RAILWAYS</h1>&nbsp;&nbsp;
        <h3>Signup</h3>
        <img src="https://i.pinimg.com/236x/b5/31/e1/b531e123acb836e513537c59daa95637.jpg"  alt="img of logo" class="avatar">
    </div>
    <div class="loginbox">
        
        <h1>Sign In</h1>
        <form class="top"  method="post" action="connect.php">
            <p>
                Email id:
            </p>
            <input type="email" name="username">
            <br><br>
            <p>
                Password:
            </p>
            <input type="password" name="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
            <br><br>
            <input type="submit" value="Login">
            <br>
            <a href="Signup.php">Create account /signup</a>
            <br><br>
            <a href="">forget password?</a>


        </form>

    </div>
</body>
