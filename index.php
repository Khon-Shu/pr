<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechNook</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper" id="signup" style="display:none;">
      <form method="post" action="register.php">
        <h1>Sign Up</h1>
        <div class="input-box">
          
           <input type="text" name="uname" id="uname" placeholder="Username" required>
        </div>
        <div class="input-box">
           
            <input type="email" name="email" id="email" placeholder="Email" required>
        </div>
        <div class="input-box">
            <input type="password" name="password" id="password" placeholder="Password" required>
        </div>
        <div class="input-box">
            <input type="password" id="con_password" placeholder="Confirm Password" required>
        </div>
       <button type="submit" class="btn" value="Sign Up" name="signUp">Sign Up</button>
      </form>
     
    
      <div class="Login-Link">
        <p>Already Have Account ?
        <button class="bt" id="signInButton">Sign In</button></p>
      </div>
    </div>

    <div class="wrapper" id="signIn">
        <h1>Log In</h1>
        <form method="post" action="register.php">
          <div class="input-box">
             
              <input type="email" name="email" id="email" placeholder="Email" required>

          </div>
          <div class="input-box">
            
              <input type="password" name="password" id="password" placeholder="Password" required>
          </div>
          <p class="recover">
            <a href="#">Recover Password</a>
          </p>
         <button type="submit" class="btn" value="Sign In" name="signIn">Sign In</button>
        </form>
       
        <div class="Signup-Link">
          <p>Don't have account yet?
          <button class="bt" id="signUpButton">Sign Up</button></p>
        </div>
      </div>
      <script src="script.js"></script>
</body>
</html>
