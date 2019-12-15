<?php
session_start();

require_once "config.php";

if(isset($_POST['submit']) && isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) 
{
    $username = $_SESSION["username"];
    $sql = "INSERT INTO trips (days, destinations, attractions, activities, price, user) 
    VALUES(3, 'Yogyakarta', 'Keraton Yogyakarta, Taman Sari, Brobodur Temple', 'Malioboro Road Stroll, Ramayana Ballet', 150, '$username')";
    
    if(mysqli_query($link, $sql)){
        echo "<script> alert('Booking Successful');  </script>.";
    } 
    else {
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
    VALUES(5, 'Yogyakarta', 'Keraton Yogyakarta, Taman Sari, Brobodur Temple, Prambanan Temple, Gembira Loka Zoo', 'Malioboro Road Stroll, Ramayana Ballet, Temple Tours', 300, '$username2')";
    
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
    <title>Yogyakarta</title>
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
                <a href="jakarta.php">Jakarta</a>
                <a class="active" href="jogja.php">Yogyakarta</a>
            </div>
        </div>
        <a href="trips.php">Manage Trips</a>
        <a href="contactus.php">Contact Us</a>
    </div>

    <img src="images/jogja.png" alt="Yogyakarta" style="width 100%">
    <div class="container">
        <div class="card">
            <div class="padding">
                <h1 style="text-align:center">About Yogyakarta</h1>
                <hr>
                <p>
                    If Jakarta is Java’s financial and industrial powerhouse, Yogyakarta is its soul. Central to the island’s artistic and intellectual heritage, Yogyakarta (pronounced ‘Jogjakarta’ and called Yogya, 'Jogja', for short) is where the Javanese language is at its purest, the arts at their brightest and its traditions at their most visible. 
                    Fiercely independent and protective of its customs – and still headed by a sultan, whose kraton (walled city palace) remains the hub of traditional life – contemporary Yogya is nevertheless a huge urban centre (the entire metropolitan area is home to over 3.3 million) complete with malls, fast-food chains and traffic jams, even as it remains a stronghold of batik, gamelan and ritual. 

                    Put it all together and you have Indonesia's coolest, most liveable and lovable city, with street art, galleries, coffee shops and abundant cultural attractions. It's also a perfect base for visiting Indonesia’s most important archaeological sites, Borobudur and Prambanan. 
                </p>
            </div>
        </div>
            
        <div class="attractions">
            <div class="card">
                <div class="padding">
                    <h1 style= "text-align: center">Attractions</h1>
                        <hr>

                        <img src="images/keraton.png" alt="Keraton Jogja" class="picright">
                        <h2 class = "headerleft">Keraton Yogyakarta</h2>
                        <div class="textleft">
                            <p>
                            The Kraton (also spelled keraton or karaton) or the Palace of Yogyakarta, is a grand complex that was meticulously planned to reflect the Javanese cosmos.
                            This elegant complex of pavilions was constructed based on ancient beliefs, of the connection between the God, human and the natural realms. Each feature holds a special symbolic meaning related to the Javanese worldview, who consider the importance of Mount Merapi and The Indian Ocean.
                            A green square called Alun-alun Lor or the north square is set to be the front side of the palace, with large banyan trees guarding its center, named Kyai Dewandaru and Kyai Wijayandaru. Alun-alun Kidul or the south square is located at the other side of the palace’s north-south invisible horizontal axis.
                            Today, the Kraton is a piece of living history and tradition. It continues to be used, both as a home of the Sultan as well as for other important ceremonial and cultural functions of the Yogyakarta court.
                            </p>
                        </div>
                        <br><br><br><br>
                </div>
            </div>  

            <div class="card">
                <div class="padding">
                    <img src="images/tamansari.png" alt="Taman Sari" class="picleft">
                    <div class="textright">
                        <h2>Taman Sari</h2>
                        <p>
                            Located near the Kraton, this place was also known as the garden for the Sultan of Yogyakarta. Tamansari was originally built for multiple purposes yet now only several buildings remain. Some of its original functions were a place to rest, to meditate, to work, to hide and to defend the Sultan’s family.  In this present day, some of its buildings have now become homes for local residents and only the mosque, resting and bathing space, and underground tunnels are accessible by tourists.
                            With its combination of eastern and western style building, this unique escape of the royal family has its own appeal and story. The most famous place in Tamansari is the bathing and resting place of the Sultan and his Princesses named Umbul Pasiraman. Most tourists find this place interesting as there is a unique story behind its origins.
                        </p>
                    </div>
                    <br><br>
                </div>
            </div>

            <div class="card">
                <div class="padding">
                    <img src="images/borobudur.jpg" alt="Borobudur" class="picright">
                    <h2 class="headerleft">Borobudur Temple</h2>
                    <div class="textleft">
                        <p>
                        Together with Angkor Wat in Cambodia and Bagan in Myanmar, Borobudur ranks as one of the great cultural icons of Southeast Asia. Looming above a patchwork of bottle-green paddy fields and slivers of tropical forest, this colossal Buddhist monument has survived volcanic eruptions, terrorist attack and the 2006 earthquake. The latter caused considerable damage, but thankfully this most enigmatic of temples has remained undiminished in scale and beauty. 
                        Borobudur is at the centre of an attractive assembly of traditional rice-growing kampung (villages), ringed by volcanic peaks. Called the Garden of Java by locals, the region, with its rural homestays and guesthouses, scattered temples and tradition of honey and tofu production, warrants at least an overnight stay. For those who find Borobudur's bucolic charms a delightful antidote to the urban experience of nearby Yogyakarta, there are plenty of reasons to extend a visit, including engaging with the local culture through cooperative tours. 
                        </p>
                    </div>  
                    <br><br>
                </div>
            </div>

            <div class="card">
                <div class="padding">
                    <div class="packages">
                        <div class="row" style="padding-bottom:25px;">
                            <h1 style= "text-align: center">Travel Packages</h1>
                            <hr>
                            <div class="column1" style="top:-17px;">
                                <div class="packagecard1">
                                    <h2>Yogyakarta 3 Day Package</h2>
                                    <hr>
                                    <table>
                                        <tr>
                                            <th>Days</th>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <th>Attractions</th>
                                            <td>Keraton Yogyakarta, Taman Sari, Brobodur Temple </td>
                                        </tr>
                                        <tr>
                                            <th>Activities</th>
                                            <td>Malioboro Road Stroll, Ramayana Ballet</td>
                                        </tr>
                                        <tr>
                                            <th>Price</th>
                                            <td>150$</td>
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
                                    <h2>Yogyakarta 5 Day Package</h2>
                                    <hr>
                                    <table>
                                        <tr>
                                            <th>Days</th>
                                            <td>5</td>
                                        </tr>
                                        <tr>
                                            <th>Attractions</th>
                                            <td>Keraton Yogyakarta, Taman Sari, Brobodur Temple, Prambanan Temple, Gembira Loka Zoo  </td>
                                        </tr>
                                        <tr>
                                            <th>Activities</th>
                                            <td>Malioboro Road Stroll, Ramayana Ballet, Temple Tours</td>
                                        </tr>
                                        <tr>
                                            <th>Price</th>
                                            <td>150$</td>
                                        </tr>
                                    </table>

                                    <form method="post">
                                        <input type="submit" class="btn btn-primary" value="Book Now" name="submit2">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
</body>