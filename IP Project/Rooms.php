<?php
mysql_connect("localhost","root","");
mysql_select_db("hoteliano") or die("fail to connect ".mysql_error()); /* connect to the database or die if the database is not available*/

if(isset($_POST['submit'])) {
    $roomnum = $_POST['in1']; /* getting elements from the form in the booking page*/
    $roomtype = $_POST['in2'];
    $roomloc = $_POST['in3'];
    $roomdes = $_POST['in4'];
    $roomava = $_POST['in5'];
    $roomprice = $_POST['in6'];



    $check = mysql_query("SELECT * From rooms WHERE Roomnum='" . $roomnum . "'"); /* sql query to check if the name exists in the reservation table*/

    if (mysql_fetch_array($check) == 0) { /* if condition to check if the name does not exist in the reservation table */
        if ($query = mysql_query("INSERT INTO `rooms` (`id`, `Roomnum`, `Roomtype`, `Roomloc`, `RoomDes`, `Roomava`, `Roomprice`)
          VALUES (NULL, '$roomnum', '$roomtype', '$roomloc', '$roomdes', '$roomava', '$roomprice')")
        ) { /* if condition to input the data into the table and out a message if it proceed  */
            echo "<script type='text/javascript'>alert('Adding successfully!') /* javascript code to send alert to the user to know that he submitted successfully */
             window.location = 'AddRoom.html'
            </script>";
        }
    } else {
        echo " <script type='text/javascript'>alert('Room Number already exists! ')
            window.location = 'AddRoom.html'
            </script>";
    }
}
/*------------------------------------------------------------*/
if(isset($_POST['editsubmit'])) {
    $roomnum = $_POST['in1']; /* getting elements from the form in the booking page*/
    $roomtype = $_POST['in2'];
    $roomloc = $_POST['in3'];
    $roomdes = $_POST['in4'];
    $roomava = $_POST['in5'];
    $roomprice = $_POST['in6'];



    if ($query = mysql_query("UPDATE `rooms` SET `Roomtype` = '$roomtype', `Roomloc` = '$roomloc', `RoomDes` = '$roomdes', `Roomava` = '$roomava', `Roomprice` = '$roomprice' 
                                 WHERE `rooms`.`Roomnum` = '$roomnum'")
    ) { /* if condition to input the data into the table and out a message if it proceed  */
        echo "<script type='text/javascript'>alert('updated successfully!') /* javascript code to send alert to the user to know that he submitted successfully */
             window.location = 'EditRoom.html'
            </script>";
    }
    else {
        echo " <script type='text/javascript'>alert('Room Number not found! ')
            window.location = 'EditRoom.html'
            </script>";
    }
}
/*------------------------------------------------------------*/

if(isset($_POST['deletesubmit'])) {
    $roomnum = $_POST['in1']; /* getting elements from the form in the booking page*/

    $result = mysql_query("select * from rooms where Roomnum ='$roomnum'");
    $row = mysql_fetch_array($result);

    if ($row['Roomnum'] == $roomnum ){
    if ($query = mysql_query("DELETE FROM `rooms` WHERE `rooms`.`Roomnum` = '$roomnum'")) { /* if condition to input the data into the table and out a message if it proceed  */
        echo "<script type='text/javascript'>alert('delete successfully!') /* javascript code to send alert to the user to know that he submitted successfully */
             window.location = 'RemoveRoom.html'
            </script>";
    } }else {
        echo " <script type='text/javascript'>alert('Room not found! ')
            window.location = 'RemoveRoom.html'
            </script>";

    }
}
/*------------------------------------------------------------*/

if(isset($_POST['Print'])) {

    $roomnum = $_POST['in1']; /* getting elements from the form in the booking page*/

    $result = mysql_query("select * from rooms where Roomnum ='$roomnum'");
    $row = mysql_fetch_array($result);

    if ($row['Roomnum'] == $roomnum ){


        echo "<table border='5' cellpadding='5'>";

        echo "<tr> <th>Room Number</th> <th>Room Type</th> <th>Room Location</th> <th>Room Description</th> <th>Room Availability</th><th>Room Price</th></tr>";

        echo "<tr>";

        echo '<td>'." Number is " . $row['Roomnum'];

        echo '<td>'." Room Type is " . $row['Roomtype'];

        echo '<td>'." Room Location is " . $row['RoomLoc'];

        echo '<td>'." Room Description is " . $row['RoomDes'];

        echo '<td>'." Room Availability is " . $row['RoomAva'];

        echo '<td>'." Room Price is " . $row['RoomPrice'];

        echo "</tr>";
    } else {
        echo " <script type='text/javascript'>alert('Room not found! ')
            window.location = 'ShowRoom.html'
            </script>";
    }
    echo '<p><a href="ShowRoom.html"> Go Back </a></p>';
}
/*------------------------------------------------------------*/
