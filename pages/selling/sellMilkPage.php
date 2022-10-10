<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sell Milk page</title>
    <link rel="stylesheet" href="../../assets/css/sellMilkPage.css" />
</head>

<body>
    <div class="container">
        <h2 class="logo"> <a href="../../logout.php">Kieni</a> </h2>

        <div class="content">
            <h2>Please Fill In the Details Below to Proceed</h2>
            <div class="formContainer">
                <form action="../selling/sellMilkPageAction.php" method="post">
                <label>Enter Farmer's Full name</label><br>
                    <input type="text" placeholder="Your Full Name" name="farmers_full_name" required  /><br><br>
                    <label>Enter Your Contact Phone Number(+254)</label><br>
                    <input type="text" placeholder="Phone Number Begining with (+254)"
                        name="farmers_phone_no" required  /><br><br>
                    <label>Enter Quantity Of Milk(Litres)</label><br>
                    <input type="text" placeholder="Milk Quantity in Litres" name="milk_quantity" required  /><br><br>
                    <label>Enter Selling Cost Of Milk(Ksh)</label><br>
                    <input type="text" placeholder="Cost In Ksh" name="milk_cost_shillings" required  /><br><br>
                    <label>Enter Milk Pickup Location(Nearest Town)</label><br>
                    <input type="text" placeholder="Nearest Town Location" name="milk_pickup_location" required  /><br><br>
                    <div class="action-Button">
                        <button type="submit" class="saveButton">Save</button>
                        <button class="cancelButton">Cancel</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</body>

</html>