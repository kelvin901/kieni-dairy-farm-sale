<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Confirm</title>
    <link rel="stylesheet" href="../../assets/css/buyMilkConfirm.css">

    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 400px;
            margin: auto;
            text-align: center;
            font-family: arial;
            padding: 10px;
            margin-bottom: 10px;
        }

        .price {
            color: grey;
            font-size: 22px;
        }

        .card button {
            border: none;
            outline: 0;
            padding: 12px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        .card button:hover {
            opacity: 0.7;
        }
    </style>

</head>

<body>
    <div class="container">
        <h2 class="logo"> <a href="../../logout.php"><i>Kieni</i></a> </h2>

        <div class="content">
            <!-- <h1>Buy Milk & Other Milk Products</h1> -->
            <h2>Item Added To Cart Successfully!</h2>
            <div class="card">
                <!-- <img src="../../assets/images/Landing-Image-2.jpg" alt="Denim Jeans" style="width:50px; height: 50px;"> -->
                <h2 style="color: green">Product Item : Fresh Milk</h2>
                <p class="price" >Amount: 30 Litres</p>
                <p class="price"><b>Price:</b> Kes 3000</p>
                <p><b>Pick Up Location:</b> Nyeri</p>
                <!-- <p>
                    <a href="./checkout.php">
                        <button class="buttonProceed">Proceed to Checkout</button>
                    </a>
                </p> -->
            </div>
            <div class="action-Button">
                <a href="./checkout.php">
                    <button class="buttonProceed">Proceed to Checkout</button>
                </a>
                <a href="./buyMilkPage.php">
                    <button class="buttonSell">Cancel</button>
                </a>
            </div>
        </div>
    </div>

</body>

</html>