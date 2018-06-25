<?php
session_start();
include 'php.php';
if(!isset($_POST['choice']) || $_SESSION['LoggedIn']!=true)
{
	header("location: CampingSpots.php");
	return;
}
if($_POST['choice'] == 'card')
{
	header("location: PaymentPage.php");
	return;
}
 $sql_query2="UPDATE campspot
			  SET nrPeople = nrPeople + 1
			  WHERE idCamp = '".$_SESSION['idCamp'] ."'";
 $result2 = mysqli_query($conn, $sql_query2);
 $sql_query3="UPDATE user
			  SET idCamp = '".$_SESSION['idCamp'] ."', credits = credits - " .$_SESSION['price']. "
			  WHERE ticketID = '".$_SESSION['TicketID'] ."'";
 $result3 = mysqli_query($conn, $sql_query3);
$_SESSION['Buyer_CampSpot'] = $_SESSION['location'];
$sql_query1="SELECT * FROM user WHERE TicketID='".$_SESSION['TicketID']."'";
            $result1 = mysqli_query($conn, $sql_query1);
            $row1 = mysqli_fetch_array($result1);
$_SESSION['Credits'] = $row1['credits'];
header("location: CampingSpots.php");
	return;
?>