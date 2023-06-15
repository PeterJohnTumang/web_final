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

    <title>De Jesus hopes to bring winning experience, relentlessness to Gilas | PJNews</title>
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
                    <img src="../img/articles/sports6.png" alt="article">
                    <h1 class='l-heading'>De Jesus hopes to bring winning experience, relentlessness to Gilas</h1>
                    <div class="meta">
                        <small>
                            <i class="fas fa-user"></i>Written by <b>PJNews</b> - June 14, 2023
                        </small>
                        <div class="category category-sports">Sports</div>
                    </div>
                    <p>
                        Vanessa de Jesus will finally don the national team colors. <br><br>

                        After officially announcing her commitment to the Philippine women’s national basketball team,
                        Duke University guard de Jesus is hoping that she will be able to bring her winning experience
                        to the squad as they compete in the FIBA Women’s Asia Cup in Australia.<br><br>

                        "I've always been a winner since high school," said the 21-year-old in an online press
                        conference on Tuesday. "I’ve won state championships, I’ve won in AAU, and I think that
                        experience and the relentlessness to win is something that I can bring to the table." <br><br>

                        "And just competing and always giving it my all is something I value about my skillset and hope
                        to bring to the team," she added.<br><br>

                        As a floor general, De Jesus shared that she already has an idea of how the Pinay hoopers play,
                        and it will now be up to her to take on the task of adjusting and contributing to what the team
                        needs. <br><br>

                        “They do a lot of ball-screen games, they like to play fast, and they’re a very tough,
                        hard-nosed team which is something I like. They love to compete and love to always put it out
                        there so I just hope to be a part of it and bring what I bring to the table and hopefully, it’ll
                        be a good time out there”, she said. <br><br>

                        To achieve this will be a challege, but De Jesus knows how she can insert herself with the team
                        as she joins head coach Patrick Aquino and the rest of the Gilas Women’s squad later this
                        week.<br><br>

                        “Chemistry is so important, building relationships on and off the court,” she said. So I’m gonna
                        do everything I can to hang out with them as much as I can. And in practice, just learning about
                        my teammates. How do they play? What spots they like, that’s something I pride myself on, just
                        being able to understand my teammates and as a point guard, knowing how to help them become the
                        best they can,” she explained.<br><br>

                        “It’s just using that quality time to get to know them as a person and as a player I think will
                        help me build that chemistry before we start playing,” she added. <br><br>

                        Aside from winning, the 5-foot-8 guard also hopes that the experience of suiting up for the
                        Philippines will help her as she continues to build her dreams as a player.<br><br>

                        “Growing as a leader – It’s something that I always try to get better at and hopefully bring
                        back here, coming back to Duke,” she said. <br><br>

                        “As a player, just the pace of the whole competition is a different level, and hoping to learn
                        that style of play and compete with some of the best players in the world, I hope it will get me
                        stronger and smarter.”<br><br>

                        As for her commitment to the program, De Jesus revealed that it is for the long run. <br><br>

                        “As long as the time works, I’m always excited to play and represent my culture and my family so
                        this is not the last of me you guys will see for sure,” she explained. <br><br>

                        Gilas will be facing Australia on June 26, and also in their list of assignments in the Group
                        stage are Japan and Chinese Taipei as they look to book a ticket in the Paris 2024 Olympic
                        Qualifying Tournament.<br><br>

                        The FIBA Women's Asia Cup runs from June 26 to July 2.
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