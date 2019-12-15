<?php
session_start();

require_once "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <link href="contact.css" type="text/css" rel="stylesheet"/>
</head>
<body>
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
        <a href="aboutus.php">About Us</a>
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
        <a class="active" href="contactus.php">Contact Us</a>
    </div>

    <div class="bg">
        <img src="images/bg.jpg" style="width:100%" >
        <div class="wrapper">
            <h2>Contact Us</h2>
            <hr>
            <img src="images/contacts.png" alt="contacts">
        </div>
    </div>

</body>
</html>