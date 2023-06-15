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

    <title>Noontime show nina Tito, Vic & Joey sa TV5, 'This Is Eat!' ang title?</title>
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
                <a href="../entertainment-news.php">Entertainment</a>
            </li>
            <li>
                <a href="../sports-news.php">Sports</a>
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
                    <img src="../img/articles/entertainment5.png" alt="article">
                    <h1 class='l-heading'>Noontime show nina Tito, Vic & Joey sa TV5, 'This Is Eat!' ang title?
                    </h1>
                    <div class="meta">
                        <small>
                            <i class="fas fa-user"></i>Written by <b>PJNews</b> - June 15, 2023
                        </small>
                        <div class="category category-entertainment">Entertainment</div>
                    </div>
                    <p>
                        Ayaw pang kumpirmahin ng ilang sources ng PEP Troika kung totoo bang This Is Eat! ang magiging
                        title ng noontime show nina Tito Sotto, Vic Sotto, at Joey de Leon sa TV5.<br><br>

                        Marami pa raw pinagpipilian kaya hindi pa nila masabing ito na ang gagamiting title.<br><br>

                        Tinext din ng PEP Troika si former Senator Tito Sotto — “still contemplating” ang kanyang
                        sagot.<br><br>

                        Ibig bang sabihin nito ay nasa TAPE, Inc. na talaga ang pag-aari ng trademark ng Eat
                        Bulaga!?<br><br>

                        Tinanong uli namin si Tito Sen kung sa July 1 na ba sila magsisimula sa TV5. Ang dinig kasi
                        namin, magkakaroon ng presscon sa susunod na linggo.<br><br>

                        Ayon kay Tito Sen, kung hindi sa July 1, Sabado, ay maaaring sa July 3, Lunes, magsisimula ang
                        noontime show nila sa TV5.<br><br>

                        May ilan pa kaming narinig na magagandang balitang posibleng ihahatid ng TVJ, at iyan ang ilan
                        sa aabangan natin sa kanilang pagbabalik.<br><br>

                        Maaring dito sa bago nilang noontime show sa TV5 ay mapapanood natin ang mga sikat nilang games
                        at segments kagaya ng "Pinoy Henyo" at "Bawal Judgmental."<br><br>

                        Itong "Pinoy Henyo" ang isa sa inabangan namin sa revamped Eat Bulaga! sa GMA-7, pero hindi nila
                        malaro dahil naka-copyright pala ito kay Jeny Ferre na sumama sa grupo ng TVJ.<br><br>

                        Ano kaya ang magiging aksyon ng taga-TAPE, Inc dito? At ano na ang mangyayari sa It’s
                        Showtime?<br><br>

                        Ang gandang pag-aralan at pagtuunan ng pansin ngayon ang issue ng copyright. Buti at
                        napa-copyright ni Jeny ang sikat na segment na hanggang ngayon ay nilalaro sa parties.<br><br>

                        Parang ganito rin ang naging issue sa dance steps ng "Tala" ni Sarah Geronimo na pinagtatalunan
                        kung kanino — kay Teacher Georcelle ba o sa producer?
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