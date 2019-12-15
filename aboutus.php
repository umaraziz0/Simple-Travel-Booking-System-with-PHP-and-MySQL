<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<html>

<link href="trips.css" type="text/css" rel="stylesheet"/>
<a href="home.php"><img id="logo" src="images/itc logo.png" alt="logo" style="width:30%"></a>
    <img id="motto" src="images/motto.png" alt="motto" style="width:40%">
    <div class="loginregister">
        <?php
        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)
        {
            echo "Welcome," . htmlspecialchars($_SESSION['username']) . " | <a href='logout.php' class='btn btn-danger'>Log Out</a>";
        } else {
            echo "<a href='login.php'>Login</a> | <a href='register.php'>Register</a>";
        }
        ?>
    </div>

    <div class = "topnav">
        <a href="home.php">Home</a>
        <a class="active" href="aboutus.php">About Us</a>
        <a href="aboutindo.php">About Indonesia</a>
        <div class="destinationsdrop">
            <button class="destinationsbutton">Destinations
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="destinationscontent">
                <a href="bali.php">Bali</a>
                <a href="jakarta.php">Jakarta</a>
                <a href="jogja.php">Yogyakarta</a>
            </div>
        </div>
        <a href="trips.php">Manage Trips</a>
        <a href="contactus.php">Contact Us</a>
    </div>

    <div class="bg">
    <img src="images/bg.jpg" alt="" style="width:100%">
        <div class="text2">
            <img src="images/aboutus.png" alt="" style="max-width:100%">
            <img src="images/logowhite.png" alt="" id="logo2">
        </div>
    </div>