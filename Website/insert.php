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
$myUsername = $_GET['username'];
$myEmail = $_GET['email'];
$myPassword = $_GET['password'];
$myDoB = $_GET['DoB'];
$myTag=rand(111130,999999);


$sql = "INSERT INTO user (tag, buyerName, username, email, DoB, password)
VALUES('$myTag', '$myName', '$myUsername', '$myEmail', '$myDoB', '$myPassword')";

// ('$name', '$email', '$DoB', '$username', '$password')";

if (mysqli_query($conn, $sql)) {
    // the message
$msg = "Hello, '$myName'!\nWelcome to Feel This Thrill!";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

    ini_set('SMTP','myserver');
ini_set('smtp_port',25);
// send email
mail($myEmail,"Feel This Thrill - Subscription confirmation",$msg, "From: feelthisthrill@gmail.com");

    echo "An email has been sent to your address!";
    header("Location: PaymentPage.html");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>