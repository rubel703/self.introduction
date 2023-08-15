<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php  echo ucfirst($_GET["page"]); ?></title>
    <!-- <link rel="stylesheet" href="SignupPageStyle2.css"> -->
    <script src="https://kit.fontawesome.com/422f5148d8.js"crossorigin="anonymous"></script>
    <style>

        @import url('https://fonts.googleapis.com/css2?family=poppnis:wght@400;500;600;700&display=swap');
    *{
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
        font-family:'poppnis',sans-serif;
    }
    body{
        /* background: #1abc9c; */
        background-color:#0a193d;
        /* color: white !important; */
        overflow: hidden;
    }
    .container{
        max-width: 500px;
        padding: 0 20px;
        margin: 100px auto;
    }
    .wrapper{
        width: 100%;
        background: #fff;
        border-radius: 5px;
    }
    .wrapper .title{
        line-height: 90px;
        background: #16a085;
        text-align: center;
        border-radius: 5px 5px 0 0;
        color: #fff;
        font-size: 25px;
        font-weight: 600;
    }
    .wrapper form{
        padding: 30px 25px 25px 25px;
    }
    .wrapper form .row{
        height: 50px;
        margin-bottom: 15px;
        position: relative;
    }
    .wrapper form .row input{
        height: 100%;
        width: 100%;
        outline: none;
        padding-left: 60px;
        border-radius: 7px;
        border: 1px solid lightgray;
        font-size: 16px;
        transition: all 0.3s ease;
    }
    form .row input:focus{
        border-color: #16a085;
        box-shadow: inset 0px 0px 2px 2px rgba(26,188,156,0.25);
    }
    .wrapper form .row i{
        position: absolute;
        width: 47px;
        height: 100%;
        color: #fff;
        font-size: 18px;
        background: red;
        border: 2px solid black;
        border-radius: 8px 0 0 8px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .wrapper form .buttom input{
        color: #fff;
        font-size: 20px;
        font-weight: 500;
        padding-left: 0px;
        background: #16a085;
        border: 1px solid #16a085;
        cursor: pointer;
    }
    form .buttom input:hover{
        background: black;
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="wrapper"> 
    <div class="title">
        <span>SignUp Form</span>
    </div>

    <form action="#" name="frm">
    <div class="row">
        <i class="fas fa-user"></i>
        <input type="text" onkeydown="test(this)" id="nme" placeholder="First Name" name="fname"  required>
    </div>
    <div class="row">
        <i class="fas fa-user"></i>
        <input type="text"placeholder="Last Name" name="lname" required>
    </div>
    <div class="row">
        <i class="fas fa-user"></i>
        <input type="text"placeholder="Email / Phone" name="email" required>
    </div>
    <div class="row">
        <i class="fas fa-lock"></i>
        <input type="password"placeholder="Password" name="password" required>
    </div>
    <div class="row">
        <i class="fas fa-lock"></i>
        <input type="password"placeholder="Confirm Password" name="confirm password" required>
    </div>
    <form action="main.js">
    <div class="row buttom">
        <input type="submit" onclick ="formValidation(this)" value="Sign Up"  name="btn">
    </div>
    </form>
    </div>

<script>
    function formValidation() {
        var firstName = document.frm.fname.value;
        var msg1 = document.getElementById("nme");
        if (firstName == " ") {
            msg1.innerHTML="first name is reqired";
            msg2.style.color="red";
            //document.write("Enter Your First Name");
            return false;
        }
        var lastName=document.frm.lname.value;
        var msg2=document.getElementsByName("lname");
        if(lastName=" "){
            msg2.innerHTML="last name is required";
            msg2.color="red";
            //document.write("Enter your Last Name");
            return false; 
        }
        var email = document.frm.email.value;
	    var msg3 = document.getElementsByName("email");
        if (email == " ") {
		msg3.innerHTML="email required";
		msg3.style.color="red";
        //document.write("Enter Your Email");
        return false;
	}
        var password = document.frm.password.value;
        var msg4=document.getElementByName("password");
        if (password == " ") {
            msg4.innerHTML="password  is required ";
            msg4.style.color="red";
            //document.write("Enter Your Password");
            return false;
        }	
        var cpassword = document.frm.confirmpassword.value;
        var msg5=document.getElementByName("confirm password");
        if (cpassword == " ") {
            msg5.innerHTML="password  is required ";
            msg5.style.color="red";
            //document.write("Enter Your Confirm Password");
            return false;
        }	
    return true;	
    }
        </script>
</body>
</html>