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
<script src="js/log_in.js"></script>
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
                <a href="Log-In.php" class = "Selected"><div class="logInSelected"><p>Log-In</p></div></a>
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
                            <a class="navbarSelected" href="Log-In.php" class = "Selected">Log-in</a>
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
        $password=md5($_POST['pass']);
        
        $sql_query="SELECT * FROM user WHERE username='".$username."' AND password='".$password."' LIMIT 1";
        
        $result = mysqli_query($conn, $sql_query);
        $num =mysqli_num_rows($result);
        $row = mysqli_fetch_array($result); 
        
        if(mysqli_num_rows($result))
        {
            $_SESSION['LoggedIn']=true;
            $_SESSION['Name']=$row['username'];
            $_SESSION['TicketID']=$row['ticketID'];
            $_SESSION['Credits']=$row['credits'];
            $_SESSION['Buyer']=$row['buyerName'];
            $_SESSION['Buyer_Email']=$row['email'];
            $_SESSION['age'] = date_diff(date_create($row['DoB']), date_create('today'))->y;
            $_SESSION['Buyer_CampSpot']=$row['campingSpot'];
            $sql_query1="SELECT * FROM ticket WHERE idTicket='".$_SESSION['TicketID']."'";
            $result1 = mysqli_query($conn, $sql_query1);
            $row1 = mysqli_fetch_array($result1); 
            $_SESSION['price']=$row1['price'];
            $_SESSION['day']=$row1['day(s)'];
            $_SESSION['type']=$row1['type'];
            echo '<script> window.location.href="CampingSpots.php"; </script>';
            
        }
        else
        {
            echo '<style type="text/css">
                    #error1{
                    display:block;
                    }
                    </style>';
        }
        mysqli_close($conn);
    }
        
?>
 <?php
    
    if(isset($_POST['Code']))
    {
        $code=$_POST['code'];
        $_SESSION["code"] = $code;
        $sql_query="SELECT * FROM user WHERE code='".$code."' LIMIT 1";
        $sql_query1="SELECT * FROM user WHERE code='".$code."' And username IS NULL AND password IS NULL LIMIT 1";
        $result = mysqli_query($conn, $sql_query);
        $result1 = mysqli_query($conn, $sql_query1);
        $num =mysqli_num_rows($result);
        $row = mysqli_fetch_array($result); 
        if(mysqli_num_rows($result1))
        {
            echo '<style type="text/css">
                    #myModal{
                     display: none;
                    }
                    #regist{
                    display:block;
                    }
                    </style>';
        }
        else if(mysqli_num_rows($result))
        {
            echo '<style type="text/css">
                    #myModal {
                     display: block;
                    }
                    .modal-content h3{
                        margin-top: 0px;
                        padding-top: 25px;
                    }
                    #error2{
                    display:block;
                    }
                    </style>';
        }
        else
        {
            echo '<style type="text/css">
                    #myModal {
                     display: block;
                    }
                    .modal-content h3{
                        margin-top: 0px;
                        padding-top: 25px;
                    }
                    #error{
                    display:block;
                    }
                    </style>';
        }
        
        mysqli_close($conn);
    }
        
?> 
<?php
    
    if(isset($_POST['Register']))
    {
        $user= $_POST['userReg'];
        $pass = md5($_POST['passReg']);
        $passconf = md5($_POST['passconfirmReg']);
        
        $sql_query="SELECT * FROM user WHERE username='".$user."' LIMIT 1";
        
        $result = mysqli_query($conn, $sql_query);
        $num =mysqli_num_rows($result);
        $sql_query1="SELECT * FROM user WHERE code='".$_SESSION["code"]."' LIMIT 1";
        $result1 = mysqli_query($conn, $sql_query1);
        $row = mysqli_fetch_array($result1); 
        
        if(mysqli_num_rows($result))
        {
            echo '<style type="text/css">
                    #error3{
                    display:block;
                    }
                    #regist{
                    display:block;
                    }
                    </style>';
        }
        else
        {
            if($pass == $passconf)
            {
            $sql_query2 = "UPDATE user SET username='".$user."',password='".$pass."' WHERE code = '".$_SESSION["code"]."';";
            mysqli_query($conn,$sql_query2);
            if(mysqli_num_rows($result1))
        {
            $_SESSION['LoggedIn']=true;
            $_SESSION['Name']=$user;
            $_SESSION['TicketID']=$row['ticketID'];
            $_SESSION['Credits']=$row['credits'];
            $_SESSION['Buyer']=$row['buyerName'];
            $_SESSION['Buyer_Email']=$row['email'];
            $_SESSION['Buyer_CampSpot']=$row['campingSpot'];
            $_SESSION['age'] = date_diff(date_create($row['DoB']), date_create('today'))->y;
            $sql_query4="SELECT * FROM ticket WHERE idTicket='".$_SESSION['TicketID']."'";
            $result4 = mysqli_query($conn, $sql_query4);
            $row4 = mysqli_fetch_array($result4);
            $_SESSION['price']=$row4['price'];
            $_SESSION['day']=$row4['day(s)'];
            $_SESSION['type']=$row4['type'];
            echo '<script> window.location.href="CampingSpots.php"; </script>';
        }
         }
            else
            {
                echo '<style type="text/css">
                                    #error4{
                                    display:block;
                                    }
                                    #regist{
                                    display:block;
                                    }
                                    </style>';
            }
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
<div class = "login">
        <h1>Login</h1>   
        <div class="login-form">             
        <form method="post" action = "login.php">            
            <div id = "error1">You could not be logged on. Make sure that your username and password are correct, and then try again.</div>
       <h3>Username:</h3>
        <input class = "username" type="text" placeholder="Username" name="user" required>
        <h3>Password:</h3>
       <input class = "password" type="password" placeholder="Password" name="pass" required>
       <input class = "log" name ="LogIn" type="submit" value = "Log-In">
        </form>
        <p class="sign-up" id = "myBtn">Enter the code here!</p><br>
        <div id="myModal" class="modal">

  <!-- Modal content -->
          <div class="modal-content">
            <span class="close">&times;</span>
            <form method="post" action = "login.php">
            <div id = "error">You could not be logged on. Make sure that your code is correct, and then try again.</div>
            <div id = "error2">User with this code is already registered.</div>
            <h3>Enter your code here:</h3>
            <input class = "code" type="text" placeholder="Code" name="code" required>
            <input class = "Nat" name ="Code" type="submit" value = "Submit">
            </form>
          </div>
        </div>
        <div id = "regist" class = "register">
        <div class="register-content">
            <span class="close">&times;</span>
            <form method="post" action = "login.php">
            <h2>Register</h2>
            <div id = "error3">Please choose another nickname. This is one is already used.</div>
            <div id = "error4">Your passwords should match!</div>
            <h3>Enter a username:</h3>
            <input class = "username" type="text" placeholder="Username" name="userReg" required>
            <h3>Enter a password:</h3>
            <input class = "password" type="password" placeholder="Password" name="passReg" required>
            <h3>Repeat the password:</h3>
            <input class = "password" type="password" placeholder="Password" name="passconfirmReg" required>
            <input class = "Nat" id = "regButton" name ="Register" type="submit" value = "Submit">
            </form>
          </div>
      </div>
        <p class="sign-up">How to sign up?!<span class = "link">To sign up you need to buy a ticket first. You can do it <a href="Tickets.php" id = "link">here</a>!</span></p>
    <br>
    </div>
</div>
       
<script type="text/javascript">
    var modal = document.getElementById('myModal');
    var registermod = document.getElementById('regist');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var span1 = document.getElementsByClassName("close")[1];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    document.getElementById('error').style.display = "none";
    modal.style.display = "none";
}
span1.onclick = function() {
    registermod.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        document.getElementById('error').style.display = "none";
        modal.style.display = "none";
    }
    if (event.target == registermod) {
        registermod.style.display = "none";
    }
}
</script>
        
       
        
    </body>   
    

</html>