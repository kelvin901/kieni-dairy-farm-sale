<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="../../assets/css/sellMilkPage.css" />
</head>

<body>
    <div class="container">
        <h2 class="logo"> <a href="../../logout.php">Kieni</a> </h2>

        <div class="content">
            <h2>Check Out Page</h2>
            <p>Kindly Enter Your Mpesa Details!</p>
            <div class="formContainer">
                <form action="./orderDetails.php" method="post">
                    <label><strong>Mpesa Number(+254)</strong></label><br>
                    <input type="text" placeholder="Phone Number Begining with (+254)" name="phone_number" required  /><br><br>

                    <label><strong>Enter Amount</strong></label><br>
                    <input type="text" placeholder="Cost In Ksh" name="amount" required  /><br><br>
 
                    <div class="action-Button">
                        <button type="submit" class="saveButton">Pay Now</button>
                    </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</body>

</html>