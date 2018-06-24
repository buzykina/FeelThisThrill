<?php
session_start();
?>
<!doctype html>
<html>
<head>
    <title>Feel This Thrill - Day 3</title>
    <?php
    include 'included/common_head.html';
    ?>
    <link rel="stylesheet" type="text/css" href="css/schedule_1.css">
    <script src="js/schedule_1.js"></script>
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
                <a href="line_up.php" class = "Selected"><div><p>Line-up</p></div></a>
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
                            <a href="line_up.php" class = "Selected">Line-up</a>
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
                <a href="line_up.php" class = "Selected"><div><p>Line-up</p></div></a>
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
                            <a href="line_up.php" class = "Selected">Line-up</a>
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
    
     
     <div class = "body">
     <div id = "concat">
     <ul id = "submenu">
        <li><h3><a href="line_up.php">Artists</a></h3></li>  
        <li><hr></li>
        <li><h3><a href="schedule_1.php" class = "Selected">Schedule</a></h3></li>
     </ul>
     <ul id = "submenu1">
        <li><h3><a href="schedule_1.php">Day 1</a></h3></li>  
        <li><hr></li>
        <li><h3><a href="schedule_2.php">Day 2</a></h3></li>
        <li><hr></li>
        <li><h3><a href="schedule_3.php" class = "Selected">Day 3</a></h3></li>
     </ul>
   </div>
     <h2>Day 3</h2>
     <table>
  <thead>
    <tr class = "th">
      <th scope="col">Time</th>
      <th scope="col">Activity</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <td data-label="Time">04:00 PM</td>
    <td data-label="Activity">Openning</td>
  </tr>
  <tr>
    <td data-label="Time">05:00 PM</td>
    <td data-label="Activity">Demi Lovato</td>
  </tr>
  <tr>
    <td data-label="Time">06:00 PM</td>
    <td data-label="Activity">Imagine Dragons</td>
  </tr>
  <tr>
    <td data-label="Time">07:00 PM</td>
    <td data-label="Activity">Rihanna</td>
  </tr>
  <tr>
    <td data-label="Time">08:00 PM</td>
    <td data-label="Activity">Beyonce</td>
  </tr>
  <tr>
    <td data-label="Time">09:00 PM</td>
    <td data-label="Activity">Ty Dolla Sign</td>
  </tr>
  <tr>
    <td data-label="Time">10:00 PM</td>
    <td data-label="Activity">Arctic Monkeys</td>
  </tr>
  <tr>
    <td data-label="Time">12:30 AM</td>
    <td data-label="Activity">Closing Day 2</td>
  </tr>
  </tbody>
</table>
<a href="http://i380316.hera.fhict.nl/schedule/day3.pdf"><button class = "schedule">View schedule in pdf</button></a>
</div>
    <?php
    include 'included/footer.html';
     ?>
    </body>   

</html>