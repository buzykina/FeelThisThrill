<?php
session_start();
?>
<!doctype html>
<html>
<head>
    <title>Feel This Thrill - Home</title>
    <?php
    include 'included/common_head.html';
    ?>
    <link rel="stylesheet" type="text/css" href="css/index_css.css">
    <script src="js/index_js.js"></script>
    <link rel="stylesheet" href="css/flipclock.css">
    <link rel="stylesheet" href="css/animate.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/flipclock.js"></script>
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
                <a href="Camp.php"><div><p>Maps</p></div></a>
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
                <a href="Tickets.php"><div><p>Tickets</p></div></a>
                <a href="Camp.php"><div><p>Maps</p></div></a>
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
     
     
   <div id="slideshow">
    <figure>
     <img src="slideshow/slide1.png">
     <img src="slideshow/slide2.png">
     <img src="slideshow/slide3.png">
     <img src="slideshow/slide4.png">
     <img src="slideshow/slide1.png">
    </figure>
    <div id="clock"></div>
    <a class="scroll-link" href="#content">
		<svg class="mouse" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 76 130" preserveAspectRatio="xMidYmid meet">
		<g fill="none" fill-rule="evenodd">
			<rect width="70" height="118" x="1.5" y="1.5" stroke="#FFF" stroke-width="3" rx="36"/>
			<circle class="scroll" cx="36.5" cy="31.5" r="4.5" fill="#FFF"/>
		</g>
	</svg>
	</a>
</div>
<div id = "content" class="content">
    <div class="hidden">
    	<img src="img/line_up.jpg" id="lineup">
    </div>
    <div id="lineuptext" class="hidden1">
        <div id = "d1">
        <div>Justin Bieber, The Neighbourhood, Artic Monkeys, Adele and many more in our festival. Check our schedule for more info!</div>
        <a href="line_up.php"><button class = "schedule">More artists</button></a>
    </div>
    </div>
    <div id = "experiencetext" class="hidden1">
        <div id = "d2">
        <div>From delicious food to world class art, Feel This Thrill offers numerous experiences to enjoy along with the music.</div>
        <a href="experience.php"><button class = "schedule">More photos</button></a>
    </div>
    </div>
    <div class="hidden">
    	<img src="img/experience.jpg" id="experience">
    </div>
    <div class="hidden">
        <img src="img/feelthisthrill.jpg" id = "ticket">
    </div>
    <div id = "tickettext" class="hidden1">
        <div id = "d3">
        <div>If you don't want to regret the rest of your life about not coming book your tickets and accommodation for via the link below.</div>
        <a href="Tickets.php"><button class = "schedule">Buy ticket</button></a>
    </div>
    </div>
    <div id = "giftstext" class="hidden1">
        <div id = "d4">
        <div>Can't come, but really want a gift? No problem, we made a lot of different T-Shirts, bags, etc for you and your friends!</div>
        <a href="gifts.php"><button class = "schedule">Buy gifts</button></a>
    </div>
    </div>
    <div class="hidden" class="hidden">
    	<img src="img/gifts.jpg" id="gifts">
    </div>
</div>
    <?php
    include 'included/footer.html';
     ?>
     <button onclick="topFunction()" id="myBtn1" title="Go to top">Top</button>
    </body>   

</html>