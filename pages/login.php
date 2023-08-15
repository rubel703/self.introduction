<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php  echo ucfirst($_GET["page"]); ?></title>
    <link rel="stylesheet" href="loginPageStyle.css">
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
    max-width: 440px;
    padding: 0 20px;
    margin: 170px auto;
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
    height: 45px;
    margin-bottom: 15px;
    position: relative;
}
.wrapper form .row input{
    height: 100%;
    width: 100%;
    outline: none;
    padding-left: 60px;
    border-radius: 5px;
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
    color:#fff;
    font-size: 18px;
    background: red;
    border: 1px solid #16a085;
    border-radius: 5px 0 0 5px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.wrapper form .pass{
    margin: -4px 0 20px 0;
}
.wrapper form .pass a{
    color: #16a085;
    font-size: 17px;
    font-weight:bolder;
    text-decoration: none;
}
.wrapper form .pass a:hover{
text-decoration: none;
color: black;
}
.wrapper form .buttom input{
    color: #fff;
    font-size: 20px;
    font-weight: bold;
    padding-left: 0px;
    background: #16a085;
    border: 2px solid #16a085;
    cursor: pointer;
}
form .buttom input:hover{
    background: black;
}
.wrapper form .signup-link{
    text-align: center;
    margin-top: 20px;
    font-size: 18px;
}
.wrapper form .signup-link a{
    color: #16a085;
    text-decoration: none;
}
form .signup-link a:hover{
    text-decoration: none;
    color: darkred;
}
    </style>
</head>
<body>
    <div class="container">
        <div class="wrapper"> 
        <div class="title">
            <span>Login Form</span>
        </div>
    <form method="post" action="check.js" onsubmit="return validate()" name="frm">
        <div class="row">
            <i class="fas fa-user"></i>
            <input type="text"placeholder="Email or Phone" name="email" required>
            <div id="email_error" class="val_error"></div>
        </div>
        <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password"placeholder="password" name="password" required>
            <div id="password_error" class="val_error"></div>
        </div>
        <div class="pass"><a href="3.forget password.html">Forget Password?</a></div>
        <div class="row buttom">
            <input type="submit" value="Login">
        </div>
        <div class="signup-link">Not a Registration? <a href="route.php?page=registration"> SignUp Now</a></div>
    </form>
    </div>

    <script>
        function validate() {
	var email = document.frm.email.value;
	var msg2 = document.getElementById("email_error");
    if (email == " ") {
		msg2.innerHTML="email required";
		msg2.style.color="red";
        alert("Email is reqired"); 
		
        return false;
	}

	var password = document.frm.password.value;
	//var cpassword = document.frm.confirmpassword.value;
	var msg4=document.getElementById("password_error");
    if (password == " ") {
		msg4.innerHTML="password  is required ";
		msg4.style.color="red";
        alert("Password is required");
		
        return false;
	}	
return true;	
}
    </script>
</body>
</html>