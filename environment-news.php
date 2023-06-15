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
                <a class="active" href="environment-news.php">Environment</a>
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
            <h2>ENVIRONMENT NEWS</h2>
            <div class="articles-container">
                <article class="card">
                    <img src="img/articles/environment1.jpg" alt="photo">
                    <div>
                        <div class="category category-environment">
                            Environment
                        </div>
                        <h3>
                            <a href="environment/environment1.php">COA’s new rules to help implement effective climate
                                projects: CCC</a>
                        </h3>
                        <p>The Climate Change Commission (CCC) has expressed optimism that the Commission on Audit's
                            (COA) issuance of new regulatory guidelines would result in the effective implementation of
                            climate-related projects and programs.
                        </p>
                    </div>
                </article>

                <article class="card">
                    <div class="category category-environment">
                        Environment
                    </div>
                    <h3>
                        <a href="environment/environment2.php">Greenpeace calls on DENR to scrap 'reprehensible' collab
                            with fossil fuel firm</a>
                    </h3>
                    <p>The Department of Environment and Natural Resources should scrap its partnership with Shell
                        Pilipinas Corp. and demand the fossil fuel company to pay reparations for contributing to the
                        climate crisis, an environmental group said Thursday.</p>
                </article>

                <article class="card">
                    <img src="img/articles/environment3.jpg" alt="photo">
                    <div class="category category-environment">
                        Environment
                    </div>
                    <h3>
                        <a href="environment/environment3.php">Vatican court hits climate activists with tough fines</a>
                    </h3>
                    <p>Two climate protesters who glued themselves to the base of an ancient sculpture in the Vatican
                        Museums have been ordered to pay damages of 28,000 euros ($30,250), activists said Tuesday.</p>
                </article>

                <article class="card">
                    <div class="category category-environment">
                        Environment
                    </div>
                    <h3>
                        <a href="environment/environment4.php">Climate disasters affect kids from 5.6 million poor
                            Filipino
                            families — group</a>
                    </h3>
                    <p>Children from 5.6 million low-income families in the Philippines are exposed to the worsening
                        impacts of climate change—a problem they will inherit even though they are least responsible for
                        it.</p>
                    <img src="img/articles/environment4.jpg" alt="photo">
                </article>

                <article class="card">
                    <img src="img/articles/environment5.jpg" alt="photo">
                    <div class="category category-environment">
                        Environment
                    </div>
                    <h3>
                        <a href="environment/environment5.php">Protected area designation, non-attainment area
                            guidelines for oil spill-hit VIP sought</a>
                    </h3>
                    <p>Environment advocates and locals sought for the declaration of the Verde Island Passage—the
                        marine corridor threatened by the oil spill in Oriental Mindoro—as a legislated protected area
                        on World Oceans Day.</p>
                </article>

                <article class="card">
                    <div class="category category-environment">
                        Environment
                    </div>
                    <h3>
                        <a href="environment/environment6.php">Green advocates, scientists urge Marcos to protect
                            Masungi's reforestation efforts</a>
                    </h3>
                    <p>Environmentalists, scientists and government officials appealed to President Ferdinand “Bongbong”
                        Marcos Jr. on Monday to protect the ecologically important Masungi Geopark Project and its
                        defenders.</p>
                </article>

                <article class="card">
                    <div>
                        <div class="category category-environment">
                            Environment
                        </div>
                        <h3>
                            <a href="environment/environment7.php">DENR reviews approved reclamation projects</a>
                        </h3>
                        <p>The Department of Environment and Natural Resources is reviewing the reclamation projects
                            that were permitted by the government to deepen its understanding of the ecological and
                            economic impacts of these activities, its chief said Monday.</p>
                    </div>
                    <img src="img/articles/environment7.jpg" alt="photo">
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