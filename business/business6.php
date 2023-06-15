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

    <title>BSP unlikely to match Fed’s pause if inflation stays high | PJNews</title>
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
                <a href="sports-news.php">Sports</a>
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
                    <img src="../img/articles/business6.jpg" alt="article">
                    <h1 class='l-heading'>BSP unlikely to match Fed’s pause if inflation stays high</h1>
                    <div class="meta">
                        <small>
                            <i class="fas fa-user"></i>Written by <b>PJNews</b> - June 15, 2023
                        </small>
                        <div class="category category-business">Business</div>
                    </div>
                    <p>
                        The Philippines’ monetary policy will unlikely match the US Federal Reserve’s move to pause rate
                        action if consumer price growth in the country stays high. <br><br>

                        That was the assessment of Bangko Sentral ng Pilipinas Deputy Governor Francisco Dakila Jr. in
                        the Marcos Jr. administration’s economic briefing to Singapore’s business community on
                        Thursday.<br><br>

                        “Even if the Fed decides to pause from its policy tightening, which it did this morning, we may
                        not move in complete lockstep if the domestic inflation picture warrants a different response,”
                        he said.<br><br>

                        For context, painful inflation has softened after soaring to 14-year highs towards the end of
                        2022.<br><br>

                        The policy rate is now at 6.25% after the BSP hiked it by a total of 425 basis points to arrest
                        brutal price growth.<br><br>

                        That said, the BSP slammed the brakes on its aggressive rate hikes in the previous Monetary
                        Board meeting to let the economy feel the lagged impact of expensive borrowing costs.<br><br>

                        Dakila said notes from the policy meeting back in May hinted at the BSP’s hawkish tilt.<br><br>

                        Hawkishness aside, the central bank’s inflation outlook projects inflation falling back within
                        its 2-4% target range within the final quarter of 2023. That much has been floated by Governor
                        Felipe Medalla, as inflation could land below 4% by October or December, aided by deceleration
                        owing to the sheen of base effects.<br><br>

                        The BSP tried its best to rein inflation and investor expectations in 2022 by matching the US
                        Fed’s moves. In July, the central bank called an emergency policy meeting to hike interest rates
                        by 50 basis points to keep inflation in check.<br><br>

                        For Domini Velasquez, chief economist at China Banking Corp., the pressure to keep differences
                        between interest rates of the Philippines and the US small will steer policy decisions.<br><br>

                        “Given the Fed's recent guidance of possibly 2 more quarter-point hikes, we think the BSP may be
                        forced to hike at least one more time just to maintain sufficient interest rate differentials,”
                        she said in a Viber message.<br><br>

                        Velasquez noted that this did not indicate a shift in the decelerating inflation outlook.
                        “Instead, they will likely hike to prevent capital flight and unwarranted depreciation of the
                        peso. We saw this happen last year when the peso depreciated to 59.00 per USD,” she
                        added.<br><br>

                        Even then, Velasquez expects the BSP will not preempt a hike ahead of their meeting this
                        month.<br><br>

                        Jun Neri, lead economist at the Bank of the Philippine Islands, said the BSP hike could still
                        pull a hike if inflation turns sideways.<br><br>

                        “While many are hoping BSP is done hiking, we really can't rule out additional rate hikes should
                        domestic inflation bounce back or if the Federal Reserve hikes some more later this year,” he
                        said in a Viber message.<br><br>

                        <b>Softening inflation? </b> <br>

                        Dakila pointed out in his Thursday morning presentation that easing inflation patterns are
                        beginning to seep into other sectors of the economy.<br><br>

                        Consumer price growth has slowed down for the fourth straight month in May pointing to the deft
                        hand of monetary policy to tame inflation. Inflation slowed down to 6.1% in May, slower compared
                        to preceding months but still moved faster compared to the 5.4% recorded a year ago.<br><br>

                        Government data in May showed prices of certain commodities, such as food, and services, were
                        easing, but not at a pace that would ease consumer burden. Data from the Philippine Statistics
                        Authority revealed in May, prices of certain food products such as rice, vegetables and milk
                        went down across the country.<br><br>

                        Utility costs remain sticky, however, as rent and water posted upticks in May.<br><br>

                        Core inflation, computed without volatile items such as fuel, remained high. In May, it amounted
                        to 7.7%, slightly lower compared to the 7.9% tallied in the preceding month. To this end, Neri
                        stood in contrast with Dakila’s view.<br><br>

                        “Core inflation remains close to 8% seems to suggest that it hasn't spread much yet and the risk
                        of a rebound still seems high at this point. The declines have been seen mostly in food and
                        energy,” he said.<br><br>

                        Economic managers even kept targets unchanged in their meeting last week. Their projections
                        already accounted for risks posed by El Niño, which could drag agriculture production as it has
                        done so before.<br><br>

                        A dip in production within the farm sector, as well as persistent supply chain disruptions,
                        could accelerate consumer price growth and chip away at growth. That said, Velasquez agreed with
                        Dakila’s assessment.<br><br>

                        “We're seeing inflation now moving to target by October (instead of November). Average inflation
                        will also likely be at a lower 5.5% aligned with BSP's latest projection,” she added.
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