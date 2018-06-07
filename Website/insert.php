 <?php

$_SESSION['LoggedIn']=false;
$servername = "studmysql01.fhict.local";
$username = "dbi380316";
$password = "LP2699";
$db = "dbi380316";
$conn = new mysqli($servername,$username,$password,$db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$myName = $_GET['name'];
$myEmail = $_GET['email'];
$myDoB = $_GET['DoB'];
$myticketID=rand(111130,999999);

//code generator function
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$myCode = generateRandomString();

$sql = "INSERT INTO user (ticketID, buyerName, email, DoB, code, status, campStatus)
VALUES('$myticketID', '$myName', '$myEmail', '$myDoB', '$myCode', '0', '0')";

// ('$name', '$email', '$DoB', '$username', '$password')";

if (mysqli_query($conn, $sql)) {
    // the message
$msg = "Hello, $myName!\nWelcome to Feel This Thrill!";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

    

$to = $myEmail;
$email_body = "Hello, $myName!\n\nWelcome to Feel This Thrill!\n\nYour code is: $myCode\nGo to http://i380316.hera.fhict.nl/Log-In.php and enter your code. Choose a username and a password!";

    mail($to, "Subj: Feel This Thrill - Subscription confirmation", $email_body, "From: feelthisthrill@gmail.com");

    
    //
//$headers = array ('From' => $email_from, 'To' => $to, 'Subject' => $email_subject, 'Reply-To' => $email_address);
//$smtp = Mail::factory('smtp', array ('host' => $host, 'port' => $port, 'auth' => true, 'username' => $username, 'password' => $password));
//$mail = $smtp->send($to, $headers, $email_body);
//
//
//if (PEAR::isError($mail)) {
//echo("<p>" . $mail->getMessage() . "</p>");
//} else {
//echo("<p>Message successfully sent!</p>");
//}
    
    
//ini_set('SMTP',$host);
//ini_set('smtp_port',25);
// send email
//mail($myEmail,"Feel This Thrill - Subscription confirmation",$msg, "From: feelthisthrill@gmail.com");
    
    

   //echo "An email has been sent to your address!";
  header("Location: PaymentPage.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>