<!doctype html>
<html>
<head>
    <title>Feel This Thrill - Tickets</title>
<link rel="stylesheet" type="text/css" href="css/jane_css.css">
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jane_js.js"></script>
<link rel="stylesheet" type="text/css" href="css/MainStyle.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<link rel="stylesheet" href="css/GeneralHeader.css">
<link rel="stylesheet" type="text/css" href="css/TicketsStyle.css">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
    </head>
  
    
    
 <body>
    <?php
    include 'included/header.html';
     ?>
     
     <ul id = "submenu">
        <li><h3><a href="BuyTickets.php">Buy Tickets</a></h3></li>  
        <li><hr></li>
        <li><h3><a href="CampingSpots.php">Rent Camping Spots</a></h3></li>
     </ul>
    
    
    <div class="TicketsPic">
       <div class="DivPic">
        <img class = "divPic" src="img/Music_Green_lasers_at_a_music_festival_102787_.jpg">
        </div>
     </div>
    
     <div class="container">
     
     <div class="divLeft">
         <h2><p id="para">Buy Tickets</p></h2>
         
         </div>
         <div class="divBoxLeft">
         <a href="BuyTickets.php" class="button w-button">General Tickets</a>
         <div id="Pic1">
             <img src="img/newBuyT.png">
             </div>
             <a href="BuyTickets.php" class="button w-button" style="margin-top:0; margin-left:220px;">VIP Tickets</a>
             
         </div>
         
         <div class="divRight">
         <h2><p id="para">Rent Camping Spots</p></h2>
             <div class="divBoxRight">
               <div id="map"></div>  
             </div>
         </div>
         
     </div>
    
    
    
    
    
    <?php
    include 'included/footer.html';
     ?>
     	
       <script>
        function initMap() {
            var uluru = {
                lat: 51.4417,
                lng: 5.4674
            };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 17,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }

    </script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWgjggY12mw42EuRPpqlm9Xmi_X2kmTgs&callback=initMap">
   
    </script>
    </body>   
    

</html>