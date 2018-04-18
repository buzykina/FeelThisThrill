<!doctype html>
<html>
<head>
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
    include 'included/header.html';
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