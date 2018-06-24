<?php
session_start();

    if(!(isset($_SESSION['ticketNo'])))
    { $_SESSION['ticketNo']=111130; 
    }   
    
?>

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
<link rel="stylesheet" type="text/css" href="css/TicketsStyle.css">
</head>

<body class="body">
   
    <?php
        if(isset($_SESSION['LoggedIn']) && $_SESSION['LoggedIn']==true)
        { ?>
            <nav class="wrapper1">
        
        <div class="logotop">
           <a href="index.php"><img  src="img/logo2.JPG"></a>
        </div>
        <div class="gridButtons">
            <div class="gridButtonsLeft">
                <a href="line_up.php"><div><p>Line-up</p></div></a>
                <a href="Tickets.php" class = "Selected"><div><p>Tickets</p></div></a>
                <a href="Camp.php"><div><p>Maps</p></div></a>
            </div>

            <div class="gridButtonsRight">
                <a href="experience.php"><div><p>Experience</p></div></a>
                <a href="gifts.php"><div><p>Gifts</p></div></a>
                <a href="Event-Account.php"><div><p>My Account</p></div></a>
            </div>
        </div>     

        <div class="searchbartop">    
                <svg xmlns="http://www.w3.org/2000/svg" style="display:none">
                    <symbol xmlns="http://www.w3.org/2000/svg" id="sbx-icon-search-18" viewBox="0 0 40 40">
                    <path d="M30.776 27.146l-1.32-1.32-3.63 3.632 1.32 1.32 3.63-3.632zm1.368 1.368l6.035 6.035c.39.39.4 1.017.008 1.408l-2.23 2.23c-.387.387-1.015.387-1.41-.008l-6.035-6.035 3.63-3.63zm-8.11 1.392c-2.356 1.363-5.092 2.143-8.01 2.143C7.174 32.05 0 24.873 0 16.023S7.174 0 16.024 0c8.85 0 16.025 7.174 16.025 16.024 0 2.918-.78 5.654-2.144 8.01l8.96 8.962c1.175 1.174 1.184 3.07.008 4.246l-1.632 1.632c-1.17 1.17-3.067 1.173-4.247-.007l-8.96-8.96zm-8.01.54c7.965 0 14.422-6.457 14.422-14.422 0-7.965-6.457-14.422-14.422-14.422-7.965 0-14.422 6.457-14.422 14.422 0 7.965 6.457 14.422 14.422 14.422zm0-2.403c6.638 0 12.018-5.38 12.018-12.02 0-6.636-5.38-12.017-12.018-12.017-6.637 0-12.018 5.38-12.018 12.018 0 6.638 5.38 12.02 12.018 12.02zm0-1.402c5.863 0 10.616-4.752 10.616-10.616 0-5.863-4.753-10.616-10.616-10.616-5.863 0-10.616 4.753-10.616 10.616 0 5.864 4.753 10.617 10.616 10.617z"
                    fill-rule="evenodd" />
                    </symbol>
                    <symbol xmlns="http://www.w3.org/2000/svg" id="sbx-icon-clear-5" viewBox="0 0 20 20">
                    <path d="M10 20c5.523 0 10-4.477 10-10S15.523 0 10 0 0 4.477 0 10s4.477 10 10 10zm1.35-10.123l3.567 3.568-1.225 1.226-3.57-3.568-3.567 3.57-1.226-1.227 3.568-3.568-3.57-3.57 1.227-1.224 3.568 3.568 3.57-3.567 1.224 1.225-3.568 3.57zM10 18.272c4.568 0 8.272-3.704 8.272-8.272S14.568 1.728 10 1.728 1.728 5.432 1.728 10 5.432 18.272 10 18.272z"
                    fill-rule="evenodd" />
                    </symbol>
                </svg>
                
                <form novalidate="novalidate" onsubmit="return false;" class="searchbox sbx-custom">
                    <div role="search" class="sbx-custom__wrapper">
                    <input type="search" name="search" placeholder="Search..." autocomplete="off" required="required" class="sbx-custom__input">
                    <button type="submit" title="Submit your search query." class="sbx-custom__submit">
                        <svg role="img" aria-label="Search">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#sbx-icon-search-18"></use>
                        </svg>
                    </button>
                    <button type="reset" title="Clear the search query." class="sbx-custom__reset" style="margin-top:-11px;">
                        <svg role="img" aria-label="Reset">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#sbx-icon-clear-5"></use>
                        </svg>
                    </button>
                    </div>
                </form>
                <script type="text/javascript">
                    document.querySelector('.searchbox [type="reset"]').addEventListener('click', function() {  this.parentNode.querySelector('input').focus();});
                </script>
        </div>

         <div class="navbar">
                    <span class="open-slide">
                        <a href="#" onclick="openSlideMenu()">
                            <svg width="30" height="30">
                                <path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
                                <path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>
                                <path d="M0,23 30,23" stroke="#fff" stroke-width="5"/>
                            </svg>
                        </a>
                    </span>

                    <div id="side-menu" class="side-nav">
                            <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
                            <a href="line_up.php">Line-up</a>
                            <a href="Tickets.php" class = "Selected">Ticket</a>
                            <a href="Camp.php">Maps</a>
                            <a href="experience.php">Experience</a>
                            <a href="gifts.php">Gifts</a>
                            <a class="navbarSelected" href="Log-In.php">Log-in</a>
                    </div>
                </div>

                <script>
                    function openSlideMenu(){
                    document.getElementById('side-menu').style.width = '250px';
                    document.getElementById('main').style.marginLeft = '250px';
                    }

                    function closeSlideMenu(){
                    document.getElementById('side-menu').style.width = '0';
                    document.getElementById('main').style.marginLeft = '0';
                    }
                </script>
    </nav>
        <?php }
        else { ?>
        <nav class="wrapper1">
        
        <div class="logotop">
           <a href="index.php"><img  src="img/logo2.JPG"></a>
        </div>
        <div class="gridButtons">
            <div class="gridButtonsLeft">
                <a href="line_up.php"><div><p>Line-up</p></div></a>
                <a href="Tickets.php" class = "Selected"><div><p>Tickets</p></div></a>
                <a href="Camp.php"><div><p>Maps</p></div></a>
            </div>

            <div class="gridButtonsRight">
                <a href="experience.php"><div><p>Experience</p></div></a>
                <a href="gifts.php"><div><p>Gifts</p></div></a>
                <a href="Log-In.php"><div><p>Log-In</p></div></a>
            </div>
        </div>     

        <div class="searchbartop">    
                <svg xmlns="http://www.w3.org/2000/svg" style="display:none">
                    <symbol xmlns="http://www.w3.org/2000/svg" id="sbx-icon-search-18" viewBox="0 0 40 40">
                    <path d="M30.776 27.146l-1.32-1.32-3.63 3.632 1.32 1.32 3.63-3.632zm1.368 1.368l6.035 6.035c.39.39.4 1.017.008 1.408l-2.23 2.23c-.387.387-1.015.387-1.41-.008l-6.035-6.035 3.63-3.63zm-8.11 1.392c-2.356 1.363-5.092 2.143-8.01 2.143C7.174 32.05 0 24.873 0 16.023S7.174 0 16.024 0c8.85 0 16.025 7.174 16.025 16.024 0 2.918-.78 5.654-2.144 8.01l8.96 8.962c1.175 1.174 1.184 3.07.008 4.246l-1.632 1.632c-1.17 1.17-3.067 1.173-4.247-.007l-8.96-8.96zm-8.01.54c7.965 0 14.422-6.457 14.422-14.422 0-7.965-6.457-14.422-14.422-14.422-7.965 0-14.422 6.457-14.422 14.422 0 7.965 6.457 14.422 14.422 14.422zm0-2.403c6.638 0 12.018-5.38 12.018-12.02 0-6.636-5.38-12.017-12.018-12.017-6.637 0-12.018 5.38-12.018 12.018 0 6.638 5.38 12.02 12.018 12.02zm0-1.402c5.863 0 10.616-4.752 10.616-10.616 0-5.863-4.753-10.616-10.616-10.616-5.863 0-10.616 4.753-10.616 10.616 0 5.864 4.753 10.617 10.616 10.617z"
                    fill-rule="evenodd" />
                    </symbol>
                    <symbol xmlns="http://www.w3.org/2000/svg" id="sbx-icon-clear-5" viewBox="0 0 20 20">
                    <path d="M10 20c5.523 0 10-4.477 10-10S15.523 0 10 0 0 4.477 0 10s4.477 10 10 10zm1.35-10.123l3.567 3.568-1.225 1.226-3.57-3.568-3.567 3.57-1.226-1.227 3.568-3.568-3.57-3.57 1.227-1.224 3.568 3.568 3.57-3.567 1.224 1.225-3.568 3.57zM10 18.272c4.568 0 8.272-3.704 8.272-8.272S14.568 1.728 10 1.728 1.728 5.432 1.728 10 5.432 18.272 10 18.272z"
                    fill-rule="evenodd" />
                    </symbol>
                </svg>
                
                <form novalidate="novalidate" onsubmit="return false;" class="searchbox sbx-custom">
                    <div role="search" class="sbx-custom__wrapper">
                    <input type="search" name="search" placeholder="Search..." autocomplete="off" required="required" class="sbx-custom__input">
                    <button type="submit" title="Submit your search query." class="sbx-custom__submit">
                        <svg role="img" aria-label="Search">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#sbx-icon-search-18"></use>
                        </svg>
                    </button>
                    <button type="reset" title="Clear the search query." class="sbx-custom__reset" style="margin-top:-11px;">
                        <svg role="img" aria-label="Reset">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#sbx-icon-clear-5"></use>
                        </svg>
                    </button>
                    </div>
                </form>
                <script type="text/javascript">
                    document.querySelector('.searchbox [type="reset"]').addEventListener('click', function() {  this.parentNode.querySelector('input').focus();});
                </script>
        </div>

         <div class="navbar">
                    <span class="open-slide">
                        <a href="#" onclick="openSlideMenu()">
                            <svg width="30" height="30">
                                <path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
                                <path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>
                                <path d="M0,23 30,23" stroke="#fff" stroke-width="5"/>
                            </svg>
                        </a>
                    </span>

                    <div id="side-menu" class="side-nav">
                            <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
                            <a href="line_up.php">Line-up</a>
                            <a href="Tickets.php" class = "Selected">Ticket</a>
                            <a href="Camp.php">Maps</a>
                            <a href="experience.php">Experience</a>
                            <a href="gifts.php">Gifts</a>
                            <a class="navbarSelected" href="Log-In.php">Log-in</a>
                    </div>
                </div>

                <script>
                    function openSlideMenu(){
                    document.getElementById('side-menu').style.width = '250px';
                    document.getElementById('main').style.marginLeft = '250px';
                    }

                    function closeSlideMenu(){
                    document.getElementById('side-menu').style.width = '0';
                    document.getElementById('main').style.marginLeft = '0';
                    }
                </script>
    </nav>
       <?php
        }
        ?>
     
	<ul id = "submenu">
        <li><h3><a href="BuyTickets.php" class = "Selected">Buy Tickets</a></h3></li>  
        <li><hr></li>
        <?php 
        if($_SESSION['LoggedIn']==true)
        {
        ?>
        <li><h3><a href="CampingSpots.php">Rent Camping Spots</a></h3></li>
        <?php 
        }
        else
        {
        ?>
        <li><h3><a href="login.php">Rent Camping Spots</a></h3></li>
        <?php }?>
     </ul>
    
    <div id="modals">
   <!--modal for 1 person-->
      <div id="Modal-Wrapper" class="modal-wrapper" name="form1">
        <div class="sign-up-wrapper" style="margin-top:20px;"><a class="close-link" data-ix="close-interaction" style="cursor:pointer;">Close X</a>
            <h2>Fill in your details!</h2>
            
            <div class="w-form" id="form1">
                <form id="email-form-5" name="email-form-5" data-name="Email Form 5" method="get" action = "insert.php"><label for="name">Name:</label><input type="text" class="text-field w-input" maxlength="256" name="name" data-name="Name" placeholder="Enter your name" id="name" required=""><label for="email">Email Address:</label><input type="email" class="text-field-2 w-input" maxlength="256" name="email" data-name="Email" placeholder="Enter your email" id="email" required=""><label for="DoB">Date of birth:</label><input type="text" class="text-field-3 w-input" maxlength="256" name="DoB" data-name="DoB" placeholder="DD-MM-YYYY" id="DoB" required=""><input type="submit" value="To the payment page" data-wait="Please wait..." class="submit w-button" action="PaymentPage.php"></form>
                <div class="w-form-done">
                    <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="w-form-fail">
                    <div>Oops! Something went wrong while submitting the form.</div>
                </div>
            </div>
        </div>
    </div>
    
    <!--modal for 2 persons-->
     <div id="Modal-Wrapper" class="modal-wrapper" name="form2" style="overflow-y: scroll;">
        <div class="sign-up-wrapper" style="margin-top:20px;"><a class="close-link" data-ix="close-interaction" style="cursor:pointer;">Close X</a>
            <h2>Fill in your details!</h2>
            
            <div class="w-form" id="form1">
                <h3>Ticket 1:</h3>
                <form id="email-form-5" name="email-form-5" data-name="Email Form 5" method="get" action = "insert.php"><label for="name">Name:</label><input type="text" class="text-field w-input" maxlength="256" name="name" data-name="Name" placeholder="Enter your name" id="name" required=""><label for="email">Email Address:</label><input type="email" class="text-field-2 w-input" maxlength="256" name="email" data-name="Email" placeholder="Enter your email" id="email" required=""><label for="DoB">Date of birth:</label><input type="text" class="text-field-3 w-input" maxlength="256" name="DoB" data-name="DoB" placeholder="DD-MM-YYYY" id="DoB" required="">
                    <h3>Ticket 2:</h3>
                
                <label for="name2">Name:</label><input type="text" class="text-field w-input" maxlength="256" name="name2" data-name="Name2" placeholder="Enter your name" id="name2" required=""><label for="email2">Email Address:</label><input type="email2" class="text-field-2 w-input" maxlength="256" name="email2" data-name="Email2" placeholder="Enter your email" id="email2" required=""><label for="DoB2">Date of birth:</label><input type="text" class="text-field-3 w-input" maxlength="256" name="DoB2" data-name="DoB2" placeholder="DD-MM-YYYY" id="DoB" required=""><input type="submit" value="To the payment page" data-wait="Please wait..." class="submit w-button" action="PaymentPage.php">
                </form>
                <div class="w-form-done">
                    <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="w-form-fail">
                    <div>Oops! Something went wrong while submitting the form.</div>
                </div>
            </div>
        </div>
    </div>
    
    <!--modal for 3 persons-->
   <div id="Modal-Wrapper" class="modal-wrapper" name="form3" style="overflow-y: scroll;">
        <div class="sign-up-wrapper" style="margin-top:20px;"><a class="close-link" data-ix="close-interaction" style="cursor:pointer;">Close X</a>
            <h2>Fill in your details!</h2>
            
            <div class="w-form" id="form1">
                <h3>Ticket 1:</h3>
                <form id="email-form-5" name="email-form-5" data-name="Email Form 5" method="get" action = "insert.php"><label for="name">Name:</label><input type="text" class="text-field w-input" maxlength="256" name="name" data-name="Name" placeholder="Enter your name" id="name" required=""><label for="email">Email Address:</label><input type="email" class="text-field-2 w-input" maxlength="256" name="email" data-name="Email" placeholder="Enter your email" id="email" required=""><label for="DoB">Date of birth:</label><input type="text" class="text-field-3 w-input" maxlength="256" name="DoB" data-name="DoB" placeholder="DD-MM-YYYY" id="DoB" required="">
                    
                    <h3>Ticket 2:</h3>
                
                <label for="name2">Name:</label><input type="text" class="text-field w-input" maxlength="256" name="name2" data-name="Name2" placeholder="Enter your name" id="name2" required=""><label for="email2">Email Address:</label><input type="email2" class="text-field-2 w-input" maxlength="256" name="email2" data-name="Email2" placeholder="Enter your email" id="email2" required=""><label for="DoB2">Date of birth:</label><input type="text" class="text-field-3 w-input" maxlength="256" name="DoB2" data-name="DoB2" placeholder="DD-MM-YYYY" id="DoB2" required="">
                    
                    <h3>Ticket 3:</h3>
                
                <label for="name3">Name:</label><input type="text" class="text-field w-input" maxlength="256" name="name3" data-name="Name3" placeholder="Enter your name" id="name3" required=""><label for="email3">Email Address:</label><input type="email3" class="text-field-2 w-input" maxlength="256" name="email3" data-name="Email3" placeholder="Enter your email" id="email3" required=""><label for="DoB3">Date of birth:</label><input type="text" class="text-field-3 w-input" maxlength="256" name="DoB3" data-name="DoB3" placeholder="DD-MM-YYYY" id="DoB3" required=""><input type="submit" value="To the payment page" data-wait="Please wait..." class="submit w-button" action="PaymentPage.php">
                </form>
                <div class="w-form-done">
                    <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="w-form-fail">
                    <div>Oops! Something went wrong while submitting the form.</div>
                </div>
            </div>
        </div>
    </div>  
    
    
    <!--modal for 4 persons-->
     <div id="Modal-Wrapper" class="modal-wrapper" name="form4" style="overflow-y: scroll;">
        <div class="sign-up-wrapper" style="margin-top:20px;"><a class="close-link" data-ix="close-interaction" style="cursor:pointer;">Close X</a>
            <h2>Fill in your details!</h2>
            
            <div class="w-form" id="form1">
                <h3>Ticket 1:</h3>
                <form id="email-form-5" name="email-form-5" data-name="Email Form 5" method="get" action = "insert.php"><label for="name">Name:</label><input type="text" class="text-field w-input" maxlength="256" name="name" data-name="Name" placeholder="Enter your name" id="name" required=""><label for="email">Email Address:</label><input type="email" class="text-field-2 w-input" maxlength="256" name="email" data-name="Email" placeholder="Enter your email" id="email" required=""><label for="DoB">Date of birth:</label><input type="text" class="text-field-3 w-input" maxlength="256" name="DoB" data-name="DoB" placeholder="DD-MM-YYYY" id="DoB" required="">
                    
                    <h3>Ticket 2:</h3>
                
                <label for="name2">Name:</label><input type="text" class="text-field w-input" maxlength="256" name="name2" data-name="Name2" placeholder="Enter your name" id="name2" required=""><label for="email2">Email Address:</label><input type="email2" class="text-field-2 w-input" maxlength="256" name="email2" data-name="Email2" placeholder="Enter your email" id="email2" required=""><label for="DoB2">Date of birth:</label><input type="text" class="text-field-3 w-input" maxlength="256" name="DoB2" data-name="DoB2" placeholder="DD-MM-YYYY" id="DoB2" required="">
                    
                    <h3>Ticket 3:</h3>
                
                <label for="name3">Name:</label><input type="text" class="text-field w-input" maxlength="256" name="name3" data-name="Name3" placeholder="Enter your name" id="name3" required=""><label for="email3">Email Address:</label><input type="email3" class="text-field-2 w-input" maxlength="256" name="email3" data-name="Email3" placeholder="Enter your email" id="email3" required=""><label for="DoB3">Date of birth:</label><input type="text" class="text-field-3 w-input" maxlength="256" name="DoB3" data-name="DoB3" placeholder="DD-MM-YYYY" id="DoB3" required="">
                    
                    <h3>Ticket 4:</h3>
                
                <label for="name4">Name:</label><input type="text" class="text-field w-input" maxlength="256" name="name4" data-name="Name4" placeholder="Enter your name" id="name4" required=""><label for="email4">Email Address:</label><input type="email4" class="text-field-2 w-input" maxlength="256" name="email4" data-name="Email4" placeholder="Enter your email" id="email4" required=""><label for="DoB4">Date of birth:</label><input type="text" class="text-field-3 w-input" maxlength="256" name="DoB4" data-name="DoB4" placeholder="DD-MM-YYYY" id="DoB4" required=""><input type="submit" value="To the payment page" data-wait="Please wait..." class="submit w-button" action="PaymentPage.php">
                    
                </form>
                <div class="w-form-done">
                    <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="w-form-fail">
                    <div>Oops! Something went wrong while submitting the form.</div>
                </div>
            </div>
        </div>
    </div>
 
    
    
     <!--modal for 5 persons-->
  <div id="Modal-Wrapper" class="modal-wrapper" name="form5" style="overflow-y: scroll;">
        <div class="sign-up-wrapper" style="margin-top:20px;"><a class="close-link" data-ix="close-interaction" style="cursor:pointer;">Close X</a>
            <h2>Fill in your details!</h2>
            
            <div class="w-form" id="form1">
                <h3>Ticket 1:</h3>
                <form id="email-form-5" name="email-form-5" data-name="Email Form 5" method="get" action = "insert.php"><label for="name">Name:</label><input type="text" class="text-field w-input" maxlength="256" name="name" data-name="Name" placeholder="Enter your name" id="name" required=""><label for="email">Email Address:</label><input type="email" class="text-field-2 w-input" maxlength="256" name="email" data-name="Email" placeholder="Enter your email" id="email" required=""><label for="DoB">Date of birth:</label><input type="text" class="text-field-3 w-input" maxlength="256" name="DoB" data-name="DoB" placeholder="DD-MM-YYYY" id="DoB" required="">
                    
                    <h3>Ticket 2:</h3>
                
                <label for="name2">Name:</label><input type="text" class="text-field w-input" maxlength="256" name="name2" data-name="Name2" placeholder="Enter your name" id="name2" required=""><label for="email2">Email Address:</label><input type="email2" class="text-field-2 w-input" maxlength="256" name="email2" data-name="Email2" placeholder="Enter your email" id="email2" required=""><label for="DoB2">Date of birth:</label><input type="text" class="text-field-3 w-input" maxlength="256" name="DoB2" data-name="DoB2" placeholder="DD-MM-YYYY" id="DoB2" required="">
                    
                    <h3>Ticket 3:</h3>
                
                <label for="name3">Name:</label><input type="text" class="text-field w-input" maxlength="256" name="name3" data-name="Name3" placeholder="Enter your name" id="name3" required=""><label for="email3">Email Address:</label><input type="email3" class="text-field-2 w-input" maxlength="256" name="email3" data-name="Email3" placeholder="Enter your email" id="email3" required=""><label for="DoB3">Date of birth:</label><input type="text" class="text-field-3 w-input" maxlength="256" name="DoB3" data-name="DoB3" placeholder="DD-MM-YYYY" id="DoB3" required="">
                    
                    <h3>Ticket 4:</h3>
                
                <label for="name4">Name:</label><input type="text" class="text-field w-input" maxlength="256" name="name4" data-name="Name4" placeholder="Enter your name" id="name4" required=""><label for="email4">Email Address:</label><input type="email4" class="text-field-2 w-input" maxlength="256" name="email4" data-name="Email4" placeholder="Enter your email" id="email4" required=""><label for="DoB4">Date of birth:</label><input type="text" class="text-field-3 w-input" maxlength="256" name="DoB4" data-name="DoB4" placeholder="DD-MM-YYYY" id="DoB4" required="">
                    
                    <h3>Ticket 5:</h3>
                
                <label for="name5">Name:</label><input type="text" class="text-field w-input" maxlength="256" name="name5" data-name="Name5" placeholder="Enter your name" id="name5" required=""><label for="email5">Email Address:</label><input type="email5" class="text-field-2 w-input" maxlength="256" name="email5" data-name="Email5" placeholder="Enter your email" id="email5" required=""><label for="DoB5">Date of birth:</label><input type="text" class="text-field-3 w-input" maxlength="256" name="DoB5" data-name="DoB5" placeholder="DD-MM-YYYY" id="DoB5" required=""><input type="submit" value="To the payment page" data-wait="Please wait..." class="submit w-button" action="PaymentPage.php">
                    
                </form>
                <div class="w-form-done">
                    <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="w-form-fail">
                    <div>Oops! Something went wrong while submitting the form.</div>
                </div>
            </div>
        </div>
    </div> 
    
    
    
    <!--modal for 6 persons-->
    <div id="Modal-Wrapper" class="modal-wrapper" name="form6" style="overflow-y: scroll;">
        <div class="sign-up-wrapper" style="margin-top:20px;"><a class="close-link" data-ix="close-interaction" style="cursor:pointer;">Close X</a>
            <h2>Fill in your details!</h2>
            
            <div class="w-form" id="form1">
                <h3>Ticket 1:</h3>
                <form id="email-form-5" name="email-form-5" data-name="Email Form 5" method="get" action = "insert.php"><label for="name">Name:</label><input type="text" class="text-field w-input" maxlength="256" name="name" data-name="Name" placeholder="Enter your name" id="name" required=""><label for="email">Email Address:</label><input type="email" class="text-field-2 w-input" maxlength="256" name="email" data-name="Email" placeholder="Enter your email" id="email" required=""><label for="DoB">Date of birth:</label><input type="text" class="text-field-3 w-input" maxlength="256" name="DoB" data-name="DoB" placeholder="DD-MM-YYYY" id="DoB" required="">
                    
                    <h3>Ticket 2:</h3>
                
                <label for="name2">Name:</label><input type="text" class="text-field w-input" maxlength="256" name="name2" data-name="Name2" placeholder="Enter your name" id="name2" required=""><label for="email2">Email Address:</label><input type="email2" class="text-field-2 w-input" maxlength="256" name="email2" data-name="Email2" placeholder="Enter your email" id="email2" required=""><label for="DoB2">Date of birth:</label><input type="text" class="text-field-3 w-input" maxlength="256" name="DoB2" data-name="DoB2" placeholder="DD-MM-YYYY" id="DoB2" required="">
                    
                    <h3>Ticket 3:</h3>
                
                <label for="name3">Name:</label><input type="text" class="text-field w-input" maxlength="256" name="name3" data-name="Name3" placeholder="Enter your name" id="name3" required=""><label for="email3">Email Address:</label><input type="email3" class="text-field-2 w-input" maxlength="256" name="email3" data-name="Email3" placeholder="Enter your email" id="email3" required=""><label for="DoB3">Date of birth:</label><input type="text" class="text-field-3 w-input" maxlength="256" name="DoB3" data-name="DoB3" placeholder="DD-MM-YYYY" id="DoB3" required="">
                    
                    <h3>Ticket 4:</h3>
                
                <label for="name4">Name:</label><input type="text" class="text-field w-input" maxlength="256" name="name4" data-name="Name4" placeholder="Enter your name" id="name4" required=""><label for="email4">Email Address:</label><input type="email4" class="text-field-2 w-input" maxlength="256" name="email4" data-name="Email4" placeholder="Enter your email" id="email4" required=""><label for="DoB4">Date of birth:</label><input type="text" class="text-field-3 w-input" maxlength="256" name="DoB4" data-name="DoB4" placeholder="DD-MM-YYYY" id="DoB4" required="">
                    
                    <h3>Ticket 5:</h3>
                
                <label for="name5">Name:</label><input type="text" class="text-field w-input" maxlength="256" name="name5" data-name="Name5" placeholder="Enter your name" id="name5" required=""><label for="email5">Email Address:</label><input type="email5" class="text-field-2 w-input" maxlength="256" name="email5" data-name="Email5" placeholder="Enter your email" id="email5" required=""><label for="DoB5">Date of birth:</label><input type="text" class="text-field-3 w-input" maxlength="256" name="DoB5" data-name="DoB5" placeholder="DD-MM-YYYY" id="DoB5" required="">
                    
                    <h3>Ticket 6:</h3>
                
                <label for="name6">Name:</label><input type="text" class="text-field w-input" maxlength="256" name="name6" data-name="Name6" placeholder="Enter your name" id="name6" required=""><label for="email6">Email Address:</label><input type="email6" class="text-field-2 w-input" maxlength="256" name="email6" data-name="Email6" placeholder="Enter your email" id="email6" required=""><label for="DoB6">Date of birth:</label><input type="text" class="text-field-3 w-input" maxlength="256" name="DoB6" data-name="DoB6" placeholder="DD-MM-YYYY" id="DoB6" required=""><input type="submit" value="To the payment page" data-wait="Please wait..." class="submit w-button" action="PaymentPage.php">
                    
                </form>
                <div class="w-form-done">
                    <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="w-form-fail">
                    <div>Oops! Something went wrong while submitting the form.</div>
                </div>
            </div>
        </div>
    </div>
    </div>
    
    
    <!--
    
            if(isset($_POST['buyNormal']))
            { 
                $answer = $_POST['Tickets-choice'];
                $TicketType="Normal";
                $_SESSION["newTransaction"]=$answer;
                $_SESSION["newTransaction2"]=$TicketType;
                $_SESSION["newTransaction3"]='<script>document.getElementById("field").value </script>';
             
                
               
            }
            else if(isset($_POST['buyVIP']))
            {
                $answer = $_POST['Tickets-option'];
                $TicketType="VIP";
                $_SESSION["newTransaction"]=$answer;
                $_SESSION["newTransaction2"]=$TicketType;
                $_SESSION["newTransaction3"]='<script>document.getElementById("field").value </script>';
                
           
            }
        
   
    
    -->
    
    
<br><br>
    
    <div class="w-form">
        <form id="email-form" name="email-form" data-name="Email Form" class="form">
            <h3 class="heading-3">Number of participants:</h3><select id="field" name="field" required="" class="select-field w-select"><option value="1" >1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option></select><label for="name" class="field-label"></label></form>
        
    </div>
    <div class="div-block-5"><img src="./Livia popper&#39;s First Project_files/5ad4d245fbca00c250d6ef14_logo2.JPG" width="113" class="image-3">
        <h3 class="heading-5">20 euros/day</h3>
        <h4 class="heading-4">Tickets option:</h4>
        <div class="w-form">
            <form id="email-form-2" name="email-form-2" data-name="Email Form 2" class="form-2" action="BuyTickets.php" method="post"><label for="name" class="field-label-2"></label>
                <div class="radio-button-field w-radio"><input type="radio" id="1 Day Ticket" name="Tickets-choice" value="1 Day Ticket" data-name="Tickets choice" required="" class="w-radio-input" checked><label for="1 Day Ticket" class="w-form-label">1 Day Ticket</label></div>
                <div class="w-radio"><input type="radio" id="2 Days Ticket" name="Tickets-choice" value="2 Days Ticket" data-name="Tickets choice" class="w-radio-input"><label for="2 Days Ticket" class="w-form-label">2 Days Ticket</label></div>
                <div class="radio-button-field-2 w-radio"><input type="radio" id="General Ticket" name="Tickets-choice" value="General Ticket" data-name="Tickets choice" class="w-radio-input"><label for="General Ticket" class="w-form-label">General Ticket</label></div>
            
             <a type="submit" class="button-2 w-button" value="" name = "buyNormal">BUY TICKETS</a>
                
            </form>
           
        </div></div>
    
    
    <div class="div-block-7"><img src="./Livia popper&#39;s First Project_files/5ad4d245fbca00c250d6ef14_logo2.JPG" width="105" class="image-4">
        <h3 class="heading-8">VIP Ticket</h3>
        <h2 class="heading-7">30 euros/day</h2>
        <h4 class="heading-6">Tickets option:</h4>
        <div class="form-block w-form">
            <form id="email-form-3" name="email-form-3" data-name="Email Form 3" class="form-3" action="BuyTickets.php" method="post">
                <div class="radio-button-field-3 w-radio"><input type="radio" id="1 Day Ticket-2" name="Tickets-option" value="1 Day Ticket" data-name="Tickets option" class="w-radio-input" checked><label for="1 Day Ticket-2" class="field-label-3 w-form-label">1 Day Ticket</label></div>
                <div class="radio-button-field-4 w-radio"><input type="radio" id="2 Days Ticket-2" name="Tickets-option" value="2 Days Ticket" data-name="Tickets option" class="w-radio-input"><label for="2 Days Ticket-2" class="field-label-4 w-form-label">2 Days Ticket</label></div>
                <div class="radio-button-field-5 w-radio"><input type="radio" id="General Ticket-2" name="Tickets-option" value="General Ticket" data-name="Tickets option" class="w-radio-input"><label for="General Ticket-2" class="field-label-5 w-form-label">General Ticket</label></div>
           
                <a type="submit" class="button-3 w-button" value="" name = "buyVIP">BUY TICKETS</a>
            
            </form>
          
        </div></div>
   
      
    <?php
    include 'included/footer.html';
     ?>
    
    
   <script>
    //var modal = document.getElementById('Modal-Wrapper');

        // Get the button that opens the modal
        var btn = $(".button-3.w-button");

        // Get the <span> element that closes the modal
        var span = $(".close-link")

        // When the user clicks on the button, open the modal 
        btn.click(function() {
           // modal.style.opacity=1;
           // modal.style.display = "block";
            var amount = $("#email-form select#field")
            amount = amount[0].value
            toggleModals(amount);
        })
       
       
        btn = $(".button-2.w-button");
       
        // When the user clicks on the button, open the modal 
        btn.click(function() {
           // modal.style.opacity=1;
           // modal.style.display = "block";
            var amount = $("#email-form select#field")
            amount = amount[0].value
            toggleModals(amount);
        })

        // When the user clicks on <span> (x), close the modal
        span.click(function() {
            hideModals();
        });


    </script> 
<script>        
    var modals = $(".modal-wrapper");
    function toggleModals(number){
        
        hideModals();
        $("#modals").css("display", "block")
        modals.each(function(){
            
            inputs = $(this).find("input")
            inputs.each(function(){
                $(this).val("")
            })
            
            if(number == 0) return;
            number -= 1;
            $(this).css("opacity", "1")
            $(this).css("display", "block")
            
        })
    }
    
    function hideModals(){
        
        $("#modals").css("display", "none")
    }
    
    </script>    
  
    
    </body>

</html>
