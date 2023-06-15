<?php
include '../connect.php';
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

    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" media='screen and (max-width: 768px)' href="../CSS/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato|Staatliches&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="../img/icon.png">
    <script src="https://kit.fontawesome.com/85a5fdd30e.js" async></script>

    <title>UP study shows birth control pills with lower hormone levels still effective | PJNews</title>
</head>

<body>
    <div id="slideout-menu">
        <ul>
            <li>
                <a href="../index.php">Home</a>
            </li>
            <li>
                <a href="../technology-news.php">Technology</a>
            </li>
            <li>
                <a href="../politics-news.php">Politics</a>
            </li>
            <li>
                <a href="../business-news.php">Business</a>
            </li>
            <li>
                <a href="../health-news.php">Health</a>
            </li>
            <li>
                <a href="../environment-news.php">Environment</a>
            </li>
            <li>
                <a href="../entertainment-news.php">Entertainment</a>
            </li>
            <li>
                <a href="../sports-news.php">Sports</a>
            </li>
            <input type="text" placeholder="Search Here">
            </li>
        </ul>
    </div>

    <nav>
        <div id="logo-img">
            <a href="#">
                <img src="../img/pjnews-logo.png" alt="PJNews Logo">
            </a>
        </div>
        <div id="menu-icon">
            <i class="fas fa-bars"></i>
        </div>
        <ul>
            <li>
                <a href="../index.php">Home</a>
            </li>
            <li>
                <a href="../technology-news.php">Technology</a>
            </li>
            <li>
                <a href="../politics-news.php">Politics</a>
            </li>
            <li>
                <a href="../business-news.php">Business</a>
            </li>
            <li>
                <a href="../health-news.php">Health</a>
            </li>
            <li>
                <a href="../environment-news.php">Environment</a>
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
    <section id="article">
        <div class="container">
            <div class="page-container">
                <article class="card">
                    <img src="../img/articles/health6.jpg" alt="article">
                    <h1 class='l-heading'>UP study shows birth control pills with lower hormone levels still effective
                    </h1>
                    <div class="meta">
                        <small>
                            <i class="fas fa-user"></i>Written by <b>PJNews</b> - May 6, 2023
                        </small>
                        <div class="category category-health">Health</div>
                    </div>
                    <p>
                        Using math, researchers found that estrogen-only contraceptives could work just as effectively
                        even if hormone doses were reduced by as much as 92% <br><br>

                        Hormones in contraceptive pills can be reduced by as much as 92% and still be effective,
                        mathematicians have found in a new study.<br><br>

                        In the study, where researchers analyzed the hormone levels of 23 women aged 20 to 34 with
                        regular menstrual cycles, it was found that estrogen-only contraceptives could work just as
                        effectively even if hormone doses were reduced by as much as 92%.<br><br>

                        As for progestrone-only contraceptives, hormone doses can be lowered by 43% and still have the
                        same effectivity, they found.<br><br>

                        The study was undertaken by University of the Philippines (UP) mathematics associate professor
                        Aurelio de los Reyes V and PhD mathematics graduate Brenda Lyn Gavina, along with their
                        collaborators Mette Olufsen of the North Carolina State University, Suzanne Lenhart of the
                        University of Tennessee, and Johnny Ottesen of the Roskilde University of Denmark.<br><br>

                        In the study, the researchers tracked natural hormone levels and the effect of hormones taken
                        through contraceptives through a modified menstrual cycle model they developed.<br><br>

                        Using math, they determined the lowest amount of hormones needed to prevent ovulation. Apart
                        from the finding that lower hormone dosages can still be effective, the researchers also found
                        that taking the pills before the tenth day of the menstrual cycle can be just as effective as a
                        daily dose in preventing pregnancy.<br><br>

                        “With the rapid development of new implants and injections providing continuous administration,
                        there is great potential to implement new treatment scheme minimizing dose,” the researchers
                        said. The study was published in the PLoS Computational Biology on April 13.<br><br>

                        UP professor De Los Reyes said that their study suggests an “effective and cost-efficient
                        hormonal contraceptive administration,” and contributes to a “longstanding objective” of safer
                        contraceptive through reducing the dosage of hormonal contraceptives.<br><br>

                        “We also hope to build on the current model to investigate reproductive health concerns in women
                        like polycystic ovarian syndrome (PCOS) and ovarian cysts. We would like to caution that our
                        model is not directly translatable to clinical setup (or actual patients) as of yet, but the
                        principles and its proof of concept could be potentially implemented to achieve safe and
                        cost-efficient contraception,” said De Los Reyes.<br><br>

                        Birth control pills are the most popular modern contraceptive method among women in the
                        Philippines as of 2022. However, some pill users have to deal with side effects like spotting,
                        bleeding, sore breasts, nausea, or headaches.<br><br>

                        According to a 2022 article from the Australian Prescriber journal, hormonal contraception is
                        also known to precipitate or perpetuate depression in some patients. Some older generations of
                        birth control pills that contain ethinylestradiol are linked to severe mood problems, while
                        newer generations containing physiological forms of estrogen may be more tolerable, with a
                        weaker link to mood problems.<br><br>

                        More than 8 million Filipinos used modern birth control methods in 2020, according to the
                        Philippine Commission on Population and Development.<br><br>

                        Reproductive health in the Philippines is a multidimensional issue, as adolescent pregnancy
                        remains prevalent, and not all women are empowered to make decisions over their own
                        bodies.<br><br>

                        The country’s reproductive health law, despite being passed over a decade ago, remains to have
                        gaps in its implementation, such as the rollout of comprehensive sexuality education.
                    </p>
                </article>
                <aside class="card bg-primary">
                    <h2>Join PJNews Now</h2>
                    <p>PJNews is a renowned digital brand in journalism, delivering credible and timely news across
                        various categories. We provide in-depth reports, engaging storytelling, and real-time coverage
                        to empower our audience with well-informed insights.</p>
                    <a href="../createaccount.php" class='btn btn-dak btn-block'>Join Now</a>
                </aside>
                <aside id="categories" class="card">
                    <h2>TRENDING NOW</h2>
                    <ul class="list">
                        <li><a href="../technology/technology1.php"><i class="fas fa-chevron-right"></i>Twitter CEO
                                Linda Yaccarino shares first employee memo</a></li>
                        <li><a href="../politics/politics1.php"><i class="fas fa-chevron-right"></i>Marcos OKs pilot
                                testing of
                                ‘food stamp’ program</a></li>
                        <li><a href="../business/business1.php"><i class="fas fa-chevron-right"></i>Caritas Philippines,
                                Unilab strengthen
                                partnership</a></li>
                        <li><a href="../health/health1.php"><i class="fas fa-chevron-right"></i>DOH eyes to tap ‘board
                                eligibles’ to solve
                                nurse shortage</a></li>
                        <li><a href="../environment/environment1.php"><i class="fas fa-chevron-right"></i>COA’s new
                                rules to help implement effective
                                climate projects: CCC</a></li>
                        <li><a href="../entertainment/entertainment1.php"><i class="fas fa-chevron-right"></i>Andrea
                                Brillantes after split from Ricci
                                Rivero: Still healing, but doing okay</a></li>
                        <li><a href="../sports/sports2.php"><i class="fas fa-chevron-right"></i>Poomsae ace Ninobla has
                                double work up for
                                Asiad</a></li>
                    </ul>
                </aside>
            </div>
        </div>
    </section>
    <footer id='main-footer' class='py-2'>
        <div class="container footer-container">
            <div>
                <img src="../img/pjnews-logodark.png" alt="PJNews Logo">
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
                    <li><a href="../privacy.php">Privacy Policy</a></li>
                    <li><a href="../about.php">About Us</a></li>
                    <li><a href="../contact.php">Contact</a></li>
                </ul>
            </div>
            <div>
                <h2>Join PJNews Now</h2>
                <p>Stay informed with credible news, in-depth reports, and engaging storytelling.</p>
                <a href="../createaccount.php" class="btn btn-secondary">Join Now</a>
            </div>
            <div>
                <p>
                    Copyright PJNews &copy; 2023 - All Rights reserved.
                </p>
            </div>
        </div>
    </footer>
    <script src="../main.js"></script>
</body>

</html>