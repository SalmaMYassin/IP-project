<?php
mysql_connect("localhost","root","");
mysql_select_db("hoteliano") or die("fail to connect ".mysql_error()); /* connect to the database or die if the database is not available*/

if(isset($_POST['submit'])) {
    $name = $_POST['in1']; /* getting elements from the form in the booking page*/
    $email = $_POST['in2'];
    $checkin = $_POST['in3'];
    $checkout = $_POST['in4'];
    $Numofg = $_POST['in5'];
    $roomtype = $_POST['in6'];
    $message = $_POST['in7'];



        if ($query = mysql_query("INSERT INTO `reservations` (`id`, `Name`, `Email`, `checkin`, `checkout`, `Numofg`, `Roomtype`, `message`)
          VALUES (NULL, '$name', '$email', '$checkin', '$checkout', '$Numofg', '$roomtype', '$message')")
        ) { /* if condition to input the data into the table and out a message if it proceed  */
            $result = mysql_query("select * from reservations where Name ='$name'");
            $row = mysql_fetch_array($result);

            if ($row['Name'] == $name ){


                echo "<table border='5' cellpadding='15'>";

                echo "<tr> <th>ID</th> <th>Name</th> <th>Email</th> <th>Check in</th> <th>Check out</th> <th> Number of Guests</th> <th>Room Type</th><th>Message</th></tr>";

                echo "<tr>";

                echo '<td>'." Reservation ID is " . $row['ID'];

                echo '<td>'." your name " . $row['Name'];

                echo '<td>'." your Email " . $row['Email'];

                echo '<td>'." your Check in is " . $row['checkin'];

                echo '<td>'." your Check out is " . $row['checkout'];

                echo '<td>'." your Number of guests is " . $row['Numofg'];

                echo '<td>'." your Room type is " . $row['Roomtype'];

                echo '<td>'." your message is " . $row['message'];

                echo "</tr>";

                echo '<p><a href="AddReservation.html" > Go Back </a></p>';

            } else {
                echo"fail to find user ";
            }

        }
    else {
        echo " <script type='text/javascript'>alert(' Failed! ')
            window.location = 'AddReservation.html'
            </script>";
    }
}
/*------------------------------------------------------------*/
if(isset($_POST['editsubmit'])) {
    $ID =$_POST['in0'];
    $name = $_POST['in1']; /* getting elements from the form in the booking page*/
    $email = $_POST['in2'];
    $checkin = $_POST['in3'];
    $checkout = $_POST['in4'];
    $Numofg = $_POST['in5'];
    $roomtype = $_POST['in6'];
    $message = $_POST['in7'];



        if ($query = mysql_query("UPDATE `reservations` SET `Name` = '$name', `Email` = '$email', `checkin` = '$checkin', `checkout` = '$checkout', `Numofg` = '$Numofg', `Roomtype` = '$roomtype', `message` = '$message' 
                                 WHERE `reservations`.`ID` = '$ID'")
        ) { /* if condition to input the data into the table and out a message if it proceed  */
            echo "<script type='text/javascript'>alert('updated successfully!') /* javascript code to send alert to the user to know that he submitted successfully */
             window.location = 'EditBooking.html'
            </script>";
        }
     else {
         echo " <script type='text/javascript'>alert('ID not found! ')
            window.location = 'EditBooking.html'
            </script>";
     }
}
/*------------------------------------------------------------*/

if(isset($_POST['deletesubmit'])) {
    $ID = $_POST['in1']; /* getting elements from the form in the booking page*/
    $result = mysql_query("select * from reservations where ID ='$ID'");
    $row = mysql_fetch_array($result);

    if ($row['ID'] == $ID) {
        if ($query = mysql_query("DELETE FROM `reservations` WHERE `reservations`.`ID` = '$ID'")) { /* if condition to delete the row with this ID  */
            echo "<script type='text/javascript'>alert('delete successfully!') /* javascript code to send alert to the user to know that he submitted successfully */
             window.location = 'DeleteBooking.html'
            </script>";
        }
    } else {
        echo " <script type='text/javascript'>alert('ID not found! ')
            window.location = 'DeleteBooking.html'
            </script>";

    }
}

/*------------------------------------------------------------*/
if(isset($_POST['showsubmit'])) {

    $ID = $_POST['in1']; /* getting elements from the form in the booking page*/

    $result = mysql_query("select * from reservations where ID ='$ID'");
    $row = mysql_fetch_array($result);

    if ($row['ID'] == $ID ){


        echo "<table border='5' cellpadding='15'>";

        echo "<tr> <th>ID</th> <th>Name</th><th>Email</th> <th>Check in</th> <th>Check out</th> <th> Number of Guests</th> <th>Room Type</th><th>Message</th></tr>";

        echo "<tr>";

        echo '<td>'." Reservation ID is " . $row['ID'];

        echo '<td>'." your name " . $row['Name'];

        echo '<td>'." your Email " . $row['Email'];

        echo '<td>'." your Check in is " . $row['checkin'];

        echo '<td>'." your Check out is " . $row['checkout'];

        echo '<td>'." your Number of guests is " . $row['Numofg'];

        echo '<td>'." your Room type is " . $row['Roomtype'];

        echo '<td>'." your message is " . $row['message'];

        echo "</tr>";
        echo '<p><a href="ShowBooking.html" > Go Back </a></p>';


    } else {
        echo"fail to find user ";
    }
}