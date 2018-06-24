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
//person1
$myName = $_GET['name'];
$myEmail = $_GET['email'];
$myDoB = $_GET['DoB'];
$myticketID=rand(111130,999999);

//person2
$myName2 = $_GET['name2'];
$myEmail2 = $_GET['email2'];
$myDoB2 = $_GET['DoB2'];
$myticketID2=rand(111130,999999);

//person3
$myName3 = $_GET['name3'];
$myEmail3 = $_GET['email3'];
$myDoB3 = $_GET['DoB3'];
$myticketID3=rand(111130,999999);

//person4
$myName4 = $_GET['name4'];
$myEmail4 = $_GET['email4'];
$myDoB4 = $_GET['DoB4'];
$myticketID4=rand(111130,999999);

//person5
$myName5 = $_GET['name5'];
$myEmail5 = $_GET['email5'];
$myDoB5 = $_GET['DoB5'];
$myticketID5=rand(111130,999999);

//person6
$myName6 = $_GET['name6'];
$myEmail6 = $_GET['email6'];
$myDoB6 = $_GET['DoB6'];
$myticketID6=rand(111130,999999);


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
$myCode2 = generateRandomString();
$myCode3 = generateRandomString();
$myCode4 = generateRandomString();
$myCode5 = generateRandomString();
$myCode6 = generateRandomString();


$sql = "INSERT INTO user (ticketID, buyerName, email, DoB, code, status, campStatus)
VALUES('$myticketID', '$myName', '$myEmail', '$myDoB', '$myCode', '0', '0')";
mysqli_query($conn, $sql);

$sql2 = "INSERT INTO user (ticketID, buyerName, email, DoB, code, status, campStatus)
VALUES('$myticketID2', '$myName2', '$myEmail2', '$myDoB2', '$myCode2', '0', '0')";
mysqli_query($conn, $sql2);

$sql3 = "INSERT INTO user (ticketID, buyerName, email, DoB, code, status, campStatus)
VALUES('$myticketID3', '$myName3', '$myEmail3', '$myDoB3', '$myCode3', '0', '0')";
mysqli_query($conn, $sql3);

$sql4 = "INSERT INTO user (ticketID, buyerName, email, DoB, code, status, campStatus)
VALUES('$myticketID4', '$myName4', '$myEmail4', '$myDoB4', '$myCode4', '0', '0')";
mysqli_query($conn, $sql4);

$sql5 = "INSERT INTO user (ticketID, buyerName, email, DoB, code, status, campStatus)
VALUES('$myticketID5', '$myName5', '$myEmail5', '$myDoB5', '$myCode5', '0', '0')";
mysqli_query($conn, $sql5);

$sql6 = "INSERT INTO user (ticketID, buyerName, email, DoB, code, status, campStatus)
VALUES('$myticketID6', '$myName6', '$myEmail6', '$myDoB6', '$myCode6', '0', '0')";
mysqli_query($conn, $sql6);



//mail for person1
if (mysqli_query($conn, $sql)) {
    // the message
$msg = "Hello, $myName!\nWelcome to Feel This Thrill!";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

    

$to = $myEmail;
$email_body = "Hello, $myName!\n\nWelcome to Feel This Thrill!\n\nYour code is: $myCode\nGo to http://i380316.hera.fhict.nl/Log-In.php and enter your code. Choose a username and a password!";
 
    
    mail($to, "Subj: Feel This Thrill - Subscription confirmation", $email_body, "From: feelthisthrill@gmail.com");
   
}
    
  
//mail for person2
if (mysqli_query($conn, $sql2)) {
    // the message
$msg2 = "Hello, $myName2!\nWelcome to Feel This Thrill!";

// use wordwrap() if lines are longer than 70 characters
$msg2 = wordwrap($msg2,70);

    

$to2 = $myEmail2;
$email_body2 = "Hello, $myName2!\n\nWelcome to Feel This Thrill!\n\nYour code is: $myCode2\nGo to http://i380316.hera.fhict.nl/Log-In.php and enter your code. Choose a username and a password!";
 
    
    mail($to2, "Subj: Feel This Thrill - Subscription confirmation", $email_body2, "From: feelthisthrill@gmail.com");

    
}

    

//mail for person3
if (mysqli_query($conn, $sql3)) {
    // the message
$msg3 = "Hello, $myName3!\nWelcome to Feel This Thrill!";

// use wordwrap() if lines are longer than 70 characters
$msg3 = wordwrap($msg3,70);

    

$to3 = $myEmail3;
$email_body3 = "Hello, $myName3!\n\nWelcome to Feel This Thrill!\n\nYour code is: $myCode3\nGo to http://i380316.hera.fhict.nl/Log-In.php and enter your code. Choose a username and a password!";
 
    
    mail($to3, "Subj: Feel This Thrill - Subscription confirmation", $email_body3, "From: feelthisthrill@gmail.com");

    
}



//mail for person4
if (mysqli_query($conn, $sql4)) {
    // the message
$msg4 = "Hello, $myName4!\nWelcome to Feel This Thrill!";

// use wordwrap() if lines are longer than 70 characters
$msg4 = wordwrap($msg4,70);

    

$to4 = $myEmail4;
$email_body4 = "Hello, $myName4!\n\nWelcome to Feel This Thrill!\n\nYour code is: $myCode4\nGo to http://i380316.hera.fhict.nl/Log-In.php and enter your code. Choose a username and a password!";
 
    
    mail($to4, "Subj: Feel This Thrill - Subscription confirmation", $email_body4, "From: feelthisthrill@gmail.com");

    
}


//mail for person5
if (mysqli_query($conn, $sql5)) {
    // the message
$msg5 = "Hello, $myName5!\nWelcome to Feel This Thrill!";

// use wordwrap() if lines are longer than 70 characters
$msg5 = wordwrap($msg5,70);

    

$to5 = $myEmail5;
$email_body5 = "Hello, $myName5!\n\nWelcome to Feel This Thrill!\n\nYour code is: $myCode5\nGo to http://i380316.hera.fhict.nl/Log-In.php and enter your code. Choose a username and a password!";
 
    
    mail($to5, "Subj: Feel This Thrill - Subscription confirmation", $email_body5, "From: feelthisthrill@gmail.com");

}

    

//mail for person6
if (mysqli_query($conn, $sql6)) {
    // the message
$msg6 = "Hello, $myName6!\nWelcome to Feel This Thrill!";

// use wordwrap() if lines are longer than 70 characters
$msg6 = wordwrap($msg6,70);

    

$to6 = $myEmail6;
$email_body6 = "Hello, $myName6!\n\nWelcome to Feel This Thrill!\n\nYour code is: $myCode6\nGo to http://i380316.hera.fhict.nl/Log-In.php and enter your code. Choose a username and a password!";
 
    
    mail($to6, "Subj: Feel This Thrill - Subscription confirmation", $email_body6, "From: feelthisthrill@gmail.com");

}





header("Location: PaymentPage.php");
   //echo "An email has been sent to your address!";
  
//} else {
   // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//}

mysqli_close($conn);
?>