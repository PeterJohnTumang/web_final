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
                <a class="active" href="technology-news.php">Technology</a>
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
    <br><br><br>
    <section id="home-articles" class="py-2">
        <div class="container">
            <h2>TECHNOLOGY NEWS</h2>
            <div class="articles-container">
                <article class="card">
                    <img src="img/articles/technology1.jpg" alt="photo">
                    <div>
                        <div class="category category-technology">
                            Technology
                        </div>
                        <h3>
                            <a href="technology/technology1.php">Twitter CEO Linda Yaccarino shares first employee
                                memoh</a>
                        </h3>
                        <p>New Twitter CEO Linda Yaccarino sent her first employee memo on Monday explaining her
                            long-term objectives for the company. Interestingly, she echoed some of Elon Musk’s words
                            when describing these goals.
                        </p>
                    </div>
                </article>

                <article class="card">
                    <div class="category category-technology">
                        Technology
                    </div>
                    <h3>
                        <a href="technology/technology2.php">TIP seeks to develop energy storage system</a>
                    </h3>
                    <p>"The (BESS) project forms part of the deliverables of the Center. Once we have confirmed the
                        accuracy, reliability and efficiency of the batteries, we will proceed to developing an
                        extensive storage system with our partners," TIP Industry Relations Officer Therese Alejandrino
                        told the Philippine News Agency on Monday.</p>
                </article>

                <article class="card">
                    <img src="img/articles/technology3.jpg" alt="photo">
                    <div class="category category-technology">
                        Technology
                    </div>
                    <h3>
                        <a href="technology/technology3.php">PTRI to establish more bamboo textile fiber innovation
                            hubs</a>
                    </h3>
                    <p>The Knights will have their hands full on Thursday as they will compete in both the PBA D-League
                        Aspirants Cup and the 2023 FilOil EcoOil Preseason Cup, with both games having a significant
                        impact on their preseason campaign. </p>
                </article>

                <article class="card">
                    <div class="category category-technology">
                        Technology
                    </div>
                    <h3>
                        <a href="technology/technology4.php">Scientist wants center for polymers available across PH</a>
                    </h3>
                    <p>A Balik Scientist on Thursday expressed his wish that the Center for Sustainable Polymers (CSP)
                        -- currently available for use in Region 10 -- be made available to other regions by making it a
                        national center.
                        Balik Scientist Robert Malaluan said he is seeking the government's support on this initiative.
                    </p>
                    <img src="img/articles/technology4.jpg" alt="photo">
                </article>

                <article class="card">
                    <img src="img/articles/technology5.jpg" alt="photo">
                    <div class="category category-technology">
                        Technology
                    </div>
                    <h3>
                        <a href="technology/technology5.php">TAPI allots P16-M to help MSMEs commercialize
                            innovation</a>
                    </h3>
                    <p>The Technology Application and Promotion Institute (TAPI) has allocated an initial PHP16 million
                        for this year to aid the micro, small and medium enterprises (MSMEs) commercialize their
                        innovations.
                        "It (allocation) can be increased depending on the availability of funds. The amount of
                        assistance per project would depend on the results of evaluations by a committee," TAPI Director
                        Marion Ivy Decena told the Philippine News Agency Thursday.</p>
                </article>

                <article class="card">
                    <div class="category category-technology">
                        Technology
                    </div>
                    <h3>
                        <a href="technology/technology6.php">AI ‘won’t replace human creativity,’ says digital media
                            artist</a>
                    </h3>
                    <p>As concerns over potential risks posed by artificial intelligence (AI) continue to mount, a
                        prominent data artist has offered a refreshing perspective by saying that machines "will not
                        replace human creativity</p>
                </article>

                <article class="card">
                    <div>
                        <div class="category category-technology">
                            Technology
                        </div>
                        <h3>
                            <a href="technology/technology7.php">PCIEERD urges gov’t to use local air quality device</a>
                        </h3>
                        <p>The Philippine Council for Industry Energy and Emerging Technology Research and Development
                            (PCIEERD) is urging the government to use a locally-developed air quality monitoring device
                            prior to issuing Environmental Compliance Certificate (ECC) to industries.</p>
                    </div>
                    <img src="img/articles/technology7.jpg" alt="photo">
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