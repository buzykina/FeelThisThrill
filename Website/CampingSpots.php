<?php
session_start();
include 'php.php';
?>
<!doctype html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Feel This Thrill - Rent Camping Spots</title>
    <meta content="CampingSpots" property="og:title">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">
    <link href="./CampingSpots_files/livia-poppers-first-project.webflow.f5d832726.css" rel="stylesheet" type="text/css">
    <script src="./CampingSpots_files/webfont.js.download" type="text/javascript"></script>
    <link rel="stylesheet" href="./CampingSpots_files/css">
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["Droid Serif:400,400italic,700,700italic", "Inconsolata:400,700"]
            }
        });

    </script>
    <script type="text/javascript">
        ! function(o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
        }(window, document);

    </script>
<script src="js/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/MainStyle.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<link rel="stylesheet" href="css/GeneralHeader.css">
<link rel="stylesheet" type="text/css" href="css/TicketsStyle.css">
<link rel="stylesheet" type="text/css" href="css/CampingSpots.css">
    
</head>

<body class="body-2">
    
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
                <a href="Tickets.php" class = "Selected"><div><p>Tickets</p></div></a>
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
                            <a href="Tickets.php" class = "Selected">Ticket</a>
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
                <a href="Tickets.php" class = "Selected"><div><p>Tickets</p></div></a>
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
                            <a href="Tickets.php" class = "Selected">Ticket</a>
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
   
   <?php
   if($_SERVER['REQUEST_METHOD'] == 'POST')
   {

        if(isset($_POST['idCamp']))
        {
         $_SESSION['idCamp'] = $_POST['idCamp'];
        }
        if(isset($_POST['price']))
        {
            $_SESSION['price'] = $_POST['price'];
        }
        if(isset($_POST['location']))
        {
            $_SESSION['location'] = $_POST['location'];
        }
        if($_SESSION['Credits'] >= $_SESSION["price"])
                                {
                                    echo '<style type="text/css">
                                    #myModal1{
                                    display:block;
                                    }
                                    </style>';
                                }
                                else
                                {
                                    echo '<script> window.location.href="PaymentPage.php"; </script>';
                                }
    }
   ?>
     <?php 
     if($_SESSION['LoggedIn']==true)
     {
     ?>
     <ul id = "submenu">
        <li><h3><a href="BuyTickets.php">Buy Tickets</a></h3></li>  
        <li><hr></li>
        <li><h3><a href="CampingSpots.php" class = "Selected">Rent Camping Spots</a></h3></li>
     </ul>
     
    
    <img src="./CampingSpots_files/5ad69783f2b8b58d187c2e06_Summer-Camp-2017-Map.jpg" srcset="http://uploads.webflow.com/5a9fe66c690c3d0001d4aa0c/5ad69783f2b8b58d187c2e06_Summer-Camp-2017-Map-p-500.jpeg 500w, http://uploads.webflow.com/5a9fe66c690c3d0001d4aa0c/5ad69783f2b8b58d187c2e06_Summer-Camp-2017-Map-p-800.jpeg 800w, http://uploads.webflow.com/5a9fe66c690c3d0001d4aa0c/5ad69783f2b8b58d187c2e06_Summer-Camp-2017-Map-p-1080.jpeg 1080w, http://uploads.webflow.com/5a9fe66c690c3d0001d4aa0c/5ad69783f2b8b58d187c2e06_Summer-Camp-2017-Map.jpg 1519w" sizes="(max-width: 1519px) 100vw, 1519px">
    
<?php
    $sql = 'SELECT * FROM campspot ORDER BY idCamp ASC';
    $result = mysqli_query($conn,$sql);
    if($result):
      if(mysqli_num_rows($result)>0):
        while($product = $result->fetch_assoc()):
        if($product['nrPeople']<6):
        ?>
        <img src="img/facebook-placeholder-for-locate-places-on-maps.png" class="img" id = "img<?php echo $product['idCamp']; ?>">
         <div id="i<?php echo $product['idCamp']; ?>" class="modal">

            <!-- Modal content -->
       <div class="modal-content">
                <span class="close" id = "cl<?php echo $product['idCamp']; ?>">&times;</span><br>
                    <div class="temporary-container">
                    <form method = "post" id = "myForm<?php echo $product['idCamp']; ?>" action="CampingSpots.php">
                       <h4><p>Price: <?php echo $product['price']; ?> euros/night</p></h4>
                       <input type="hidden" name="price" value = "<?php echo $product['price']; ?>">
                       <input type="hidden" name="idCamp" value = "<?php echo $product['idCamp']; ?>">
                        <p>Location: <?php echo $product['location']; ?></p>
                        <input type="hidden" name="location" value = "<?php echo $product['location']; ?>">
                        <p>Nr of people: <?php echo $product['nrPeople']; ?>/6</p>
                        <p>Type: <?php echo $product['status']; ?></p>
                        <input type="submit" name="campspot" class = "button5" value="Rent the camping spot">
                    </form>
                    </div>
            </div>
        </div>
        <?php
          endif;
          endwhile;
          endif;
          endif;
        ?>
    <div id="myModal1" class="modal">

  <!-- Modal content -->
          <div class="modal-content left">
            <span id="close" class = "close">&times;</span>
            <form method="post" action = "rentCamp.php">
             <h3>How would you like to pay?</h3>
            <input type="radio" name="choice" value="account" checked> By Account<br>
            <input type="radio" name="choice" value="card"> By card<br>
            <input type="submit" name="campspot" class = "button5" value="Checkout">
            </form>
          </div>
        </div>
    
      <?php
    include 'included/footer.html';
     ?>
     <script type="text/javascript">
        var modal = document.getElementById('myModal1');
// Get the <span> element that closes the modal
var span = document.getElementById('close');
span.onclick = function() {
    modal.style.display = "none";
}
    </script>
    <script src="./CampingSpots_files/jquery-3.3.1.min.js.download" type="text/javascript" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="./CampingSpots_files/webflow.54797e483.js.download" type="text/javascript"></script>
<?php
    $sql = 'SELECT * FROM campspot ORDER BY idCamp ASC';
    $result = mysqli_query($conn,$sql);
    if($result):
      if(mysqli_num_rows($result)>0):
        while($product = $result->fetch_assoc()):
        if($product['nrPeople']<6):
        ?>
<script>
        var modal<?php echo $product['idCamp']; ?> = document.getElementById('i<?php echo $product['idCamp']; ?>');

        // Get the button that opens the modal
        var btn<?php echo $product['idCamp']; ?> = document.getElementById("img<?php echo $product['idCamp']; ?>");

        // Get the <span> element that closes the modal
        var span<?php echo $product['idCamp']; ?> = document.getElementById("cl<?php echo $product['idCamp']; ?>");

        // When the user clicks on the button, open the modal 
        btn<?php echo $product['idCamp'];?>.onclick = function() {
            <?php
            echo "if(". $_SESSION['Buyer_CampSpot1']. " == null)
            {";
            ?>
            modal<?php echo $product['idCamp']; ?>.style.display = "block";
            <?php echo "}";
            ?>
        }
        
        // When the user clicks on <span> (x), close the modal
        span<?php echo $product['idCamp']; ?>.onclick = function() {
            modal<?php echo $product['idCamp']; ?>.style.display = "none";
        }
    
    </script>
        <?php
          endif;
          endwhile;
          endif;
          endif;

        ?>
    <?php
        }
        else
        {
         echo '<script> window.location.href="login.php"; </script>';
        } 
    ?>
    </body>

</html>
