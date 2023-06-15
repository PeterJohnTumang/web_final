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
                <a class="active" href="politics-news.php">Politics</a>
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
    <br><br><br>
    <section id="home-articles" class="py-2">
        <div class="container">
            <h2>POLITICS NEWS</h2>
            <div class="articles-container">
                <article class="card">
                    <img src="img/articles/politics1.jpg" alt="photo">
                    <div>
                        <div class="category category-politics">
                            Politics
                        </div>
                        <h3>
                            <a href="politics/politics1.php">Marcos OKs pilot testing of ‘food stamp’ program</a>
                        </h3>
                        <p>President Ferdinand Marcos Jr. has approved the pilot run of the government’s food stamp
                            program, which will be financed by grants amounting to US$3 million, the Department of
                            Social Welfare and Development (DSWD) said Tuesday.
                        </p>
                    </div>
                </article>

                <article class="card">
                    <div class="category category-politics">
                        Politics
                    </div>
                    <h3>
                        <a href="politics/politics2.php">Marcos assures continued gov’t aid to Mayon victims</a>
                    </h3>
                    <p>"President Ferdinand Marcos Jr. has assured families affected by the ongoing Mayon Volcano unrest
                        that the national government is always ready to meet their needs while they wait for the
                        volcanic activity to subside.</p>
                </article>

                <article class="card">
                    <img src="img/articles/politics3.jpg" alt="photo">
                    <div class="category category-politics">
                        Politics
                    </div>
                    <h3>
                        <a href="politics/politics3.php">Marcos to nat’l agencies: Cover 90 days of relief aid to Mayon
                            evacuees</a>
                    </h3>
                    <p>President Ferdinand Marcos Jr. ordered national agencies on Wednesday to cover 90 days of relief
                        assistance to Mayon evacuees, which is the estimated maximum period of unrest of the volcano, to
                        relieve the burden on local government units (LGUs) responding to the disaster.</p>
                </article>

                <article class="card">
                    <div class="category category-politics">
                        Politics
                    </div>
                    <h3>
                        <a href="politics/politics4.php">Marcos conducts aerial inspection of Mt. Mayon, visit
                            evacuation center in Guinobatan</a>
                    </h3>
                    <p>President Ferdinand Marcos Jr. on Wednesday took an aerial inspection of Mayon Volcano, which was
                        placed on Alert Level 3 on Thursday due to high level of unrest.
                    </p>
                    <img src="img/articles/politics4.jpg" alt="photo">
                </article>

                <article class="card">
                    <img src="img/articles/politics5.jpg" alt="photo">
                    <div class="category category-politics">
                        Politics
                    </div>
                    <h3>
                        <a href="politics/politics5.php">‘You can be VP’: Sara Duterte brings 8th grader to
                            Brunei-Singapore trip</a>
                    </h3>
                    <p>The country’s veep has brought along an 8th grader from Bacolod City to her latest travel to
                        Brunei and Singapore. Naomi, a 14 year old student of the Mariano G. Medalla Integrated School,
                        has been chosen to be part of the “You can be VP” project of the vice president.</p>
                </article>

                <article class="card">
                    <div class="category category-politics">
                        Politics
                    </div>
                    <h3>
                        <a href="politics/politics6.php">Profiling tool: Remulla wants AI to identity human trafficking
                            victims</a>
                    </h3>
                    <p>Justice Secretary Jesus Crispin Remulla is considering using artificial intelligence (AI) in
                        intercepting human trafficking victims at the airports.</p>
                </article>

                <article class="card">
                    <div>
                        <div class="category category-politics">
                            Politics
                        </div>
                        <h3>
                            <a href="politics/politics7.php">Free ba sa France? Macron invites Marcos anew for state
                                visit</a>
                        </h3>
                        <p>The French government has restated its invitation for President Ferdinand Marcos Jr. to
                            conduct a state visit to France as it congratulated the Philippines on its 125th
                            Independence Day anniversary.</p>
                    </div>
                    <img src="img/articles/politics7.jpg" alt="photo">
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