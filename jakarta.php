<?php
session_start();

require_once "config.php";

if(isset($_POST['submit']) && isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) 
    {
        $username = $_SESSION["username"];
        $sql = "INSERT INTO trips (days, destinations, attractions, activities, price, user)
        VALUES(3, 'Jakarta', 'Monas, Kota Tua, TMII', 'Culinary Trip, Traditional Wayang Performance', 300, '$username')";
        
        if(mysqli_query($link, $sql))
        {
            echo "<script> alert('Booking Successful');  </script>";
        } else{
            echo "<script> alert('A problem occurred. Try again.');  </script>.";
        } 
    } elseif(isset($_POST['submit']) && !isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true)
    {
        header("location:login.php");
        exit;
    }

if(isset($_POST['submit2']) && isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) 
    {
        $username2 = $_SESSION["username"];
        $sql2 = "INSERT INTO trips (days, destinations, attractions, activities, price, user) 
        VALUES(5, 'Jakarta', 'Monas, Kota Tua, TMII, Ancol Dreamland, Dunia Fantasi', 'Culinary Trip + Cooking Class, Traditional Wayang Performance, Ancol + Dufan Fun Trip', 450, '$username2')";
        
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
    <title>Jakarta</title>
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
                <a href="bali.php">Bali</a>
                <a class="active" href="jakarta.php">Jakarta</a>
                <a href="jogja.php">Yogyakarta</a>
            </div>
        </div>
        <a href="trips.php">Manage Trips</a>
        <a href="contactus.php">Contact Us</a>
    </div>

    <img src="images/jakarta.png" alt="jakarta" style="width: 100%; ">   
    <div class="container">
        <div class="card">
            <div class="padding">
                <h1 style= "text-align: center"> About Jakarta </h1>
                <hr>
                <p>
                    Jakarta is the capital city of the Republic of Indonesia. Jakarta is a huge, sprawling metropolis, home to over 10 million people with diverse ethnic group background from all over Indonesia. 
                    Located on the northwest of Java Island, the province of DKI Jakarta has rapidly expanded through the years, absorbing many villages in the process. In fact, Jakarta is a conglomeration of villages known as kampung, now crossed by main roads and superhighways.
                    It is of the local experience in the city, that you may drive down one wide avenue one minute, then suddenly find yourself squeezed into a small street together with scores of cars and motorbikes. With its many suburbs, Jakarta has become a megapolitan city. Therefore, when you visit Jakarta it is best to invest in a good map or rely on GPS to navigate around.
                </p>
            </div>
        </div>
        
        <div class = "attractions">
            <div class="card">
                <div class="padding">
                    <h1 style= "text-align: center">Attractions</h1>
                    <hr>
                    <img src="images/monas.jpg" alt="Monas" class="picright">
                    <h2 class = "headerleft">Monumen Nasional (Monas)</h2>
                    <div class="textleft">
                        <p>
                            The National Monument is a 132 m tower in the centre of Merdeka Square, Central Jakarta, symbolizing the fight for Indonesia. It is the national monument of the Republic of Indonesia, built to commemorate the struggle for Indonesian independence. 
                            The monument and the museum are open daily from 08.00 until 16.00 Western Indonesia Time (UTC+7) throughout the week except for the Mondays when the monument is closed. Since April 2016, the monument also opens during night time, from 19.00 until 22.00 in Tuesday to Friday, and from 19.00 until 00.00 in Saturday and Sunday.
                        </p>
                    </div>
                    <br><br><br><br>
                </div>
            </div>
            
            <div class="card">
                <div class="padding">
                    <img src="images/kotu.png" alt="Kota Tua" class="picleft">
                    <div class="textright">
                        <h2>Kota Tua</h2>
                        <p>
                            Kota Tua Jakarta, officially known as Kota Tua, is a neighborhood comprising the original downtown area of Jakarta, Indonesia. It is also known as Oud Batavia, Benedenstad, or Kota Lama.
                            In this sprawling metropolis of a city, it’s hard to imagine that Jakarta was once confined to just a small area here around an area that was known as Batavia. Today it is called Old Town or Kota Tua – and it’s a reminder of the centuries of Indonesian history dominated by Europeans.
                        </p>
                    </div>
                    <br><br>
                </div>
            </div>

        <div class="card">
            <div class="padding">
                <img src="images/tmii.jpg" alt="TMII" class="picright">
                <h2 class="headerleft">Taman Mini Indonesia Indah (TMII)</h2>
                <div class="textleft">
                    <p>
                    Taman Mini Indonesia Park is a must-try for families visiting Jakarta or anyone looking to schedule one day in their city holiday plan to appreciate the rich arts and cultural diversity of the whole Indonesian islands. It’s one of the most unique amusement parks in the world and offers a great break away from the hectic metropolitan scenes. The park boasts multiple pavilions, each representing the unique architectures, traditional costumes and performing arts of the different islands. From the arching roofs of traditional Sumatran houses, eloquent moves of Javanese and Kalimantan traditional dancers, to the ornate woodcarvings and heritage textiles from the Nusa Tenggara Islands.    
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
                        <div class="column1" style="top: -77px">
                            <div class="packagecard1">
                                <h2>Jakarta 3 Day Package</h2>
                                <hr>
                                <table>
                                    <tr>
                                        <th>Days</th>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <th>Attractions</th>
                                        <td>Monas, Kota Tua, TMII</td>
                                    </tr>
                                    <tr>
                                        <th>Activities</th>
                                        <td>Culinary Trip, Traditional Wayang Performance</td>
                                    </tr>
                                    <tr>
                                        <th>Price</th>
                                        <td>300$</td>
                                    </tr>
                                </table>
                                

                                <form method="post">
                                    <input type="submit" class="button" value="Book Now" name="submit">
                                </form>
                            </div>
                        </div>
                        
                        <div class="column2">
                            <div class="packagecard2">
                                <h2>Jakarta 5 Day Package</h2>
                                <hr>
                                <table>
                                    <tr>
                                        <th>Days</th>
                                        <td>5</td>
                                    </tr>
                                    <tr>
                                        <th>Attractions</th>
                                        <td>Monas, Kota Tua, TMII, Ancol Dreamland, Dunia Fantasi</td>
                                    </tr>
                                    <tr>
                                        <th>Activities</th>
                                        <td>Culinary Trip + Cooking Class, Traditional Wayang Performance, Ancol + Dufan Fun Trip</td>
                                    </tr>
                                    <tr>
                                        <th>Price</th>
                                        <td>450$</td>
                                    </tr>
                                </table>
                    
                                <form method="post">
                                    <input type="submit" class="button" value="Book Now" name="submit2">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
        </div>
    </div>
</body>
</html>