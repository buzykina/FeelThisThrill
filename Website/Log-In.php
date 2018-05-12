<?php
session_start();
$_SESSION['LoggedIn']=false;
$servername = "studmysql01.fhict.local";
$username = "dbi380316";
$password = "LP2699";
$db = "dbi380316";
$conn = new mysqli($servername,$username,$password,$db);
?>


<!doctype html>
<html>
<head>
    <title>Feel This Thrill - Log-In</title>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jane_js.js"></script>
<link rel="stylesheet" type="text/css" href="css/MainStyle.css">
	<link rel="stylesheet" type="text/css" href="css/Log-in.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<link rel="stylesheet" href="css/GeneralHeader.css">
       
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
                <a href="Log-In.php"><div class="logInSelected"><p>Log-In</p></div></a>
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
    
    if(isset($_POST['LogIn']))
    {
        $username=$_POST['user'];
        $password=$_POST['pass'];
        
        $sql_query="SELECT * FROM user WHERE username='".$username."' AND password='".$password."' LIMIT 1";
        
        $result = mysqli_query($conn, $sql_query);
        $num =mysqli_num_rows($result);
        
        if(mysqli_num_rows($result))
        {
            $_SESSION['LoggedIn']=true;
            echo '<script> window.location.href="Event-Account.php"; </script>';
            
        }
        else
        {
            $_SESSION['LoggedIn']=false;
            echo "Failed!";
        }
        mysqli_close($conn);
    }
        
?>
  


   <div id="slideshow">
	  <div class="blurtoptobottom"></div>  
      <div class="blurlefttoright"></div> 
    <figure>
		
     <img src="slideshow/slide1.png">
     <img src="slideshow/slide2.png">
     <img src="slideshow/slide3.png">
     <img src="slideshow/slide4.png">
     <img src="slideshow/slide1.png">
    </figure>
</div>
	<div class = "Logcontainer">
		<div class = "total">
        <div class = "code">
			
		 <form class="LogBox animate">
			 <button class = "contains"><label><b>Log-in with Code</b></label></button>
		 <div class="container">
      <label><b>Enter Code :</b></label>
      <input class = "Unary" type="text" placeholder="Enter Code" name="uid" required>

       <button class = "Nat" name ='submit'>Log-in</button>
			 </div>
		</form>
		</div>
		</div>
		<div class = "Signorlog">
		<div class = "code">
            
    
                        
		<form method="post" class="LogBox1 animate" action = "Log-In.php" >
      <button class = "contains"><label><b>Log-in with Username</b></label></button>
       <div class="container">
       <label><b>Enter Username:</b></label>
        <input class = "Unary" type="text" placeholder="Enter Username" name="user" required>
		<label><b>Enter Password:</b></label>
       <input class = "Unary" type="text" placeholder="Enter Password" name="pass" required>
       <input class = "Nat" name ="LogIn" type="submit" value = "Log-In">
		</div>
		</form>

            
		</div>
		<div class = "code">
		<form class="LogBox1 animate">
		<button class = "contains"><label><b>Sign Up</b></label></button>
		 <div class="container">
			 <center><label><b>Need to buy a ticket to get Account</b></label></center>
       <button class = "Nat" name ='submit'>Tickets</button>
			 </div>
		</form>
		</div>
		</div>
		<div class = "Update"><label>0/10000 Tickets Sold</label></div>
		</div>
    <?php
			include 'included/footer.html';
			?>
    </body>   
    

</html>