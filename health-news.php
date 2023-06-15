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
                <a class="active" href="health-news.php">Health</a>
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
            <h2>HEALTH NEWS</h2>
            <div class="articles-container">
                <article class="card">
                    <img src="img/articles/health1.jpg" alt="photo">
                    <div>
                        <div class="category category-health">
                            Health
                        </div>
                        <h3>
                            <a href="health/health1.php">DOH eyes to tap ‘board eligibles’ to solve nurse shortage</a>
                        </h3>
                        <p>The Department of Health (DOH) is looking into tapping "board eligibles" to solve the
                            shortage of nurses in public hospitals.
                        </p>
                    </div>
                </article>

                <article class="card">
                    <div class="category category-health">
                        Health
                    </div>
                    <h3>
                        <a href="health/health2.php">BioNTech faces first German lawsuit over alleged COVID-19 vaccine
                            side effects</a>
                    </h3>
                    <p>BioNTech will go to court on Monday, June 12, to defend itself against a lawsuit from a German
                        woman who is seeking damages for alleged side effects of its COVID-19 vaccine, the first of
                        potentially hundreds of cases in the country.</p>
                </article>

                <article class="card">
                    <img src="img/articles/health3.jpg" alt="photo">
                    <div class="category category-health">
                        Health
                    </div>
                    <h3>
                        <a href="health/health3.php">Elon Musk’s Neuralink gets FDA approval for study of brain implants
                            in humans</a>
                    </h3>
                    <p>Elon Musk’s brain-implant company Neuralink on Thursday, May 25, said it had received a green
                        light from the US Food and Drug Administration (FDA) to kickstart its first-in-human clinical
                        study, a critical milestone after earlier struggles to gain approval.</p>
                </article>

                <article class="card">
                    <div class="category category-health">
                        Health
                    </div>
                    <h3>
                        <a href="health/health4.php">Social media could harm youth mental health, US Surgeon General
                            warns</a>
                    </h3>
                    <p>US Surgeon General Vivek Murthy says that while social media offers some benefits, there are
                        'ample indicators that social media could also harm children's well-being'
                    </p>
                    <img src="img/articles/health4.jpg" alt="photo">
                </article>

                <article class="card">
                    <img src="img/articles/health5.jpg" alt="photo">
                    <div class="category category-health">
                        Health
                    </div>
                    <h3>
                        <a href="health/health5.php">Wegovy, other weight loss drugs ‘no silver bullet,’ says WHO amid
                            obesity review</a>
                    </h3>
                    <p>The global health body is first revising guidelines for treating children and adolescents with
                        obesity, and will then update recommendations for adults, says Francesco Branca, WHO director of
                        nutrition and food safety</p>
                </article>

                <article class="card">
                    <div class="category category-health">
                        Health
                    </div>
                    <h3>
                        <a href="health/health6.php">UP study shows birth control pills with lower hormone levels still
                            effective</a>
                    </h3>
                    <p>Using math, researchers found that estrogen-only contraceptives could work just as effectively
                        even if hormone doses were reduced by as much as 92% </p>
                </article>

                <article class="card">
                    <div>
                        <div class="category category-health">
                            Health
                        </div>
                        <h3>
                            <a href="health/health7.php">WHO declares end to COVID global health emergency</a>
                        </h3>
                        <p>The World Health Organization's lifting of global health emergency is a major step towards
                            the end of the pandemic.
                        </p>
                    </div>
                    <img src="img/articles/health7.jpg" alt="photo">
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