<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market Dashboard</title>
    <style>
    h2 {
      text-align: center;
      color: green;
      font-size: 40px;
    }
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td,
    th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
  </style>
  
  <link rel="stylesheet" href="../../assets/css/buyMilkPage.css">

</head>
<body> 
    <h2>Kieni Dairy Farm Market Place</h2>
    <div class="navbar">
      <a href="../../welcome.php">Home</a>
      <div class="dropdown">
        <button class="dropbtn">Products 
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="#">Fresh Milk</a>
          <!-- <a href="#">Yoghurt</a>
          <a href="#">Fermented Milk</a>
          <a href="#">Cream</a>
          <a href="#">Butter</a>
          <a href="#">Whey</a>
          <a href="#">Caseine</a>
          <a href="#">Cheese</a>
          <a href="#">Ice Cream</a> -->
        </div>
      </div> 
    </div>

    <table>
      <tr>
        <th>Farmer's Full Name</th>
        <th>Farmer's Contact Number</th>
        <th>Milk Quantity in Litres</th>
        <th>Total Cost of Milk</th>
        <th>Milk Pick Up Location</th>
        <th>Action</th>
      </tr>
 
      <tr>
        <td>
          Joseph Mbuku
        </td>
        <td>
          +254717243553
        </td>
        <td>
          30 Liters
        </td>
        <td>
          KSH 3000
        </td>
        <td>
          Nyeri
        </td>
        <td> 
        <a href="../buying/paymentConfirm.php">
          <button class="buttonSell">Add to Cart</button>
        </a>
        </td>
      </tr>
      <tr>
        <td>
          Jane Muhia
        </td>
        <td>
          +254732145678
        </td>
        <td>
          40 Liters
        </td>
        <td>
          KSH 4000
        </td>
        <td>
          Nyeri
        </td>
        <td> 
          <a href="../buying/paymentConfirm.php">
            <button class="buttonSell">Add to Cart</button>
          </a>
        </td>
      </tr>

    </table> 
</body>
</html>