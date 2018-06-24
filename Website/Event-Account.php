<?php
session_start();
?>
<!doctype html>
<html>
<head>
	
	
	<script src="js/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/MainStyle.css">
	<link rel="stylesheet" type="text/css" href="css/Acc.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<link rel="stylesheet" href="css/GeneralHeader.css">
    
     <style>
    .pointer {cursor: pointer;}
    </style>
    
	</head>
	
	<body>
	
        <nav class="wrapper1">
        
        <div class="logotop">
           <a href="index.php"><img  src="img/logo2.JPG"></a>
        </div>
        <div class="gridButtons">
            <div class="gridButtonsLeft">
                <a href="line_up.php"><div><p>Line-up</p></div></a>
                <a href="Tickets.php"><div><p>Tickets</p></div></a>
                <a href="Camp.php"><div><p>Maps</p></div></a>
            </div>

            <div class="gridButtonsRight">
                <a href="experience.php"><div><p>Experience</p></div></a>
                <a href="gifts.php"><div><p>Gifts</p></div></a>
                <a href="Event-Account.php" class = "Selected"><div class="logInSelected"><p>My Account</p></div></a>
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
                            <a href="Tickets.php">Ticket</a>
                            <a href="Camp.php">Maps</a>
                            <a href="experience.php">Experience</a>
                            <a href="gifts.php">Gifts</a>
                            <a class="navbarSelected" href="Event-Account.php" class = "Selected">My Account</a>
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
        if($_SESSION['LoggedIn']==true)
        {
 ?>
        
	<div class ="D1">

	<div class="D2">
	<div class="D2D1">
	
		<label>Welcome, <?php echo $_SESSION['Name']; ?>!</label><br>
		
		</div>
	<div class = "D2D2">
        
        
<!--the log-out-->
	<form method="post" action = "Log-In.php">
        <button class="pointer" name="LogOut">Log-Out</button>
        </form>
	 <?php

        
if(isset($_POST['LogOut']))
   {

    
       if ($_SESSION['LoggedIn'] === true)
       {
           
           $_SESSION['LoggedIn'] = false;
            header("location: Log-In.php");
       }
       
   }
?>
    <?php 
    if(isset($_POST['credit']))
    {
        $_SESSION['creditsnew'] = $_POST['credits'];
        if($_SESSION['creditsnew'] >0)
        {
             echo '<style type="text/css">
                    #error{
                    display:none;
                    }</style>';
            echo '<script> window.location.href="paypage_credits.php"; </script>';
        }
        else
        {
           echo '<style type="text/css">
                    #error{
                    display:block;
                    }
                    #myModal{
                    display:block;
                    }
                    </style>';
        }
    }
    ?>
        
	<button class="pointer" id = "myBtn">Add Credits</button>
    <div id="myModal" class="modal">
	<div class="modal-content">
            <span class="close">&times;</span>
            <form method="post" action = "Event-Account.php">
            <div id = "error">Please enter the number bigger than 0.</div>
            <h3>Enter how much you want to deposit here:</h3>
            <input class = "credit" type="text" placeholder="Amount" name="credits" required>
            <input class = "Nat" name ="credit" type="submit" value = "Submit">
            </form>
    </div>
    </div>
	</div>
	</div>
	<div class = "Info">
		<div class="i1"><div class = "hea1"><h3>Ticket Details</h3></div><div class = "details"><div><p>Ticket NO: <?php echo $_SESSION['TicketID']; ?></p> <p>Ticket type: <?php echo $_SESSION['type']; ?></p> <p>Camp Spot: 22R2</p></div><div class = "clo"><p>Name: <?php echo $_SESSION['Buyer']; ?></p><p>Credit: <?php echo $_SESSION['Credits']; ?> €</p><p>Email: <?php echo $_SESSION['Buyer_Email']; ?></p></div></div></div>
	<div class ="Campcontainer"><div class ="Set1"><h3>Camp Details</h3></div><div class ="Set2"><p>Row: 22 NO: R2</p></div><div class="Set3"><div>Livia Popper<div class = "se1">Host</div></div><div>Himanshu Kotai<div class ="se">Member</div></div><div> Jane Buzykina<div class="se">Member</div></div><div>Trung Dung Luong<div class = "se">Member</div></div>
        
        
		</div>
        
        <form action="" method="post">
             <input type="text" name="FirstName" style="background-color: #222233; color:#AACCFF; font-style: italic; border-color: grey; padding:3px; padding-right:30px; text-align: center; padding-left:25px;" placeholder="Enter member's ticket ID"><br>
            <div class="D2D3"><button class="pointer" name="btnAddMember" type="submit">Add Member</button></div>
        </form>
        
        
        
        
        </div>
	</div>
		</div>
		 <?php
    include 'included/footer.html';
     ?>
<script type="text/javascript">
    var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    document.getElementById('error').style.display = "none";
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        document.getElementById('error').style.display = "none";
        modal.style.display = "none";
    }
}
</script>
<?php
}
else
    {
        echo '<script> window.location.href="Log-In.php"; </script>';
    }
    ?>
	</body>
</html>