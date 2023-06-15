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
                <a class="active" href="business-news.php">Business</a>
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
    <br><br><br>
    <section id="home-articles" class="py-2">
        <div class="container">
            <h2>BUSINESS NEWS</h2>
            <div class="articles-container">
                <article class="card">
                    <img src="img/articles/business1.jpg" alt="photo">
                    <div>
                        <div class="category category-business">
                            Business
                        </div>
                        <h3>
                            <a href="business/business1.php">Caritas Philippines, Unilab strengthen partnership</a>
                        </h3>
                        <p>Caritas Philippines bears witness to this, being fully aware of the realities on the ground
                            especially in farflung areas of the country.
                        </p>
                    </div>
                </article>

                <article class="card">
                    <div class="category category-business">
                        Business
                    </div>
                    <h3>
                        <a href="business/business2.php">PSE amends by-laws to tighten quorum for biz transaction, board
                            decisions | PJNews</a>
                    </h3>
                    <p>The Philippine Stock Exchange pitched a set of amendments to its by-laws, top-billed by
                        increasing quorum when firms decide on a course of action.</p>
                </article>

                <article class="card">
                    <img src="img/articles/business3.jpg" alt="photo">
                    <div class="category category-business">
                        Business
                    </div>
                    <h3>
                        <a href="business/business3.php">Remittances climb in April despite headwindss</a>
                    </h3>
                    <p>Money sent home by overseas Filipinos to their families rose in April, despite recession concerns
                        plaguing developed economies.Data released by the Bangko Sentral ng Pilipinas on Thursday showed
                        that remittances coursed through banks grew 3.7% year-on-year to $2.48 billion in April.</p>
                </article>

                <article class="card">
                    <div class="category category-business">
                        Business
                    </div>
                    <h3>
                        <a href="business/business4.php">BSP slaps P1-M fine to BPI over Family bank mergern</a>
                    </h3>
                    <p>The Bangko Sentral ng Pilipinas slapped a P1 million fine on the Bank of the Philippine Islands
                        for the disposal of treasury shares that came as a result of its merger with BPI Family Savings
                        Bank.
                    </p>
                    <img src="img/articles/business4.jpg" alt="photo">
                </article>

                <article class="card">
                    <img src="img/articles/business5.jpg" alt="photo">
                    <div class="category category-business">
                        Business
                    </div>
                    <h3>
                        <a href="business/business5.php">‘Tan conglomerate AGI pumps up capex in bid to carve lifestyle
                            empire</a>
                    </h3>
                    <p>Philippines — Alliance Global Group, Inc. announced it would be increasing capital expenditures
                        this year, emphasizing the need to sustain growth momentum across its international and global
                        operations.</p>
                </article>

                <article class="card">
                    <div class="category category-business">
                        Business
                    </div>
                    <h3>
                        <a href="business/business6.php">BSP unlikely to match Fed’s pause if inflation stays high</a>
                    </h3>
                    <p>The Philippines’ monetary policy will unlikely match the US Federal Reserve’s move to pause rate
                        action if consumer price growth in the country stays high.</p>
                </article>

                <article class="card">
                    <div>
                        <div class="category category-business">
                            Business
                        </div>
                        <h3>
                            <a href="business/business7.php">Swedish inflation dips, Beyonce blamed for high prices</a>
                        </h3>
                        <p>Swedish inflation dipped under 10 percent in May, official statistics showed Wednesday, but
                            was still higher than expected with some analysts suggesting superstar Beyonce had tipped
                            the scales.</p>
                    </div>
                    <img src="img/articles/business7.jpg" alt="photo">
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