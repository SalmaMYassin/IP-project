<?php
mysql_connect("localhost","root","");
mysql_select_db("hoteliano") or die("fail to connect ".mysql_error()); /* connect to the database or die if the database is not available*/

/* getting elements from the form in the booking page*/
$username = $_POST['user'];
$password = $_POST['pass'];

$result = mysql_query("select * from admins where username ='$username' and password = '$password'");  /* Find if there are a username and password matches the entered username and password  */

$row = mysql_fetch_array($result);  /* checking each row in the table */

if ($row['username'] == $username && $row['password'] == $password){
    echo " <script type='text/javascript'>alert('login success!!! welcome')/* javascript code to send alert to the user to know that he logged in successfully */
            window.location = 'Admin.html'
            </script>";
} else {
    echo " <script type='text/javascript'>alert('fail to login!! ') /* javascript code to send alert to the user to know that he failed to login */
            window.location = 'AdminLogin.html'
            </script>";
}


