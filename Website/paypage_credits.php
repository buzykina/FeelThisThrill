<?php
session_start();
$_SESSION['LoggedIn']=true;
$servername = "studmysql01.fhict.local";
$username = "dbi380316";
$password = "LP2699";
$db = "dbi380316";
$conn = new mysqli($servername,$username,$password,$db);
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Feel This Thrill - Payment</title>
    <meta content="PaymentPage" property="og:title">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">
    <link href="./PaymentPage_files/livia-poppers-first-project.webflow.bd85a1a0a.css" rel="stylesheet" type="text/css">
    <script src="./PaymentPage_files/webfont.js.download" type="text/javascript"></script>
    <link rel="stylesheet" href="./PaymentPage_files/css">
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["Droid Serif:400,400italic,700,700italic", "Inconsolata:400,700", "Bitter:400,700,400italic"]
            }
        });

    </script>
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
    <script type="text/javascript">
        ! function(o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
        }(window, document);

    </script>
    <link href="https://daks2k3a4ib2z.cloudfront.net/img/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="https://daks2k3a4ib2z.cloudfront.net/img/webclip.png" rel="apple-touch-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<?php
if(isset($_POST['payform']))
{
    $credits = $_SESSION['Credits'] + $_SESSION['creditsnew'];
    $sql_query2 = "UPDATE user SET credits='".$credits."' WHERE ticketID = '".$_SESSION['TicketID']."';";
            mysqli_query($conn,$sql_query2);
            if($credits > $_SESSION['Credits'] )
            {
                $_SESSION['Credits'] = $credits;
                echo '<script> window.location.href="Event-Account.php"; </script>';
            }
}
?>
<body class="body-2"><img src="./PaymentPage_files/5ad4d245fbca00c250d6ef14_logo2.JPG" width="172" class="image-19">
    <div class="form-block-2 w-form">
        <form id="email-form" name="email-form" data-name="Email Form" class="form-4" action="paypage_credits.php" method="post">
            <h3 class="heading-9">Payment Information</h3><input type="text" class="w-input" maxlength="256" name="name" data-name="Name" placeholder="Name on card" id="name"><input type="text" class="w-input" maxlength="256" name="cardNo" data-name="cardNo" placeholder="Credit Card Number" id="cardNo" required=""><input type="text" class="text-field-5 w-input" maxlength="256" name="MonthYear" data-name="MonthYear" placeholder="MM/YY" id="MonthYear" required=""><input type="text" class="w-input" maxlength="256" name="cvc" data-name="cvc" placeholder="CVC" id="cvc" required=""><input type="submit" value="Finish and pay" data-wait="Please wait..." class="submit-button w-button" data-toggle="modal" name = "payform" data-target="#myModal"></form>

    </div>
    <script src="./PaymentPage_files/jquery-3.3.1.min.js.download" type="text/javascript" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="./PaymentPage_files/webflow.85e395f57.js.download" type="text/javascript"></script>

</body>

</html>