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
	<?php
    include 'included/header.html';
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

       <button class = "Nat" name ='submit'  type="submit">Log-in</button>
			 </div>
		</form>
		</div>
		</div>
		<div class = "Signorlog">
		<div class = "code">
		<form class="LogBox1 animate">
			<button class = "contains"><label><b>Log-in with Username</b></label></button>
		 <div class="container">
      <label><b>Enter Username:</b></label>
      <input class = "Unary" type="text" placeholder="Enter Username" name="uid" required>
			 <label><b>Enter Password:</b></label>
   <input class = "Unary" type="text" placeholder="Enter Password" name="uid" required>
       <button class = "Nat" name ='submit'  type="submit">Log-in</button>
			 </div>
		</form>
		</div>
		<div class = "code">
		<form class="LogBox1 animate">
		<button class = "contains"><label><b>Sign Up</b></label></button>
		 <div class="container">
			 <center><label><b>Need to buy a ticket to get Account</b></label></center>
       <button class = "Nat" name ='submit' type="submit">Tickets</button>
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