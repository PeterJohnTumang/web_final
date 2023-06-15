<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $email = $_POST['email'];

    $sql = "INSERT INTO `subscription` (email) VALUES ('$email')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo '<script>alert("Request Subscription Successful");</script>';
    } else {
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" media='screen and (max-width: 768px)' href="./CSS/mobile.css">
    <link href="https://fonts.googleapis.com/css?family=Lato|Staatliches&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="img/icon.png">
    <script src="https://kit.fontawesome.com/85a5fdd30e.js" async></script>

    <title>PJNews | Latest Philippines News and Multimedia</title>
</head>

<body>
    <div id="slideout-menu">
        <ul>
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="technology-news.php">Technology</a>
            </li>
            <li>
                <a href="politics-news.php">Politics</a>
            </li>
            <li>
                <a href="business-news.php">Business</a>
            </li>
            <li>
                <a href="health-news.php">Health</a>
            </li>
            <li>
                <a href="environment-news.php">Environment</a>
            </li>
            <li>
                <a href="entertainment-news.php">Entertainment</a>
            </li>
            <li>
                <a href="sports-news.php">Sports</a>
            </li>
            <input type="text" placeholder="Search Here">
            </li>
        </ul>
    </div>

    <nav>
        <div id="logo-img">
            <a href="#">
                <img src="img/pjnews-logo.png" alt="PJNews Logo">
            </a>
        </div>
        <div id="menu-icon">
            <i class="fas fa-bars"></i>
        </div>
        <ul>
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="technology-news.php">Technology</a>
            </li>
            <li>
                <a href="politics-news.php">Politics</a>
            </li>
            <li>
                <a href="business-news.php">Business</a>
            </li>
            <li>
                <a href="health-news.php">Health</a>
            </li>
            <li>
                <a href="environment-news.php">Environment</a>
            </li>
            <li>
                <a href="entertainment-news.php">Entertainment</a>
            </li>
            <li>
                <a class="active" href="sports-news.php">Sports</a>
            </li>

            <div id="search-icon">
                <i class="fas fa-search"></i>
            </div>
            </li>
        </ul>
    </nav>

    <div id="searchbox">
        <input type="text" placeholder="Search Here">
    </div>
    <br><br><br>
    <section id="home-articles" class="py-2">
        <div class="container">
            <h2>SPORTS NEWS</h2>
            <div class="articles-container">
                <article class="card">
                    <img src="img/articles/sports1.png" alt="photo">
                    <div>
                        <div class="category category-sports">
                            Sports
                        </div>
                        <h3>
                            <a href="sports/sports1.php">Denver Nuggets make history, sweep Los Angeles Lakers
                                to secure NBA finals berth</a>
                        </h3>
                        <p>In an electrifying showdown at the Crypto.com Arena, the Denver Nuggets pulled off a stunning
                            victory over the Los Angeles Lakers, booking their spot in the NBA Finals with a sensational
                            sweep of the Western Conference Finals.
                        </p>
                    </div>
                </article>

                <article class="card">
                    <div class="category category-sports">
                        Sports
                    </div>
                    <h3>
                        <a href="sports/sports2.php">Poomsae ace Jocel Lyn Ninobla has double work up for Asian
                            Games</a>
                    </h3>
                    <p>Jocel Lyn Ninobla gained prominence as poomsae queen in the region after a third consecutive gold
                        medal in the Southeast Asian (SEA) Games last month in Cambodia.</p>
                </article>

                <article class="card">
                    <img src="img/articles/sports3.png" alt="photo">
                    <div class="category category-sports">
                        Sports
                    </div>
                    <h3>
                        <a href="sports/sports3.php">Letran Knights set for two games in one day</a>
                    </h3>
                    <p>The Knights will have their hands full on Thursday as they will compete in both the PBA D-League
                        Aspirants Cup and the 2023 FilOil EcoOil Preseason Cup, with both games having a significant
                        impact on their preseason campaign. </p>
                </article>

                <article class="card">
                    <div class="category category-sports">
                        Sports
                    </div>
                    <h3>
                        <a href="sports/sports4.php">Figueroa shines as NU keeps FilOil title defense alive</a>
                    </h3>
                    <p>Two of the best teams squads from the UAAP and the NCAA needed extra minutes to settle their
                        quarterfinals matchup as National University defeated College of St. Benilde, 88-72, in the 2023
                        FilOil EcoOil Preseason Cup on Tuesday in San Juan City.</p>
                    <img src="img/articles/sports4.png" alt="photo">
                </article>

                <article class="card">
                    <img src="img/articles/sports5.png" alt="photo">
                    <div class="category category-sports">
                        Sports
                    </div>
                    <h3>
                        <a href="sports/sports5.php">More 3x3 teams better for PH's Olympic hopes, TNT’s Belen
                            saysy</a>
                    </h3>
                    <p>TNT Triple Giga came a few possessions short of punching a ticket to the FIBA 3x3 World Tour 2023
                        Macau Masters, which would have put them in the same territory as Chooks, the country’s de facto
                        3x3 club.</p>
                </article>

                <article class="card">
                    <div class="category category-sports">
                        Sports
                    </div>
                    <h3>
                        <a href="sports/sports6.php">De Jesus hopes to bring winning experience,
                            relentlessness to Gilas</a>
                    </h3>
                    <p>After officially announcing her commitment to the Philippine women’s national basketball team,
                        Duke University guard de Jesus is hoping that she will be able to bring her winning experience
                        to the squad as they compete in the FIBA Women’s Asia Cup in Australia.</p>
                </article>

                <article class="card">
                    <div>
                        <div class="category category-sports">
                            Sports
                        </div>
                        <h3>
                            <a href="sports/sports7.php">San Beda, Letran face off for D-League Finals spots</a>
                        </h3>
                        <p>Longtime collegiate rivals Marinerong Pilipino-San Beda and Wangs Basketball @27
                            Strikers-Letran will contest the second and last spot in the PBA D-League Aspirants' Cup
                            Finals on Thursday at the Ynares Sports Arena.</p>
                    </div>
                    <img src="img/articles/sports7.png" alt="photo">
                </article>
            </div>
        </div>
    </section>

    <footer id='main-footer' class='py-2'>
        <div class="container footer-container">
            <div>
                <img src="img/pjnews-logodark.png" alt="PJNews Logo">
                <p>PJNews is a trusted digital brand delivering credible news, in-depth reports, and engaging
                    storytelling across various categories. with well-informed insights.</p>
            </div>
            <div>
                <h3>Premium Subscription</h3>
                <p>Ad-free website articles, subscriber exclusive contents, digital edition access, and more.</p>
                <form method="post">
                    <input type="email" class="form-control" placeholder="Enter your email" name="email"
                        autocomplete="off" required>
                    <button type="submit" class="btn btn-primary" name="submit">Request Subscription</button>
                </form>
            </div>
            <div>
                <h3>Connect with us</h3>
                <ul class='list'>
                    <li><a href="privacy.php">Privacy Policy</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <div>
                <h2>Join PJNews Now</h2>
                <p>Stay informed with credible news, in-depth reports, and engaging storytelling.</p>
                <a href="createaccount.php" class="btn btn-secondary">Join Now</a>
            </div>
            <div>
                <p>
                    Copyright PJNews &copy; 2023 - All Rights reserved.
                </p>
            </div>
        </div>
    </footer>
    <script src="main.js"></script>
</body>

</html>