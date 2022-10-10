<!-- Mpesa Logic to implement the STK Push on User's Phone. -->
<!-- 
. consumer_key - This variable assists the developer to access Safaricom API.
. consumer_secret - This variable also assists the developer to access Safaricom API.
. Business_Code - Is a business code that receives payment when the customer enters their Mpesa PIN
. Passkey - After creating the Daraja App, you will get a passkey.
. Type_of_Transaction - Type of transaction to be made.
. Token_URL - Authenticate and return the API token used for accessing Lipa Na Mpesa services in Safaricom Daraja
. phone_number - The Safaricom number you will use to make payments.
. OnlinePayment - For the test environment, pass the Safaricom STK processing request.
. total_amount - The total amount to be deducted from your account after entering your Mpesa Pin.
. CallBackURL - URL used to receive notifications from Mpesa API.
. Time_Stamp - Time of transaction. It is usually in the format (YYYY-MM-DD).
. password - Unique password, which is used for encrypting the request. 
-->
<?php
// Initialize the variables
$consumer_key = '28P84HGfBv8jBfvbzUZ95IhxuhJW005g';
$consumer_secret = 'xA1vXENjunmd9fu2';
$Business_Code = '174379';
$Passkey = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';
$Type_of_Transaction = 'CustomerPayBillOnline';
$Token_URL = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
$phone_number = $_POST['phone_number'];
$OnlinePayment = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
$total_amount = $_POST['amount'];
$CallBackURL = 'https://2f50f430.ngrok.io/callback.php?key=your password';
$Time_Stamp = date("Ymdhis");
$password = base64_encode($Business_Code . $Passkey . $Time_Stamp);
?>

<!-- 
. curl_init() - The method creates a new session and returns a cURL handle; which will be stored in the variable named $curl_transfer.
. curl_setopt — Create a cURL transfer option.
. CURLOPT_RETURNTRANSFER - We set it to true(1) instead of immediately displaying the transfer, return it as a string of the curl exec() return value.
. CURLOPT_HEADER - set it to false to prevent the inclusion of the header in the output.
. curl_exec - Obtain the URL and send it to the browser.
. CURLOPT_SSL_VERIFYPEER - We set the option false so that the peer certificate verification succeeds.
. json_decode is a function that converts a JSON string to a JSON object. 
-->
<?php
// generate authentication token.
$curl_Tranfer = curl_init();
curl_setopt($curl_Tranfer, CURLOPT_URL, $Token_URL);
$credentials = base64_encode($consumer_key . ':' . $consumer_secret);
curl_setopt($curl_Tranfer, CURLOPT_HTTPHEADER, array('Authorization: Basic ' . $credentials));
curl_setopt($curl_Tranfer, CURLOPT_HEADER, false);
curl_setopt($curl_Tranfer, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl_Tranfer, CURLOPT_SSL_VERIFYPEER, false);
$curl_Tranfer_response = curl_exec($curl_Tranfer);

$token = json_decode($curl_Tranfer_response)->access_token;

// Initiating the STK push on the users’ phone
$curl_Tranfer2 = curl_init();
curl_setopt($curl_Tranfer2, CURLOPT_URL, $OnlinePayment);
curl_setopt($curl_Tranfer2, CURLOPT_HTTPHEADER, array('Content-Type:application/json', 'Authorization:Bearer ' . $token));

$curl_Tranfer2_post_data = [
    'BusinessShortCode' => $Business_Code,
    'Password' => $password,
    'Timestamp' =>$Time_Stamp,
    'TransactionType' =>$Type_of_Transaction,
    'Amount' => $total_amount,
    'PartyA' => $phone_number,
    'PartyB' => $Business_Code,
    'PhoneNumber' => $phone_number,
    'CallBackURL' => $CallBackURL,
    'AccountReference' => 'Hillary',
    'TransactionDesc' => 'Test',
];

$data2_string = json_encode($curl_Tranfer2_post_data);

curl_setopt($curl_Tranfer2, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl_Tranfer2, CURLOPT_POST, true);
curl_setopt($curl_Tranfer2, CURLOPT_POSTFIELDS, $data2_string);
curl_setopt($curl_Tranfer2, CURLOPT_HEADER, false);
curl_setopt($curl_Tranfer2, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl_Tranfer2, CURLOPT_SSL_VERIFYHOST, 0);
$curl_Tranfer2_response = json_decode(curl_exec($curl_Tranfer2));

echo json_encode($curl_Tranfer2_response, JSON_PRETTY_PRINT);
?>

<!-- In the script above:

. CURLOPT_SSL_VERIFYPEER - This option determines whether the curl verifies the authenticity of the peer’s certificate.
. CURLOPT_SSL_VERIFYHOST - Set to zero for connection to succeed regardless of the names in the certificate. To ensure that the SSL peer certificates Common Name or Subject Alternate Name field matches the given hostname.
. CURLOPT_POSTFIELDS - Data to POST to server. If you pass a string, int, float, or bool as an input value, JSON encode() will generate a JSON that is a basic value (not an object or an array).
. json_decode - a function that converts a JSON string to a JSON object.
. json_encode - The JSON representation of the specified value is returned as a string. 
-->

<!-- <form class="contact2-form validate-form" action="#" method="post">
   <input type="hidden" name="Check_request_ID" value="<?php echo $curl_Tranfer2_response->Check_request_ID ?>">
   </br></br>
   <button class="contact2-form-btn" style="margin-bottom: 30px;">Confirm Payment is Complete</button>
</form> -->