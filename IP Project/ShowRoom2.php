<!DOCTYPE html>
<html lang="en">
<?php
mysql_connect("localhost","root","");
mysql_select_db("hoteliano") or die("fail to connect ".mysql_error()); /* connect to the database or die if the database is not available*/
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="Images/Favicon.png">
    <title>Hoteliano</title>

    <link rel="stylesheet" href="Includes/Style.css">
    <script src="Includes/jquery-3.1.1.min.js"></script>
    <script src="Includes/script.js"></script>
    <div id="Logo">
        <a href="home.html">
            <img src="Images/Logo.png" id="LogoCenter">
        </a>
    </div>
</head>
<body>

<img src="Images/arrow2.png"  id="myBtn">

<nav id="navbar-Admin"></nav>

<!-- ------------------------------------Admin front Image-------------------------------------*-->

<div class="slideshow-container">

    <img src="Images/Add.jpg" style="width:100%">
</div>
<div id="addroom-section">

    <div class="text">Info</div>

    <form class="Addroom-form"action="Rooms.php" method="post" name="Edit">

                     <div>
                <label class="room-text">Room Number:</label>

                <?php
            $roomnum = $_POST['in1'];
            $result = mysql_query("select * from rooms where Roomnum ='$roomnum'");
            $row = mysql_fetch_array($result);
            echo  $row['Roomnum'];
            ?>
                     </div>
          <div>
                <label class="room-text">Room Type:</label>
                <?php
            $roomnum = $_POST['in1'];
            $result = mysql_query("select * from rooms where Roomnum ='$roomnum'");
            $row = mysql_fetch_array($result);
            echo  $row['Roomtype'];
            ?>
        </div>
        <br>
        <div>
                <label class="room-text">Room Location:</label>
                <?php
            $roomnum = $_POST['in1'];
            $result = mysql_query("select * from rooms where Roomnum ='$roomnum'");
            $row = mysql_fetch_array($result);
            echo  $row['RoomLoc'];
            ?>
        </div>
        <br>
        <div>
                <label class="room-text">Room Description:</label>
                <?php
            $roomnum = $_POST['in1'];
            $result = mysql_query("select * from rooms where Roomnum ='$roomnum'");
            $row = mysql_fetch_array($result);
            echo $row['RoomDes'];
            ?>
        </div>
        <br>
        <div>
                <label class="room-text">Room Availability:</label>
                <?php
            $roomnum = $_POST['in1'];
            $result = mysql_query("select * from rooms where Roomnum ='$roomnum'");
            $row = mysql_fetch_array($result);
            echo  $row['RoomAva'];
            ?>
        </div>
        <br>
        <div>
                <label class="room-text">Room Price:</label>
                <?php
            $roomnum = $_POST['in1'];
            $result = mysql_query("select * from rooms where Roomnum ='$roomnum'");
            $row = mysql_fetch_array($result);
            echo  $row['RoomPrice'];
            ?>
        </div>
        <div class="button" >
                 <button class="choice"><a href="ShowRoom.html">Go Back</a></button>
        </div>
    </form>

</div>
<div>


    <!-- ------------------------------------Footer-------------------------------------*-->

    <div id="Footer-frame"></div>

</body>
</html>