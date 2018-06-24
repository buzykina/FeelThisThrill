<?php
session_start();
?>
<!doctype html>
<html>
<head>
    <title>Feel This Thrill - Pictures</title>
    <?php
    include 'included/common_head.html';
    ?>
    <link rel="stylesheet" type="text/css" href="css/picturepage.css">
    <script type="text/javascript" src="js/ContentTabs.js"></script>
    <link href="css/lightbox.css" rel="stylesheet">
    <script type="text/javascript" src="js/lightbox.js"></script>
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
                <a href="experience.php" class = "Selected"><div><p>Experience</p></div></a>
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
                            <a href="experience.php" class = "Selected">Experience</a>
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
                <a href="experience.php" class = "Selected"><div><p>Experience</p></div></a>
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
                            <a href="experience.php" class = "Selected">Experience</a>
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
     
	
    
    

   <div class="videocover">
        <span class="videocover-text">
            Pictures
        </span>
    </div>

    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="IMGmodalzoom">
    </div>

    <div class="picturewarper">


        <div class="yearselector">
            <button onclick="Selector('2016')" autofocus>
                <span>2016</span>
            </button>
            <button onclick="Selector('2017')">
                <span>2017</span>
            </button>
        </div>

        <div id="2016" class="contenttab fade">

            <div id="1" class="imagetab fade">
                <div class="gallery">
                    <div class="festivalimage">
                        <a href="Festival/1.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/1.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/2.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/2.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/3.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/3.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/4.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/4.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/5.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/5.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/6.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/6.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/7.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/7.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/8.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/8.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/9.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/9.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/10.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/10.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/11.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/11.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/12.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/12.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/13.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/13.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/14.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/14.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/15.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/15.jpg" width="100%">
                        </a>
                    </div>
                </div>
            </div>

            <div id="2" class="imagetab fade" style="display:none">
                <div class="gallery">
                    <div class="festivalimage">
                        <a href="Festival/16.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/16.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/17.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/17.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/18.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/18.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/19.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/19.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/20.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/20.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/21.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/21.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/22.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/22.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/23.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/23.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/24.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/24.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/25.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/25.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/26.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/26.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/27.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/27.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/28.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/28.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/29.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/29.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/30.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/30.jpg" width="100%">
                        </a>
                    </div>
                </div>
            </div>


            <div class="buttonselector">
                <button onclick="SelectImageTab('1')" autofocus>
                    <span>1</span>
                </button>
                <button onclick="SelectImageTab('2')">
                    <span>2</span>
                </button>
            </div>
        </div>






        <div id="2017" class="contenttab fade" style="display:none">
            <div id="3" class="imagetab2 fade">
                <div class="gallery">
                    <div class="festivalimage">
                        <a href="Festival/31.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/31.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/32.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/32.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/33.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/33.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/34.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/34.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/35.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/35.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/36.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/36.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/37.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/37.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/38.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/38.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/39.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/39.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/40.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/40.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/41.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/41.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/42.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/42.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/43.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/43.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/44.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/44.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/45.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/45.jpg" width="100%">
                        </a>
                    </div>
                </div>
            </div>

            <div id="4" class="imagetab2 fade" style="display:none">
                <div class="gallery">
                    <div class="festivalimage">
                        <a href="Festival/46.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/46.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/47.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/48.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/48.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/48.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/49.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/49.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/50.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/50.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/51.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/51.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/52.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/52.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/53.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/53.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/54.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/54.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/55.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/55.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/56.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/56.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/57.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/57.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/58.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/58.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/59.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/59.jpg" width="100%">
                        </a>
                    </div>

                    <div class="festivalimage">
                        <a href="Festival/60.jpg" data-lightbox="image" width="100%">
                            <img src="Festival/60.jpg" width="100%">
                        </a>
                    </div>
                </div>
            </div>

            <div class="buttonselector">
                <button onclick="SelectImageTab2('3')">
                    <span>1</span>
                </button>
                <button onclick="SelectImageTab2('4')">
                    <span>2</span>
                </button>
            </div>

        </div>
    </div>




<?php
include 'included/footer.html';
?>
</body>


</html>