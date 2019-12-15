<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

require_once "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manage Trips</title>
    <link href="trips.css" type="text/css" rel="stylesheet"/>
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
        <a class="active" href="trips.php">Manage Trips</a>
        <a href="contactus.php">Contact Us</a>
    </div>
    
    <div class="wrapper">
        <img src="images/bg.jpg" style="width:100%">
        <div class="text">
            <h1>Manage Trips</h1>
            <hr>
            <?php
                $username = $_SESSION['username'];
                $sql = "SELECT * FROM trips WHERE user = '$username'";

                $result = mysqli_query($link, $sql);

                
                if (mysqli_num_rows($result) > 0) {
                    echo "<table id='maintable'>
                    <tr><th>Days</th><th>Destinations</th><th>Attractions</th><th>Activities</th><th>Price($)</th><th>Remove</th></tr>";
                

                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                    
                        echo "<form method='post'>";
                        echo "<tr><td>" . $row['days'] . "</td>"
                        . "<td>" . $row['destinations'] . "</td>"
                        . "<td>" . $row['attractions'] . "</td>"
                        . "<td>" . $row['activities'] . "</td>"
                        . "<td>" . $row['price'] . "</td>"
                        . '<td>' . '<input type="hidden" name="id" value="' . $row['id'] . '" />
                        <input type="submit" name="remove" id="'. $row['id'] . '" value="Remove" />' . '</td>';
                        echo "</tr>";
                        echo "</form>";
                        
                        if(isset($_POST['remove']))
                        {
                            $id = $_POST['id'];
                            $sql3 = "DELETE FROM trips WHERE id = $id";

                            mysqli_query($link, $sql3);
                            header("Refresh:0");
                        }
                    }
                
                    echo "</table>";
                }        

                echo "<br>";

                $sql2 = "SELECT SUM(price) FROM trips WHERE user = '$username'";
                $result2 = mysqli_query($link, $sql2);

                    while($a = mysqli_fetch_assoc($result2))
                    {
                        echo "<table>
                        <tr><th>Total Price: " . $a['SUM(price)'] . "$</th></tr></table>";
                    }
            ?>
        </div>
    </div>
</body>
</html>