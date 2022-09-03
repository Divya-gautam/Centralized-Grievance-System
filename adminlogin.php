<?php include ('adminserver.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="wrapper">
        <div class="title-text">
           <div class="title login">
            Admin Login Form
           </div>
           <div class="title signup">
            Admin Signup Form
           </div>
        </div>
        <div class="form-container">
           <div class="slide-controls">
              <input type="radio" name="slide" id="login" checked>
              <input type="radio" name="slide" id="signup">
              <label for="login" class="slide login">Login</label>
              <label for="signup" class="slide signup">Signup</label>
              <div class="slider-tab"></div>
           </div>
           <div class="form-inner">
              <form action="adminlogin.php" method="POST" class="login">
                
                

                 <div class="field">
                    <input type="text" name="Email" placeholder="Email Address" required>
                 </div>
                 <div class="field">
                    <input type="password"name="Password" placeholder="Password" required>
                 </div>
                 <div class="pass-link">
                    <a href="#">Forgot password?</a>
                 </div>
                 <div class="field btn">
                    <div class="btn-layer"></div>
                    <input type="submit" name="login_user" value="Login">
                 </div>
                 <div class="signup-link">
                    Not a member? <a href="">Signup now</a>
                 </div>
              </form>
              <form action="adminlogin.php" method="POST" class="signup">
                <div class="field">
                    <input type="text" name="Username" placeholder="User Name" required>
                 </div>
                 <div class="field">
                    <input type="text" name="Email" placeholder="Email Address" required>
                 </div>
                 <div class="field">
                    <input type="password" name="Password" placeholder="Password" required>
                 </div>
                 <div class="field">
                    <input type="password" name="Confirmpassword" placeholder="Confirm password" required>
                 </div>
                 <div class="field btn">
                    <div class="btn-layer"></div>
                    <input type="submit" name="reg_user" value="Signup">
                 </div>
              </form>
           </div>
        </div>
     </div>
     <script>
        const loginText = document.querySelector(".title-text .login");
        const loginForm = document.querySelector("form.login");
        const loginBtn = document.querySelector("label.login");
        const signupBtn = document.querySelector("label.signup");
        const signupLink = document.querySelector("form .signup-link a");
        signupBtn.onclick = (()=>{
          loginForm.style.marginLeft = "-50%";
          loginText.style.marginLeft = "-50%";
        });
        loginBtn.onclick = (()=>{
          loginForm.style.marginLeft = "0%";
          loginText.style.marginLeft = "0%";
        });
        signupLink.onclick = (()=>{
          signupBtn.click();
          return false;
        });
     </script>
    
</body>
</html>