<!doctype html>
<html>
<head>
    <title>Feel This Thrill - Line-Up</title>
    <?php
    include 'included/common_head.html';
    ?>
    <link rel="stylesheet" type="text/css" href="css/line_up.css">
    <script src="js/line_up.js"></script>
    </head> 
 <body>

    <?php
    include 'included/header.html';
     ?>
     <ul id = "submenu">
        <li><h3><a href="line_up.php">Artists</a></h3></li>  
        <li><hr></li>
        <li><h3><a href="schedule_1.php">Schedule</a></h3></li>
     </ul>
     <h2>Artists</h2>
     <div class="row"> 
  <div class="column">
    <img id = "1" src="img/seelna.jpeg" alt = "Selena Gomez" onclick="caption('1')">
    <img id = "2" src="img/ed_sheeran.jpg" alt = "Ed Sheraan" onclick="caption('2')">
    <img id = "3" src="img/cardi_b.jpg" alt = "Cardi B" onclick="caption('3')">
    <img id = "4" src="img/usher.jpg" alt = "Usher" onclick="caption('4')">
    <img id = "14" src="img/imagine_dragons.jpg" alt = "Imagine dragons" onclick="caption('14')">
  </div>
   <div class="column">
    <img id = "6" src="img/D'Angelo.jpg" alt = "D'Angelo" onclick="caption('6')">
    <img id = "7" src="img/Taylor-Swift.jpg" alt = "Taylor Swift" onclick="caption('7')">
    <img id = "8" src="img/isaachayes.jpg" alt = "Isaac Hayes" onclick="caption('8')">
    <img id = "9" src="img/logic.jpg" alt = "Logic" onclick="caption('9')">
    <img id = "i10" src="img/demi_lovato.jpg" alt = "Demi Lovato" onclick="caption('i10')">
  </div>
   <div class="column">
    <img id = "11" src="img/the-weeknd.jpg" alt = "The Weekend" onclick="caption('11')">
    <img id = "12" src="img/bieber.jpg" alt = "Justin Bieber" onclick="caption('12')">
    <img id = "13" src="img/adele.jpg" alt = "Adele" onclick="caption('13')">
    <img id = "5" src="img/tyrone.jpeg" alt = "Ty Dolla Sign" onclick="caption('5')">
    <img id = "i15" src="img/rihanna.jpg" alt = "Rihanna" onclick="caption('i15')">
  </div>
  <div class="column">
    <img id = "16" src="img/alicia_keys.jpg" alt = "Alicia Keys" onclick="caption('16')">
    <img id = "17" src="img/Balthazar.jpg" alt = "The Balthazar" onclick="caption('17')">
    <img id = "18" src="img/The-Neighbourhood.jpg" alt = "The Neighbourhood" onclick="caption('18')">
    <img id = "19" src="img/beyonce.jpg" alt = "Beyonce" onclick="caption('19')">
    <img id = "i20" src="img/artic_monkeys.jpg" alt = "Artic Monkeys" onclick="caption('i20')">
  </div>  
</div>
<div id="myModal" class="modal">
<span class="close" onclick="span()">&times;</span>
<img class="modal-content" id="img01">
<div id="caption"></div>
</div>
    <?php
    include 'included/footer.html';
     ?>
    </body>   

</html>