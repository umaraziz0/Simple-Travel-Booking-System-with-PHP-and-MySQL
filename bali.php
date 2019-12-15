<?php
session_start();

require_once "config.php";

if(isset($_POST['submit']) && isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) 
{
    $username = $_SESSION["username"];
    $sql = "INSERT INTO trips (days, destinations, attractions, activities, price, user) 
    VALUES(3, 'Bali', 'Seminyak, Uluwatu Temple, Kuta Beach', 'Kecak Dance Performance, Night BBQ', 250, '$username')";
    
    if(mysqli_query($link, $sql)){
        echo "<script> alert('Booking Successful');  </script>";
    } else {
        echo "<script> alert('A problem occurred. Try again.');  </script>.";
    }
    
} elseif(isset($_POST['submit']) && !isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true){
    header("location:login.php");
    exit;
}

if(isset($_POST['submit2']) && isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) 
{
    $username2 = $_SESSION["username"];
    $sql2 = "INSERT INTO trips (days, destinations, attractions, activities, price, user) 
    VALUES(5, 'Bali', 'Seminyak, Uluwatu Temple, Kuta Beach, Sanur Beach, Ubud Monkey Forest', 'Kecak Dance Performance, Night BBQ, Snorkeling, Surfing', 400, '$username2')";
    
    if(mysqli_query($link, $sql2)){
        echo "<script> alert('Booking Successful');  </script>";
    } else {
        echo "<script> alert('A problem occurred. Try again.');  </script>.";
    }
} elseif(isset($_POST['submit2']) && !isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true)
{
    header("location:login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bali</title>
    <link href="destinations.css" type="text/css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
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
            <button class="destinationsbutton active">Destinations
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="destinationscontent">
                <a class="active" href="bali.php">Bali</a>
                <a href="jakarta.php">Jakarta</a>
                <a href="jogja.php">Yogyakarta</a>
            </div>
        </div>
        <a href="trips.php">Manage Trips</a>
        <a href="contactus.php">Contact Us</a>
    </div>

    <img src="images/bali.png" alt="bali" style="width: 100%; ">
    <div class="container">  
        <div class="card">  
            <div class="padding">
                <h1 style= "text-align: center"> About Bali </h1>
                <hr>
                <p>
                    Bali is the most popular island holiday destination in the Indonesian archipelago. The island’s home to an ancient culture that's known for its warm hospitality. Exotic temples and palaces set against stunning natural backdrops are some of its top attractions. Dining in Bali presents endless choices of local or far-flung cuisine. After sunset, famous nightspots come to life offering exciting clubbing and packed dance floors. Inland, towering volcanoes and pristine jungles greet you with plenty to see and do. Most can't stay away from the beach for long, though.
                    The island is home to religious sites such as cliffside Uluwatu Temple. To the south, the beachside city of Kuta has lively bars, while Seminyak, Sanur and Nusa Dua are popular resort towns. The island is also known for its yoga and meditation retreats.
                </p>
            </div>
        </div>
        

        <div class = "attractions">
            <div class="card">
                <h1 style= "text-align: center; padding-top:2%">Attractions</h1>
                <hr>
                <img src="images/seminyak.jpg" alt="seminyak" class="picright">
                    
                <h2 class="headerleft">Seminyak</h2>
                <div class="textleft">
                    <p>
                        Seminyak is Bali's most stylish and upscale beach resort area. It's home to among the island's most luxurious resorts. It also hosts a number of fine restaurants and boutiques. Fashion stores line Seminyak's streets. You can also find some of Bali's top dining spots where international chefs cook up world-class cuisine. The scenes along Jalan Petitenget and Jalan Kayu Aya can be quite eclectic.
                        Seminyak's Petitenget Beach offers a more secluded ambiance. This is if you compare it with Kuta and Legian to its south. However, after sunset a livelier nightlife scene takes over. Hotspots in Seminyak have all garnered an international following. These include chic hotels such as the W Retreat & Spa. Or, find premier dining and entertainment venues such as Ku De Ta and the Potato Head Beach Club.
                    </p>
                    <br><br>
                </div>
            </div>

            <div class="card">
                <div class="padding">
                    <img src="images/uluwatu.jpg" alt="Uluwatu Temple" class="picleft">
                    <div class="textright">
                        <h2>Uluwatu Temple</h2>
                        <p>
                            Uluwatu Temple, or Pura Luhur Uluwatu, one of six key temples believed to be Bali's spiritual pillars, is renowned for its magnificent location, perched on top of a steep cliff approximately 70 metres above sea level. This temple also shares the splendid sunset backdrops as that of Tanah Lot Temple, another important sea temple located in the island's western shores. Pura Luhur Uluwatu is definitely one of the top places on the island to go to for sunset delights, with direct views overlooking the beautiful Indian Ocean and daily Kecak dance performances. Balinese architecture, traditionally-designed gateways, and ancient sculptures add to Uluwatu Temple's appeal.
                        </p>
                    </div>
                    <br>
                    <br>
                </div>
            </div>

            <div class="card">
                <div class="padding">
                    <img src="images/kuta.jpg" alt="Kuta Beach" class="picright">
                    <h2 class="headerleft">Kuta Beach</h2>
                    <div class="textleft"> 
                        <p>
                            Kuta Beach is on the western side of the island's narrow isthmus. It's considered Bali's most famous beach resort destination. Kuta Beach is also minutes away from the Ngurah Rai International Airport in Tuban. The nearby resorts of Tuban, Legian and Seminyak are all within close walking distance. 
                            Once a simple, rustic and quiet fishing village, Kuta Beach has witnessed a transformation over the past years. This is due to the rise of various accommodation options, dining and shopping scenes. The rapid growth owes much to visitors, beachcombers and art lovers from nearby Australia. Expatriates also helped pioneer surfing in Kuta, as well. 
                        </p>
                    </div>
                    <br><br><br>
                </div>
            </div>

            <div class="card">
                <div class="padding">
                    <div class="packages">
                        <div class="row">
                            <h1 style= "text-align: center">Travel Packages</h1>
                            <hr>

                            <div class="column1" style="top: -57px;">
                                <div class="packagecard1">
                                    <h2>Bali 3 Day Package</h2>
                                    <hr>
                                    <table>
                                        <tr>
                                            <th>Days</th>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <th>Attractions</th>
                                            <td>Seminyak Beach, Uluwatu Temple, Kuta Beach</td>
                                        </tr>
                                        <tr>
                                            <th>Activities</th>
                                            <td>Kecak Dance Performance, Night BBQ</td>
                                        </tr>
                                        <tr>
                                            <th>Price</th>
                                            <td>250$</td>
                                        </tr>
                                    </table>

                                    <form method="post">
                                        <input type="submit" class="btn btn-primary" value="Book Now" name="submit">
                                    </form>
                                    <br>
                                </div>
                            </div>

                            <div class="column2">
                                <div class="packagecard2">
                                    <h2>Bali 5 Day Package</h2>
                                    <hr>
                                    <table>
                                        <tr>
                                            <th>Days</th>
                                            <td>5</td>
                                        </tr>
                                        <tr>
                                            <th>Attractions</th>
                                            <td>Seminyak Beach, Uluwatu Temple, Kuta Beach, Sanur Beach, Ubud Monkey Forest</td>
                                        </tr>
                                        <tr>
                                            <th>Activities</th>
                                            <td>Kecak Dance Performance, Night BBQ, Snorkeling, Surfing </td>
                                        </tr>
                                        <tr>
                                            <th>Price</th>
                                            <td>400$</td>
                                        </tr>
                                    </table>

                                    <form method="post">
                                        <input type="submit" class="btn btn-primary" value="Book Now" name="submit2">
                                    </form>
                                    <br>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
        </div>
    </div>
</body>