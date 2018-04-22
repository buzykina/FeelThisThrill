<!doctype html>
<html>
<head>
    <title>Feel This Thrill - Day 2</title>
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
     <ul id = "submenu">
        <li><h3><a href="schedule_1.php">Day 1</a></h3></li>  
        <li><hr></li>
        <li><h3><a href="schedule_2.php">Day 2</a></h3></li>
        <li><hr></li>
        <li><h3><a href="schedule_3.php">Day 3</a></h3></li>
     </ul>
     <h2>Day 2</h2>
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
    <td data-label="Activity">The Balthazar</td>
  </tr>
  <tr>
    <td data-label="Time">06:00 PM</td>
    <td data-label="Activity">Cardi B</td>
  </tr>
  <tr>
    <td data-label="Time">07:00 PM</td>
    <td data-label="Activity">Isaac Hayes</td>
  </tr>
  <tr>
    <td data-label="Time">08:00 PM</td>
    <td data-label="Activity">Adele</td>
  </tr>
  <tr>
    <td data-label="Time">09:00 PM</td>
    <td data-label="Activity">Logic</td>
  </tr>
  <tr>
    <td data-label="Time">10:00 PM</td>
    <td data-label="Activity">Usher</td>
  </tr>
  <tr>
    <td data-label="Time">11:30 PM</td>
    <td data-label="Activity">The Neighbourhood</td>
  </tr>
  <tr>
    <td data-label="Time">01:00 AM</td>
    <td data-label="Activity">Closing Day 2</td>
  </tr>
  </tbody>
</table>
<a href="http://localhost/Website/schedule/day2.pdf"><button class = "schedule">View schedule in pdf</button></a>
</div>
    <?php
    include 'included/footer.html';
     ?>
    </body>   

</html>