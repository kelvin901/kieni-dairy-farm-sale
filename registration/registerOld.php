<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register page</title>
    <link rel="stylesheet" href="./css/register.css">
</head>
<body>
    <form action="/action_page.php" style="border:1px solid #ccc">
        <div class="registercontainer">
          <h1>Sign Up</h1>
          <p>Please fill in this form to create an account.</p>
          <hr>
      
          <label for="email"><b>Email</b></label><br>
          <input type="text" placeholder="Enter Email" name="email" required>
          <br>
          <label for="psw"><b>Password</b></label><br>
          <input type="password" placeholder="Enter Password" name="psw" required>
         <br>
          <label for="psw-repeat"><b>Repeat Password</b></label><br>
          <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
          <br>
          <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
          </label>
          <br>
          <p>Already registered? <a href="/login.html" style="color:dodgerblue">Go to log in</a>.</p>
      
          <div class="clearfix">
            <button type="submit" class="signupbtn">Sign Up</button>
            <button type="button" class="cancelbtn">Cancel</button>
            
          </div>
        </div>
      </form>
    
</body>
</html>