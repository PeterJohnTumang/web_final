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

    <title>Marcos to nat’l agencies: Cover 90 days of relief aid to Mayon evacuees | PJNews</title>
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
            <a href="">
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
                    <img src="../img/articles/politics3.jpg" alt="article">
                    <h1 class='l-heading'>Marcos to nat’l agencies: Cover 90 days of relief aid to Mayon evacuees</h1>
                    <div class="meta">
                        <small>
                            <i class="fas fa-user"></i>Written by <b>PJNews</b> - June 14, 2023
                        </small>
                        <div class="category category-politics">Politics</div>
                    </div>
                    <p>
                        President Ferdinand Marcos Jr. ordered national agencies on Wednesday to cover 90 days of relief
                        assistance to Mayon evacuees, which is the estimated maximum period of unrest of the volcano, to
                        relieve the burden on local government units (LGUs) responding to the disaster. <br><br>

                        “Let us be prepared to take as much of the load as soon as possible off of the local government
                        units para naman mayroon silang – malay natin magkabagyo pa, may mangyari pa, para mayroon
                        silang reserba pa. Hindi natin uubusin ‘yung kanilang quick response fund, number one,” Marcos
                        Jr. said during a situation briefing at the Albay Astrodome in Legazpi City.<br><br>

                        “Number two, we should use as a working number: a minimum of 45 days. The 45 days to 90 days
                        comes from both the science of DOST and the experience of the locals. Noong tinatanong natin sa
                        kanila ‘usually papaano ito?’ Iyon na nga, 45 to 90 days. Kaya’t iyon ang gagamitin natin na
                        working number,” he added.<br><br>

                        During the meeting, Social Welfare Secretary Rex Gatchalian informed the President that his
                        department already dispatched 153,000 food packs for the 90 day cycle for Albay in response to
                        the present crisis.<br><br>

                        Prior to the briefing, Marcos Jr. visited the Guinobatan Community College evacuation center to
                        assess the condition of the affected families and also led the distribution of government
                        assistance.<br><br>

                        A report from the Office of Civil Defense (OCD) in the Bicol Region said the Department of
                        Social Welfare and Development, Philippine Red Cross, Ang Probinsyano Partylist, LGUs, private
                        groups and non-government organizations have so far provided a total of P29.2 million worth of
                        assistance to the evacuees.<br><br>

                        The OCD also said it sent both food and non-food items, and water, sanitation and health
                        equipment to the province.<br><br>

                        The relief items include 3,200 sacks of rice, 320 rolls of sakoline, 1,101 hygiene kits, 424 OCD
                        family packs and one water filtration vehicle to be deployed by the provincial government to
                        affected localities.<br><br>

                        There are a total of 4,400 families or 15,676 individuals displaced by the disaster, mostly from
                        Albay’s seven out of 18 municipalities and cities: Camalig, Ligao City, Daraga, Guinobatan,
                        Malilipot, Santo Domingo, and Tabaco City.<br><br>

                        Of the total number of displaced families and individuals, 4,215 families or 15,017 persons have
                        sought shelter in 22 evacuation centers, while 185 families or 659 persons are temporarily
                        residing elsewhere, the OCD said.<br><br>

                        The agency also reported that 120 livestock, including carabaos, cattle, and goats, were
                        relocated from danger zones in the municipalities of Daraga and Malilipot.<br><br>

                        Mayon is currently under Alert Level 3.
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