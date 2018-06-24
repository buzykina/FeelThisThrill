<?php
session_start();
?>
<!doctype html>
<html>
<head>
    <title>Feel This Thrill - Maps</title>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jane_js.js"></script>
<link rel="stylesheet" type="text/css" href="css/MainStyle.css">
	<link rel="stylesheet" type="text/css" href="css/Camp.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<link rel="stylesheet" href="css/GeneralHeader.css">
    </head>
	<body>
	
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
                <a href="Tickets.php"><div><p>Tickets</p></div></a>
                <a href="Camp.php" class = "Selected"><div><p>Maps</p></div></a>
            </div>

            <div class="gridButtonsRight">
                <a href="experience.php"><div><p>Experience</p></div></a>
                <a href="gifts.php"><div><p>Gifts</p></div></a>
                <a href="Event-Account.php"><div><p>My Account</p></div></a>
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
                            <a href="Camp.php" class = "Selected">Maps</a>
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
                <a href="Tickets.php"><div><p>Tickets</p></div></a>
                <a href="Camp.php" class = "Selected"><div><p>Maps</p></div></a>
            </div>

            <div class="gridButtonsRight">
                <a href="experience.php"><div><p>Experience</p></div></a>
                <a href="gifts.php"><div><p>Gifts</p></div></a>
                <a href="Log-In.php"><div><p>Log-In</p></div></a>
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
                            <a href="Camp.php" class = "Selected">Maps</a>
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
     
	


	<div class = "Map">
		<img src="http://2ukju42ryr9x2tkb6r2yfz8a.wpengine.netdna-cdn.com/wp-content/uploads/2013/04/Summer-Camp-2017-Map.jpg">
		<div class = "marker">
		<div class= "mkr" id = "camp1" ></div>
		<div class= "mkr" id = "camp2"></div>
			<div class= "mkr" id = "camp3"></div>
			<div class= "mkr" id = "camp4"></div>
			<div class= "mkr" id = "camp5"></div>
			<div class= "mkr" id = "camp6"></div>
			<div class= "mkr" id = "camp7"></div>
			<div class= "mkr" id = "camp8"></div>
			<div class= "mkr" id = "camp9"></div>
			<div class= "mkr" id = "camp10"></div>
			<div class= "mkr" id = "camp11"></div>
			<div class= "mkr" id = "camp12"></div>
		</div>
		<div class = "marker">
		<div class= "mk1" id = "loan1"></div>
		<div class= "mk1" id = "loan2"></div>
			<div class= "mk1" id = "loan3"></div>
			<div class= "mk1" id = "loan4"></div>
			<div class= "mk1" id = "loan5"></div>
			<div class= "mk1" id = "loan6"></div>
			<div class= "mk1" id = "loan7"></div>
		</div>
		<div class = "marker">
		<form action="" method="post">
			<a href="#bottomscreen"><input type="submit" class= "mk" id = "gnomes" name = "submit"/></a>
		<input type="submit" class= "mk" id = "gnomes2" name="submit"/>
			<input type="submit" class= "mk" id = "gnomes3" name="submit"/>
			<input type = "submit"  class= "mk" id = "gnomes4" name="submit"/>
			<input type ="submit" class= "mk" id = "gnomes5" name="submit"/>
			<input type="submit" class= "mk" id = "gnomes6" name="submit"/>
			<input type="submit" class= "mk" id = "gnomes7" name="submit"/>
			</form>
		</div>
		<div class = "marker">
		<div class= "mk2" id = "atm1"></div>
		<div class= "mk2" id = "atm2"></div>
			<div class= "mk2" id = "atm3"></div>
			<div class= "mk2" id = "atm4"></div>
			<div class= "mk2" id = "atm5"></div>
			<div class= "mk2" id = "atm6"></div>
			<div class= "mk2" id = "atm7"></div>
		</div>
   </div>
				<div class="NavHandle">
		<button onclick="ShowFood(1)">Camp Spots</button>
			<button onclick="ShowFood(2)">Loan Stands</button>
		<button onclick="ShowFood(3)">Food Stalls</button>
			<button onclick="ShowFood(4)">ATM</button>
		</div>
	  <div id = "bottomscreen">
      <?php if (isset($_POST['submit'])){
	  include_once 'Stand.php';
}?>
		</div>
	<script>
		var SlideIndex = 0;
		function ShowFood(n){
			SlideIndex= n;
var x=document.getElementsByClassName("marker");
			var i;
			for(i=0;i<x.length;i++){
				x[i].style.display="none";
			}
			x[SlideIndex-1].style.display="block";
		}
		
		</script>
	<?php
    include 'included/footer.html';
     ?>
    </body>  
</html>