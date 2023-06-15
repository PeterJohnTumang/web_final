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
                <a class="active" href="index.php">Home</a>
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

            <div id="search-icon">
                <i class="fas fa-search"></i>
            </div>
            </li>
        </ul>
    </nav>

    <div id="searchbox">
        <input type="text" placeholder="Search Here">
    </div>

    <header id='showcase'>
        <div class="container">
            <div class="showcase-container">
                <div class="showcase-content">
                    <div class="category category-sports">
                        Sports
                    </div>
                    <h1>Denver Nuggets make history, sweep Los Angeles Lakers to secure NBA finals berth</h1>
                    <p>In an electrifying showdown at the Crypto.com Arena, the Denver Nuggets pulled off a stunning
                        victory over the Los Angeles Lakers, booking their spot in the NBA Finals with a sensational
                        sweep of the Western Conference Finals.</p>
                    <a href="sports/sports1.php" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
    </header>

    <section id="home-articles" class="py-2">
        <div class="container">
            <h2>TRENDING NOW</h2>
            <div class="articles-container">
                <article class="card">
                    <img src="img/articles/technology1.jpg" alt="photo">
                    <div>
                        <div class="category category-technology">
                            Technology
                        </div>
                        <h3>
                            <a href="technology/technology1.php">Twitter CEO Linda Yaccarino shares first employee
                                memo</a>
                        </h3>
                        <p>New Twitter CEO Linda Yaccarino sent her first employee memo on Monday explaining her
                            long-term objectives for the company. Interestingly, she echoed some of Elon Musk’s words
                            when describing these goals.
                        </p>
                    </div>
                </article>

                <article class="card bg-dark">
                    <div class="category category-politics">
                        Politics
                    </div>
                    <h3>
                        <a href="politics/politics1.php">Marcos OKs pilot testing of ‘food stamp’ program</a>
                    </h3>
                    <p>President Ferdinand Marcos Jr. has approved the pilot run of the government’s food stamp program,
                        which will be financed by grants amounting to US$3 million, the Department of Social Welfare and
                        Development (DSWD) said Tuesday.</p>
                </article>

                <article class="card">
                    <img src="img/articles/business1.jpg" alt="photo">
                    <div class="category category-business">
                        Business
                    </div>
                    <h3>
                        <a href="business/business1.php">Caritas Philippines, Unilab strengthen partnership</a>
                    </h3>
                    <p>Caritas Philippines bears witness to this, being fully aware of the realities on the ground
                        especially in farflung areas of the country. </p>
                </article>

                <article class="card">
                    <div class="category category-health">
                        Health
                    </div>
                    <h3>
                        <a href="health/health1.php">DOH eyes to tap ‘board eligibles’ to solve nurse shortage</a>
                    </h3>
                    <p>The Department of Health (DOH) is looking into tapping "board eligibles" to solve the shortage of
                        nurses in public hospitals.</p>
                    <img src="img/articles/health1.jpg" alt="photo">
                </article>

                <article class="card">
                    <img src="img/articles/environment1.jpg" alt="photo">
                    <div class="category category-environment">
                        Environment
                    </div>
                    <h3>
                        <a href="environment/environment1.php">COA’s new rules to help implement effective climate
                            projects: CCC</a>
                    </h3>
                    <p>The Climate Change Commission (CCC) has expressed optimism that the Commission on Audit's (COA)
                        issuance of new regulatory guidelines would result in the effective implementation of
                        climate-related projects and programs.</p>
                </article>

                <article class="card bg-dark">
                    <div class="category category-entertainment">
                        Entertainment
                    </div>
                    <h3>
                        <a href="entertainment/entertainment1.php">Andrea Brillantes after split from Ricci Rivero:
                            Still healing, but doing okay</a>
                    </h3>
                    <p>Breaking her silence on her split with basketball player Ricci Rivero, Andrea Brillantes
                        confessed that she has not fully healed from heartbreak given the fact that she loved someone
                        with all her heart.</p>
                </article>

                <article class="card">
                    <div>
                        <div class="category category-sports">
                            Sports
                        </div>
                        <h3>
                            <a href="sports/sports2.php">Poomsae ace Ninobla has double work up for Asian Games</a>
                        </h3>
                        <p>Jocel Lyn Ninobla gained prominence as poomsae queen in the region after a third consecutive
                            gold medal in the Southeast Asian (SEA) Games last month in Cambodia.</p>
                    </div>
                    <img src="img/articles/sports2.jpg" alt="photo">
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