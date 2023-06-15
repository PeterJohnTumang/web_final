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

    <title>Denver Nuggets make history, sweep Los Angeles Lakers to secure NBA finals berth | PJNews</title>
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
                    <img src="../img/articles/sports1.png" alt="article">
                    <h1 class='l-heading'>Denver Nuggets make history, sweep Los Angeles Lakers to secure NBA finals
                        berth</h1>
                    <div class="meta">
                        <small>
                            <i class="fas fa-user"></i>Written by <b>PJNews</b> - May 24, 2023
                        </small>
                        <div class="category category-sports">Sports</div>
                    </div>
                    <p>In an electrifying showdown at the Crypto.com Arena, the Denver Nuggets pulled off a stunning
                        victory over the Los Angeles Lakers, booking their spot in the NBA Finals with a sensational
                        sweep of the Western Conference Finals.<br><br>

                        The Nuggets’ 113-111 triumph in Game 4 on Tuesday May 23, Philippine Time sent shockwaves
                        through the basketball world, as they toppled the mighty Lakers and ended their inspiring
                        playoff run.<br><br>

                        With just 51.2 seconds remaining on the clock, the tension reached its peak. The Nuggets’ Nikola
                        Jokic, the heart and soul of his team, seized the moment, propelling himself past the Lakers’
                        double team and executing a flawless layup that would become the winning basket. As the ball
                        gracefully swished through the net, the Nuggets surged ahead, leaving their opponents in
                        disarray.<br><br>

                        LeBron James, the Lakers’ talisman, attempted to orchestrate a comeback, desperately vying to
                        extend the game into overtime. However, fate had other plans. James misfired a challenging
                        jumper as the shot clock expired, and in a last-ditch effort, he saw his layup attempt blocked
                        by the relentless Aaron Gordon as the final seconds ticked away, sealing the Lakers’
                        fate.<br><br>

                        Jokic’s astounding performance showcased his immense versatility and unwavering determination.
                        The Serbian powerhouse delivered a mesmerizing triple-double, recording 30 points, 14 rebounds,
                        13 assists, three blocks, and one steal. This masterclass from Jokic propelled the Nuggets to
                        their maiden appearance in the championship round, etching their name in the annals of franchise
                        history.<br><br>

                        Jamal Murray, a force to be reckoned with, provided ample support with his impressive
                        performance, contributing 25 points, three rebounds, five assists, two steals, and one block.
                        Aaron Gordon, displaying his formidable skill set, added 22 points, six rebounds, five assists,
                        and two blocks, further solidifying the Nuggets’ dominance.<br><br>

                        Despite the Lakers’ valiant efforts, led by LeBron James’ magnificent display, their Cinderella
                        story came to an abrupt end. James exhibited his trademark brilliance with an astonishing 40
                        points, 10 rebounds, nine assists, and two steals. Anthony Davis, the Lakers’ powerhouse, also
                        fought valiantly, notching 21 points, 14 rebounds, one assist, three blocks, and one steal.
                        However, their combined efforts were not enough to overcome the resilient Nuggets.<br><br>

                        The Lakers’ extraordinary postseason journey, defying all odds as the seventh seed and
                        triumphing in the play-in tournament, captivated fans worldwide. However, the Nuggets’ tenacity
                        and skill proved insurmountable, ending the Lakers’ aspirations of reaching the NBA Finals once
                        again.
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