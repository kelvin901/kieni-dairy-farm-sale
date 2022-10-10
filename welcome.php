<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>

    <link rel="stylesheet" href="./assets/css/home.css">
    <!-- <link rel="stylesheet" href="./assets/css/global-styles.css"> -->
</head>

<body>
    <div class="container">
        <h2 class="logo"> <a href="logout.php">Kieni</a> </h2>
        <div class="content">
            <h1>Welcome to Kieni Dairy Farm Offers!</h1>
            <p><b>Looking to sell Milk and Other Milk Products?</b></p>
            <a href="pages/selling/confirmMilkSale.php">
                <Button class="buttonSell">Sell Milk</Button>
            </a>
            <p><b>Looking to buy milk and Other Milk Products?</b></p>
            <a href="pages/buying/confirmBuyMilk.php">
                <button class="buttonBuy">Buy Milk</button>
            </a>

        </div>
    </div>

</body>

</html>