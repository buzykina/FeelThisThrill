<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Feel This Thrill - Buy Tickets</title>
    
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">
    <link href="Livia popper&#39;s First Project_files/livia-poppers-first-project.webflow.75e37ed8c.css" rel="stylesheet" type="text/css">
    <script src="./Livia popper&#39;s First Project_files/webfont.js.download" type="text/javascript"></script>
    <link rel="stylesheet" href="./Livia popper&#39;s First Project_files/css">
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["Droid Serif:400,400italic,700,700italic", "Inconsolata:400,700"]
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
    
    
    <style>
        .modal-wrapper
        {
            opacity: 0;
            transform: scaleX(1.1) scaleY(1.1) scaleZ(1);
            display: none;
        }
        
    </style>
    
   <link rel="stylesheet" type="text/css" href="css/jane_css.css">
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jane_js.js"></script>
<link rel="stylesheet" type="text/css" href="css/MainStyle.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<link rel="stylesheet" href="css/GeneralHeader.css">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
</head>

<body class="body">
    <?php
    include 'included/header.html';
     ?>
      
    <div id="Modal-Wrapper" class="modal-wrapper">
        <div class="sign-up-wrapper" style="margin-top:20px;"><a class="close-link" data-ix="close-interaction" style="cursor:pointer;">Close X</a>
            <h2>Fill in your details!</h2>
            <div class="w-form">
                <form id="email-form-4" name="email-form-4" data-name="Email Form 4"><label for="name">Name:</label><input type="text" class="text-field w-input" maxlength="256" name="name" data-name="Name" placeholder="Enter your name" id="name" required=""><label for="email">Email Address:</label><input type="email" class="text-field-2 w-input" maxlength="256" name="email" data-name="Email" placeholder="Enter your email" id="email" required=""></form>
                <div class="w-form-done">
                    <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="w-form-fail">
                    <div>Oops! Something went wrong while submitting the form.</div>
                </div>
            </div>
            <div class="w-form">
                <form id="email-form-5" name="email-form-5" data-name="Email Form 5"><label for="DoB">Date of birth:</label><input type="text" class="text-field-3 w-input" maxlength="256" name="DoB" data-name="DoB" placeholder="DD-MM-YYYY" id="DoB" required=""><label for="username">Username:</label><input type="text" class="text-field-4 w-input" maxlength="256" name="username" data-name="username" placeholder="e.g. liviapopper" id="username" required="">
                    <h4>Choose a payment method:</h4><img src="./Livia popper&#39;s First Project_files/5ad5b9723d5f8322070b55f0_003-visa.png"><img src="./Livia popper&#39;s First Project_files/5ad5b971966f0943064b2033_002-paypal.png" class="image-5"><img src="./Livia popper&#39;s First Project_files/5ad5b9723d5f835fcc0b55f1_001-mastercard.png" class="image-6"><img src="./Livia popper&#39;s First Project_files/5ad5b9720745fc0d61f59830_004-ideal.png" class="image-7"><input type="submit" value="To the payment page" data-wait="Please wait..." class="submit w-button"></form>
                <div class="w-form-done">
                    <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="w-form-fail">
                    <div>Oops! Something went wrong while submitting the form.</div>
                </div>
            </div>
        </div>
    </div>
    <div><img src="img/balluminaria_hot_air_balloon_glow_festival-widescreen_wallpapers.jpg"></div><br><br>
    <div class="w-form">
        <form id="email-form" name="email-form" data-name="Email Form" class="form">
            <h3 class="heading-3">Choose your currency:</h3><select id="field" name="field" required="" class="select-field w-select"><option value="">EUR</option><option value="">USD</option><option value="">GBP</option></select><label for="name" class="field-label"></label></form>
        <div class="w-form-done">
            <div>Thank you! Your submission has been received!</div>
        </div>
        <div class="w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
        </div>
    </div>
    <div class="div-block-5"><img src="./Livia popper&#39;s First Project_files/5ad4d245fbca00c250d6ef14_logo2.JPG" width="113" class="image-3">
        <h3 class="heading-5">55 euros/day</h3>
        <h4 class="heading-4">Tickets option:</h4>
        <div class="w-form">
            <form id="email-form-2" name="email-form-2" data-name="Email Form 2" class="form-2"><label for="name" class="field-label-2"></label>
                <div class="radio-button-field w-radio"><input type="radio" id="1 Day Ticket" name="Tickets-choice" value="1 Day Ticket" data-name="Tickets choice" required="" class="w-radio-input"><label for="1 Day Ticket" class="w-form-label">1 Day Ticket</label></div>
                <div class="w-radio"><input type="radio" id="2 Days Ticket" name="Tickets-choice" value="2 Days Ticket" data-name="Tickets choice" class="w-radio-input"><label for="2 Days Ticket" class="w-form-label">2 Days Ticket</label></div>
                <div class="radio-button-field-2 w-radio"><input type="radio" id="General Ticket" name="Tickets-choice" value="General Ticket" data-name="Tickets choice" class="w-radio-input"><label for="General Ticket" class="w-form-label">General Ticket</label></div>
            </form>
            <div class="w-form-done">
                <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
                <div>Oops! Something went wrong while submitting the form.</div>
            </div>
        </div><a class="button-2 w-button">BUY TICKETS</a></div>
    <div class="div-block-7"><img src="./Livia popper&#39;s First Project_files/5ad4d245fbca00c250d6ef14_logo2.JPG" width="105" class="image-4">
        <h3 class="heading-8">VIP Ticket</h3>
        <h2 class="heading-7">75 euros/day</h2>
        <h4 class="heading-6">Tickets option:</h4>
        <div class="form-block w-form">
            <form id="email-form-3" name="email-form-3" data-name="Email Form 3" class="form-3">
                <div class="radio-button-field-3 w-radio"><input type="radio" id="1 Day Ticket-2" name="Tickets-option" value="1 Day Ticket" data-name="Tickets option" class="w-radio-input"><label for="1 Day Ticket-2" class="field-label-3 w-form-label">1 Day Ticket</label></div>
                <div class="radio-button-field-4 w-radio"><input type="radio" id="2 Days Ticket-2" name="Tickets-option" value="2 Days Ticket" data-name="Tickets option" class="w-radio-input"><label for="2 Days Ticket-2" class="field-label-4 w-form-label">2 Days Ticket</label></div>
                <div class="radio-button-field-5 w-radio"><input type="radio" id="General Ticket-2" name="Tickets-option" value="General Ticket" data-name="Tickets option" class="w-radio-input"><label for="General Ticket-2" class="field-label-5 w-form-label">General Ticket</label></div>
            </form>
            <div class="w-form-done">
                <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
                <div>Oops! Something went wrong while submitting the form.</div>
            </div>
        </div><a class="button-3 w-button">BUY TICKETS</a></div>
   
      
    <?php
    include 'included/footer.html';
     ?>
    
    
    <script>
    var modal = document.getElementById('Modal-Wrapper');

        // Get the button that opens the modal
        var btn = document.getElementsByClassName("button-2 w-button")[0];

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close-link")[0];

        // When the user clicks on the button, open the modal 
        btn.onclick = function() {
            modal.style.opacity=1;
            modal.style.display = "block";
           
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
            modal.style.opacity=0;
        }


    </script>
    
    </body>

</html>
