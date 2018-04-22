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
    include 'included/header.html';
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
<a href="http://localhost/Website1/schedule/day3.pdf"><button class = "schedule">View schedule in pdf</button></a>
</div>
    <?php
    include 'included/footer.html';
     ?>
    </body>   

</html>