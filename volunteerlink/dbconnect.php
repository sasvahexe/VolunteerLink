<?php
    $mysqli = mysqli_connect("volunteerlink","root","","Volunteer Link");
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>