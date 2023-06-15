<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $email = $_POST['email'];

    $sql = "INSERT INTO `subscription` (email) VALUES ('$email')"; 
    $result = mysqli_query($con, $sql);
    #if else
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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link rel="stylesheet" href="./CSS/style.css" />
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="./CSS/mobile.css" />
    <link href="https://fonts.googleapis.com/css?family=Lato|Staatliches&display=swap" rel="stylesheet" />
    <link rel="shortcut icon" type="image/x-icon" href="img/icon.png" />
    <script src="https://kit.fontawesome.com/85a5fdd30e.js" async></script>

    <title>About Us | PJNews</title>
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
                <img src="img/pjnews-logo.png" alt="GTCoding Logo">
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
    <br><br>

    <section id="about">
        <div class="container">
            <div class="page-container">
                <article class="card">
                    <h1 class="l-heading">About Us</h1>
                    <p>
                        At PJNews, we are passionate about delivering high-quality journalism and providing our audience
                        with the information they need to navigate the world around them. As one of the country's
                        leading digital brands in journalism, we strive to be a top destination for a wide range of
                        content, covering social, political, business, sports, entertainment, and lifestyle news.
                        Our award-winning newsroom is dedicated to delivering breaking news with credibility and
                        context, ensuring our audience stays informed and up-to-date. We go beyond the headlines,
                        offering in-depth explanatory reports that delve into complex issues, providing valuable
                        insights and analysis.
                    </p>
                    <p>
                        But we don't stop at facts and analysis alone; we believe in the power of storytelling. Through
                        engaging narratives, we aim to captivate our readers, helping them connect with the stories and
                        issues that matter. Our multimedia approach combines text, images, videos, and interactive
                        elements to bring stories to life and create a truly immersive experience.
                        At PJNews, our mission is clear: to help our audience make well-informed decisions and foster a
                        deeper understanding of the events and issues shaping our world. We invite you to join us on
                        this journey, as we continue to deliver credible news, meaningful stories, and insightful
                        perspectives.
                        <br><br><br><br><br><br>
                    </p>
                </article>

                <aside class="card bg-primary">
                    <h2>Join PJNews Now</h2>
                    <p>
                        PJNews is a renowned digital brand in journalism, delivering credible and timely news across
                        various categories. We provide in-depth reports, engaging storytelling, and real-time coverage
                        to empower our audience with well-informed insights.
                    </p>
                    <a href="createaccount.php" class="btn btn-dak btn-block">Join Now</a>
                </aside>
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