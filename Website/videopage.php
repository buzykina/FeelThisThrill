<!doctype html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/Videopage.css">
    <script type="text/javascript" src="js/ContentTabs.js"></script>
    <?php
        include 'included/common_head.html';
    ?>
</head>
    
    
 <body>
    <?php
        include 'included/header.html';
     ?>

   <div class="videocover">
       <span class="videocover-text">
            VIDEOS
       </span>
   </div>
   <div class="videowarper">
            <div class="yearselector">
                <button onclick="Selector('2016')" autofocus><span>2016</span></button>
                <button onclick="Selector('2017')"><span>2017</span></button>
            </div>
        
            <div id="2016" class="contenttab">
                <iframe class="fade" allowfullscreen src="https://www.youtube.com/embed/WKtLEnRh6HY">
                </iframe>
            </div>
                
            <div id="2017" class="contenttab" style="display:none">
                <iframe class="fade" allowfullscreen src="https://www.youtube.com/embed/8VvYZLAyKWM">
                </iframe>
            </div>
        
    </div>




    <?php
        include 'included/footer.html';
     ?>
 </body>
    

</html>