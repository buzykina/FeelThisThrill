 <?php


   // mail("ilia.nikushev@hotmail.com", "Subj: Feel This Thrill - Subscription confirmation", "test", "From: feelthisthrill@gmail.com");
//die();

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
if(isset($_GET['name']))
$myName = $_GET['name'];
if(isset($_GET['email']))
$myEmail = $_GET['email'];
if(isset($_GET['DoB']))
$myDoB = $_GET['DoB'];
$myticketID=rand(111130,999999);

//person2
if(isset($_GET['name2']))
$myName2 = $_GET['name2'];
if(isset($_GET['email2']))
$myEmail2 = $_GET['email2'];
if(isset($_GET['DoB2']))
$myDoB2 = $_GET['DoB2'];
$myticketID2=rand(111130,999999);

//person3
if(isset($_GET['name3']))
$myName3 = $_GET['name3'];
if(isset($_GET['email3']))
$myEmail3 = $_GET['email3'];
if(isset($_GET['DoB3']))
$myDoB3 = $_GET['DoB3'];
$myticketID3=rand(111130,999999);

//person4
if(isset($_GET['name4']))
$myName4 = $_GET['name4'];
if(isset($_GET['email4']))
$myEmail4 = $_GET['email4'];
if(isset($_GET['DoB4']))
$myDoB4 = $_GET['DoB4'];
$myticketID4=rand(111130,999999);

//person5
if(isset($_GET['name5']))
$myName5 = $_GET['name5'];
if(isset($_GET['email5']))
$myEmail5 = $_GET['email5'];
if(isset($_GET['DoB5']))
$myDoB5 = $_GET['DoB5'];
$myticketID5=rand(111130,999999);

//person6
if(isset($_GET['name6']))
$myName6 = $_GET['name6'];
if(isset($_GET['email6']))
$myEmail6 = $_GET['email6'];
if(isset($_GET['DoB6'])) // todo Check if not existing
$myDoB6 = $_GET['DoB6'];
$myticketID6=rand(111130,999999);

// todo try to do with a for(0...6)


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

$q0 = false;
$q1 = false;
$q2 = false;
$q3 = false;
$q4 = false;
$q5 = false;


// todo IF not empty
if(!empty($myName)){
$sql = "INSERT INTO user (ticketID, buyerName, email, DoB, code, status, campStatus)
VALUES('$myticketID', '$myName', '$myEmail', '$myDoB', '$myCode', '0', '0')";
$q0 = mysqli_query($conn, $sql);
   // echo 'sql';
}
//else {echo 'not working';}

if(!empty($myName2)){
$sql2 = "INSERT INTO user (ticketID, buyerName, email, DoB, code, status, campStatus)
VALUES('$myticketID2', '$myName2', '$myEmail2', '$myDoB2', '$myCode2', '0', '0')";
$q1 = mysqli_query($conn, $sql2);
}

if(!empty($myName3)){
$sql3 = "INSERT INTO user (ticketID, buyerName, email, DoB, code, status, campStatus)
VALUES('$myticketID3', '$myName3', '$myEmail3', '$myDoB3', '$myCode3', '0', '0')";
$q2 = mysqli_query($conn, $sql3);
}

if(!empty($myName4)){
$sql4 = "INSERT INTO user (ticketID, buyerName, email, DoB, code, status, campStatus)
VALUES('$myticketID4', '$myName4', '$myEmail4', '$myDoB4', '$myCode4', '0', '0')";
$q3 = mysqli_query($conn, $sql4);
}

if(!empty($myName5)){
$sql5 = "INSERT INTO user (ticketID, buyerName, email, DoB, code, status, campStatus)
VALUES('$myticketID5', '$myName5', '$myEmail5', '$myDoB5', '$myCode5', '0', '0')";
$q4 = mysqli_query($conn, $sql5);
}

if(!empty($myName6)){
$sql6 = "INSERT INTO user (ticketID, buyerName, email, DoB, code, status, campStatus)
VALUES('$myticketID6', '$myName6', '$myEmail6', '$myDoB6', '$myCode6', '0', '0')";
$q5 = mysqli_query($conn, $sql6);
}


//mail for person1
if(!empty($myName)){
if ($q0) {
    // the message
$msg = "Hello, $myName!\nWelcome to Feel This Thrill!";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

    

$to = $myEmail;
$email_body = "Hello, $myName!\n\nWelcome to Feel This Thrill!\n\nYour code is: $myCode\nGo to http://i380316.hera.fhict.nl/Log-In.php and enter your code. Choose a username and a password!";
 
    
    mail($to, "Subj: Feel This Thrill - Subscription confirmation", $email_body, "From: feelthisthrill@gmail.com");
    //echo(error_get_last()); echo 'mail';
    
   
}
//else{
 // echo $conn->error;
  //}
}
    
  
//mail for person2
if(!empty($myName2)){
if (q1) {
    // the message
$msg2 = "Hello, $myName2!\nWelcome to Feel This Thrill!";

// use wordwrap() if lines are longer than 70 characters
$msg2 = wordwrap($msg2,70);

    

$to2 = $myEmail2;
$email_body2 = "Hello, $myName2!\n\nWelcome to Feel This Thrill!\n\nYour code is: $myCode2\nGo to http://i380316.hera.fhict.nl/Log-In.php and enter your code. Choose a username and a password!";
 
    
    mail($to2, "Subj: Feel This Thrill - Subscription confirmation", $email_body2, "From: feelthisthrill@gmail.com");

    
}
}
    

//mail for person3
if(!empty($myName3)){
if (q2) {
    // the message
$msg3 = "Hello, $myName3!\nWelcome to Feel This Thrill!";

// use wordwrap() if lines are longer than 70 characters
$msg3 = wordwrap($msg3,70);

    

$to3 = $myEmail3;
$email_body3 = "Hello, $myName3!\n\nWelcome to Feel This Thrill!\n\nYour code is: $myCode3\nGo to http://i380316.hera.fhict.nl/Log-In.php and enter your code. Choose a username and a password!";
 
    
    mail($to3, "Subj: Feel This Thrill - Subscription confirmation", $email_body3, "From: feelthisthrill@gmail.com");

    
}
}



//mail for person4
if(!empty($myName4)){
if (q3) {
    // the message
$msg4 = "Hello, $myName4!\nWelcome to Feel This Thrill!";

// use wordwrap() if lines are longer than 70 characters
$msg4 = wordwrap($msg4,70);

    

$to4 = $myEmail4;
$email_body4 = "Hello, $myName4!\n\nWelcome to Feel This Thrill!\n\nYour code is: $myCode4\nGo to http://i380316.hera.fhict.nl/Log-In.php and enter your code. Choose a username and a password!";
 
    
    mail($to4, "Subj: Feel This Thrill - Subscription confirmation", $email_body4, "From: feelthisthrill@gmail.com");

    
}
}


//mail for person5
if(!empty($myName5)){
if (q4) {
    // the message
$msg5 = "Hello, $myName5!\nWelcome to Feel This Thrill!";

// use wordwrap() if lines are longer than 70 characters
$msg5 = wordwrap($msg5,70);

    

$to5 = $myEmail5;
$email_body5 = "Hello, $myName5!\n\nWelcome to Feel This Thrill!\n\nYour code is: $myCode5\nGo to http://i380316.hera.fhict.nl/Log-In.php and enter your code. Choose a username and a password!";
 
    
    mail($to5, "Subj: Feel This Thrill - Subscription confirmation", $email_body5, "From: feelthisthrill@gmail.com");

}
}


//mail for person6
if(!empty($myName6)){
if (q5) {
    // the message
$msg6 = "Hello, $myName6!\nWelcome to Feel This Thrill!";

// use wordwrap() if lines are longer than 70 characters
$msg6 = wordwrap($msg6,70);

    

$to6 = $myEmail6;
$email_body6 = "Hello, $myName6!\n\nWelcome to Feel This Thrill!\n\nYour code is: $myCode6\nGo to http://i380316.hera.fhict.nl/Log-In.php and enter your code. Choose a username and a password!";
 
    
    mail($to6, "Subj: Feel This Thrill - Subscription confirmation", $email_body6, "From: feelthisthrill@gmail.com");

}
}





//todo uncomment header("Location: PaymentPage.php");
header("Location: PaymentPage.php");
   //echo "An email has been sent to your address!";
  
//} else {
   // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//}

mysqli_close($conn);
?>