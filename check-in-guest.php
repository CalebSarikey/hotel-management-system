<!doctype html>

<html lang="en">
  <head>
    <title>Index</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
    <script src="jquery-3.3.1.min.js"></script>
    <script src="change-background.js"></script>
  </head>
  <body>
    <div class="title-container">
      <h1>TCWS Hotels</h1>
    </div>
    <div class="background-container">
<?php
require 'DB.php';

$db = new DB();

$roomID = $_POST['room_id'];
$guestFirst = $_POST['first_name'];
$guestLast = $_POST['last_name'];
$guestID;
$date = date("y-m-d");

//find guestID
$guest = $db->conn->prepare("SELECT guest_id FROM GUEST WHERE first_name =? AND last_name = ?");
  if(!$guest) die("Prepare failed : " . $db->conn->error);

$bind = $guest->bind_param("ss", $guestFirst, $guestLast);
if(!$bind) die("Bind failed: " . $guest->error);

$execute = $guest->execute();
  if(!$execute) die("Execute failed: " . $guest->error);

$bResult = $guest->bind_result($guestID);
$guest->fetch();

if(!$guestID)
{
  //redirect
  echo "here!";
  header('Location: check-in.php?cannot-find-guest');
}
else
{
  $guest->free_result();

  $res = $db->conn->prepare("UPDATE RESERVE SET check_in=1 WHERE guest_id=$guestID AND room_id=?");
    if(!$res) die("Prepare failed: " . $db->conn->error);
  $resBind = $res->bind_param("i",$roomID);
    if(!$resBind) die("Bind failed: " . $res->error);
  $resExecute = $res->execute();
    if(!$resExecute) die("Execute failed: " . $res->error);

//$res = $db->query("UPDATE RESERVE SET check_in=1 WHERE guest_id=$guestID AND room_id=$roomID");


    if(!$res)
    {
      header('Location: check-in.php?cannot-check-in');
    }
    else
    {
      header('Location: index.php');
    }
}

 ?>
</div>
<div class="table-container">
<div class="table">
<ul class="nav-bar">
  <li><a href="make-reservation.php">Make Reservation</a></li>
  <li><a href="check-in.php">Check In</a></li>
  <li><a href="check-out.php">Check Out</a></li>
  <li><a href="request-service.php">Request Room Service</a></li>
  <li><a href="show-data.php">Show Guest Data</a></li>
</ul>
</div>
</div>
<div class="information-container">
  <h2>Comfort and Closeness at a Price You'll Love.</h2>
  <p>Discover a refresing hotel retreat in the heart of downtown Dunkirk, NY. With
    stylish accommodations and invigorating amenities, TWCS Hotel will make you free right
    at home during your stay.</p>
    <p>Well-appointed rooms and suites boast modern decor and perks including our iconic
    beds. Maintain your well-being at the fitness center, or explore Dunkirk on foot with
    our running program. If you're hosting an event in town, we offer flexible venues and
    comprehensive planning and catering services. Our hotel also provides eacy access to some
    of the city's top attractions. Whether you're traveling for business or pleasure, TWCS
    Hotel invites you to experience a revitalizing escape</p>
</div>
</body>
</html>
