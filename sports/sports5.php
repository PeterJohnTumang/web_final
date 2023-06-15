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

    <title>More 3x3 teams better for PH's Olympic hopes, TNT’s Belen says | PJNews</title>
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
                <a href=" ../entertainment-news.php">Entertainment</a>
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
                    <img src="../img/articles/sports5.png" alt="article">
                    <h1 class='l-heading'>More 3x3 teams better for PH's Olympic hopes, TNT’s Belen saysy</h1>
                    <div class="meta">
                        <small>
                            <i class="fas fa-user"></i>Written by <b>PJNews</b> - June 15, 2023
                        </small>
                        <div class="category category-sports">Sports</div>
                    </div>
                    <p>
                        TNT Triple Giga came a few possessions short of punching a ticket to the FIBA 3x3 World Tour
                        2023 Macau Masters, which would have put them in the same territory as Chooks, the country’s de
                        facto 3x3 club.<br><br>

                        Bannered by Almond Vosotros, Ping Exciminiano, Gryann Mendoza, and import Ulrich Odou, TNT only
                        ran out of time in a slim 18-20 loss to Chinese powerhouse Futian last weekend in the FIBA 3x3
                        Penang Challenger in Malaysia, the Level 9 qualifier for the Level 10 Masters event.<br><br>

                        Though they fell short, their performance is seen as a step in the right direction, as the
                        Philippines needs more teams in the FIBA 3x3 professional circuit to boost its hopes of making
                        the sport’s Olympic Qualifying Tournament for Paris 2024.<br><br>

                        “Ayun ‘yung kailangan natin. If you see the rosters and teams in the pro circuit, tatlo, apat
                        ‘yung galing sa Serbia, dalawa galing sa Belgium, ang daming team from Mongolia, Japan, so why
                        not?” TNT Triple Giga head coach Mau Belen said on Tuesday night shortly after arriving in
                        Manila from Kuala Lumpur.<br><br>

                        “Hindi imposible na maraming team na makapasok from the Philippines, ‘diba? The more we are
                        there [in the Masters], the more chances there are to move up in the rankings. ‘Yun talaga ‘yung
                        goal. That’s our main goal.”<br><br>

                        The Philippines currently ranks 25th in the men’s federation rankings with 847,522 points, and
                        will need to climb up to the top 20 to assure itself of an Olympic Qualifying Tournament
                        slot.<br><br>

                        “Kaya namin ‘to ginagawa, it’s not just for ourselves, it’s for experience, for our players, our
                        ballclub, but at the same time, we have a deadline by November to collect all the points for the
                        Olympic Qualifiers,” Belen added, mentioning the cutoff date for the rankings later this
                        year.<br><br>

                        TNT’s inspiring run in Malaysia saw them stun the United States’ NY Harlem in the quarterfinals,
                        21-18. It previously lost to eventual champion Beijing by just two as well, 19-21 in the group
                        stage.<br><br>

                        “It’s very humbling. We went there, and we didn’t know what to expect. Just to try and see kung
                        okay kami as a team. We over-exceeded our expectations sa sarili namin, and for that, I am so
                        proud,” Belen said.<br><br>

                        “If people just waited for the results, they might think, ‘yun talaga ‘yung results na dapat sa
                        kanila, but if you watch the game, it’s a different feeling. All the messages we received from
                        people were very touching, nakakataba ng loob. Going into Day 2, we tried our best talaga to
                        compete and finish the task.”<br><br>

                        Vosotros was undoubtedly the hero for TNT throughout the two-day tilt, scoring a total of 38
                        points, just one shy of tying tournament top scorer Karlis Lasmanis – the world’s fourth-ranked
                        3x3 player.<br><br>

                        “‘Yung experience, sobrang ganda. Sobrang makakatulong sa Pilipinas, especially sa team namin na
                        nakakuha kami ng ganoong experience, playing against the best teams and the best players in the
                        world,” Vosotros said.<br><br>

                        Due to his exploits, the 5-foot-11 guard earned 56,730 ranking points overnight and leapfrogged
                        to second overall in the Philippine men’s rankings, just behind Chooks’ Mac Tallo.<br><br>

                        But more than the individual accomplishments, Vosotros said helping the country reach its
                        immediate goals in the 3x3 scene is more important.<br><br>

                        “Every time we play sa national team, or we represent our country, talagang iniisip namin ‘yung
                        Philippines na umabot tayo hanggang Olympics. ‘Yung World Cup, first, mag-qualify sa World Cup,
                        and then mag-qualify sa Olympics. I think ‘yun yung mas importante,” he said.<br><br>

                        Whether it’s Chooks or TNT participating in a Challenger or a Masters, more Filipino teams in
                        top-level 3x3 team competitions will benefit the country's Olympic hopes. Belen knows this, and
                        her group is just happy to contribute.<br><br>

                        “That’s fantastic [to have multiple Philippine teams compete]. Nine years ago, mayroon pang
                        Manila North, Manila South, they were competing heavily in the 3x3 scene,” she said.<br><br>

                        “I hope with the effort we’re doing, we could move up the ladder and see kung magku-qualify kami
                        for the Olympic Qualifiers.”
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