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

    <title>Caritas Philippines, Unilab strengthen partnership | PJNews</title>
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
                    <img src="../img/articles/business1.jpg" alt="article">
                    <h1 class='l-heading'>Caritas Philippines, Unilab strengthen partnership</h1>
                    <div class="meta">
                        <small>
                            <i class="fas fa-user"></i>Written by <b>PJNews</b> - June 13, 2023
                        </small>
                        <div class="category category-business">Business</div>
                    </div>
                    <p>
                        Caritas Philippines bears witness to this, being fully aware of the realities on the ground
                        especially in farflung areas of the country. The humanitarian, development and advocacy arm of
                        the Catholic Bishops Conference of the Philippines is particular with its collaborative
                        undertakings, carefully choosing partners such as Unilab Inc., to ensure that aid will reach
                        Geographically Isolated and Disadvantaged Areas (Gida), from Ifugao to Sulu. <br><br>

                        “Caritas Philippines and Unilab have been working together on several initiatives. We share the
                        same principles and values in serving our fellow Filipinos who need it the most,” said Fr.
                        Antonio Labiao Jr., executive secretary of Caritas Philippines.<br><br>

                        Caritas Philippines and Unilab recently signed a memorandum of agreement in an effort to
                        strengthen their well-meaning partnership. Both hope as well that it would become a civil
                        society model in implementing joint humanitarian programs that seek to address the needs of the
                        most vulnerable communities in the country.<br><br>

                        “This formal signing of a memorandum is a documentation of our commitment, as well as proof of
                        our alliance for the next generation of leaders of our respective organizations. We are
                        developing a template on how a faith-based organization and private sector may complement each
                        other for a common goal,” added Labiao.<br><br>

                        <b>Feeding, vitamin supplementation program</b><br>

                        Malnutrition and stunting among babies and children are among the main concerns of Caritas in
                        the country. The Department of Health recently reported that at least 21.6 percent of infants
                        and toddlers in the Philippines are stunted, acknowledging this as a long-standing problem of
                        Filipinos.<br><br>

                        “Five years ago, we started working together with Unilab on several projects. The impact that we
                        have made recently on several farflung areas across the country through our feeding and vitamin
                        supplementation program helped address the severe malnutrition among the young,” revealed Bishop
                        Colin Bagaforo, national president of Caritas Philippines. “We initially targeted to reach out
                        to 100,000 young children but we have surpassed this number.”<br><br>

                        Unilab and Caritas Philippines’ collaboration covered areas from Bontoc, Lagawe, to Sulu in the
                        previous year. Unilab’s Ceelin vitamins were given to children who participated in a feeding
                        program, which was carried out simultaneously in various parts of the country, including remote
                        barangays in the mountains and small islands that are reachable only by small boats and hours of
                        trekking.<br><br>

                        <b>Common advocacy</b><br>

                        Caritas Philippines was founded in 1966 and has been active in programs that include poverty
                        alleviation, women and children empowerment, environment protection and emergency response. It
                        represents 86 dioceses.<br><br>

                        Unilab, on the other hand, is the country’s leading pharmaceutical and health care company. It
                        was founded in 1945 and highly regarded as a Filipino company that espouses the Filipino culture
                        of bayanihan.<br><br>

                        Disaster response is a common advocacy for Caritas Philippines and Unilab, the Philippines being
                        one of the most disaster-prone countries in the world. The two have been staunch supporters of
                        community-based health programs which tie in social and cultural considerations.<br><br>

                        “We are grateful for the trust of Caritas Philippines to us as a partner. We look forward to
                        working with them as we continue to serve our fellow Filipinos in times of need,” says Jose
                        Maria A. Ochave, senior vice president for external affairs of Unilab Inc.<br><br>

                        “Sa panahon ng pangangailangan, tayo pa ring mga Pilipino ang tutulong sa kapwa natin Pilipino.
                        We rise and fall together as one nation so we must be able to live and breathe the spirit of
                        malasakit and bayanihan to be able to move forward.”
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