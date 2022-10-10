<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="../../assets/css/sellMilkPage.css" />
</head>

<style>
  .card {
    box-shadow: 0 4px 8px 0 rgba(0, 255, 0, 0.2);
    max-width: 400px;
    margin: auto;
    text-align: center;
    font-family: arial;
    padding: 10px;
    margin-bottom: 15px;
  }
</style>

<body>
  <div class="container">
    <h2 class="logo"> <a href="../../logout.php">Kieni</a> </h2>

    <h2 style="color: green;">Thank you! Your Order Was Purchased Successfully!</h2>
    <h2>Purchase Order Report:</h2>
    <div class="card">


      <b><label>Customer's Full Name</label></b><br>
      Kelvin Nyoike
      <br>

      <b><label>Mpesa Confirmation Code:</label></b><br>
      QBF12345678Q
      <br>

      <b><label>Customer's Contact Number</label></b><br>
      <?php echo $_POST["phone_number"]; ?><br>

      <b><label>Milk Quantity in Litres</label></b><br>
      3000 Litres
      <br>

      <b><label>Total Cost of Milk</label></b><br>
      Kes <?php echo $_POST["amount"]; ?><br>

      <b><label>Milk Pick Up Location</label></b><br>
      Nyeri
      <br>
    </div>

    <div class="action-Button">
      <a href="./printOrderDetails.php">
        <button class="saveButton">Print</button>
      </a>

      <a href="../../welcome.php">
        <button class="cancelButton">Back Home</button>
      </a>
    </div>

  </div>
</body>

</html>