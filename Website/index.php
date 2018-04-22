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
    include 'included/header.html';
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
        <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
        <a href="line_up.php"><button class = "schedule">More artists</button></a>
    </div>
    </div>
    <div id = "experiencetext" class="hidden1">
        <div id = "d2">
        <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
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
        <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
        <a href="Tickets.php"><button class = "schedule">Buy ticket</button></a>
    </div>
    </div>
    <div id = "giftstext" class="hidden1">
        <div id = "d4">
        <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
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
    </body>   

</html>