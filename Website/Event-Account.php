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