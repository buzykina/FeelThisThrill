<!doctype html>
<html>
<head>
    <title>Feel This Thrill - Gifts</title>
    <?php
    include 'included/common_head.html';
    ?>
    <link rel="stylesheet" type="text/css" href="css/gifts.css">
    <script src="js/gifts.js"></script>
</head> 
 <body>
  <?php
    include 'included/header.html';
  ?> 
  <h2>Gifts</h2>
  <div id = "combined">
  <div class="filters">
  <h4>Filter by</h4>
  <div>
      <h4>Type</h4>
      <input type="radio" class="radio" name="type" value="tshirt"><label>T-Shirt</label>
      <br>
      <input type="radio" class="radio" name="type" value="cup">
      <label>Cup</label>
      <br>
      <input type="radio" class="radio" name="type" value="bag">
      <label>Bag</label>
      <br>
      <input type="radio" class="radio" name="type" value="cap">
      <label>Cap</label>
  </div>
  <div>
      <h4>Price Range</h4>
      <input name ="price" type="range" min="229" max="2899" value="229">
      <h4>Color</h4>
      <input type="radio" name="Color" value="silver">
      <label>Black</label>
      <br>
      <input type="radio" name="Color" value="black" >
      <label>White</label>
      <br>
      <input type="radio" name="Color" value="white">
      <label>Colorful</label>
  </div>
    <br>
</div>
<div id = "content" class="content">
    <div id = "i1">
      <img src="img/bag1.png" id="lineup">
    </div>
    <div>
      
    </div>
    <div id = "i3">
        <img src="img/cup1.png" id = "ticket">
    </div>
    <div>
      
    </div>
    <div>
      
    </div>
    <div id = "i2">
      <img src="img/cap1.png" id="experience">
    </div>
    <div>
      
    </div>
    <div id = "i4">
        <img src="img/t1.png" id = "ticket">
    </div>
  </div>
</div>
  <?php
    include 'included/footer.html';
  ?>
 </body>   

</html>