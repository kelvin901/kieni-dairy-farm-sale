<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kieni Log In User</title>

    <!--login page css style link  -->
    <link rel="stylesheet" href="./css/login.css">
</head>

<body>
    <!-- <h2>User Log In</h2> -->

    <form action="/action_page.php" method="post">
        <div class="imgcontainer">
            <img src="/images/login.JPG" alt="Avatar" class="avatar">
        </div>

        <div class="formcontainer">
            <label for="uname"><b>Username</b></label><br>
            <input type="text" placeholder="Enter Your Username" name="uname" required>
            <br>
            <label for="psw"><b>Password</b></label><br>
            <input type="password" placeholder="Enter Your Password" name="psw" required>
            <br>
            <button type="submit"><strong>Login</strong></button><br>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>

        <div class="container" style="background-color: #f1f1f1">
            <button type="button" class="cancelbtn">Cancel</button>
            <span class="account">Do not have an account? <a href="/register.html">Create Account</a></span>
        </div>
         
    </form>

</body>

</html>