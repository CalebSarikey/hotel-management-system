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
<?php  ?>

<form id="reservation-form" action="create-reservation.php" method="post">
  <input id="first_name_input"  required name="first_name" type="text" placeholder="Guest Firstname"/>
  <input id="last_name_input" required name="last_name" type="text" placeholder="Guest Lastname"/>
  <br />
  Room Number:
  <input id="room_number_input" required name="room_id" type="number" min="1"/>
  <br />
  Start Date:
  <input id="start_date_input" required name="res_start" type="date" />
  <br />
  End Date:
  <input id="end_date_input" required name="res_end" type="date" />
  <br />
  <input type="submit" value="Submit"/>
</form>
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
