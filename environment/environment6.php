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

    <title>Green advocates, scientists urge Marcos to protect Masungi's reforestation efforts | PJNews</title>
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
                    <img src="../img/articles/environment6.jpg" alt="article">
                    <h1 class='l-heading'>Green advocates, scientists urge Marcos to protect Masungi's reforestation
                        efforts
                    </h1>
                    <div class="meta">
                        <small>
                            <i class="fas fa-user"></i>Written by <b>PJNews</b> - June 8, 2023
                        </small>
                        <div class="category category-environment">Environment</div>
                    </div>
                    <p>
                        Environmentalists, scientists and government officials appealed to President Ferdinand
                        “Bongbong” Marcos Jr. on Monday to protect the ecologically important Masungi Geopark Project
                        and its defenders.<br><br>

                        In an open letter released on World Environment Day, 70 individuals urged Marcos to support the
                        2,700-hectare reforestation project in the Upper Marikina Watershed, a critical protected area
                        in Rizal province.<br><br>

                        “We condemn the attacks against Masungi’s environment defenders in the form of disinformation,
                        political and legal harassment, and physical violence. These heroes deserve the nation’s
                        gratitude, not oppression,” the letter read.<br><br>

                        The signatories stressed the “invaluable” contributions of the Masungi Geopark Project in
                        rescuing abused forestland, protecting the watershed from “syndicates” and quarry operators, and
                        transforming ancient limestones into a globally-acclaimed conservation model at no cost to the
                        government.<br><br>

                        “Verily, the Department of Environment and Natural Resources’ moves to discredit, undermine or
                        altogether scrap the Masungi Geopark Project [go] against our national agenda and international
                        commitments,” they added.<br><br>

                        Signatories of the letter include Pasig City Mayor Vico Sotto, Rep. Ed Hagedorn (Palawan) and
                        Philippine Center for Environmental Protection and Sustainable Development chair Neric
                        Acosta.<br><br>

                        <b>‘Questionable’ features of deal</b><br>
                        Under a 2017 agreement between the foundation and then-environment chief Gina Lopez, Masungi
                        will plant and nurture trees to help heal a 2,700-hectare area in the Upper Marikina
                        Watershed.<br><br>

                        But the DENR is now claiming the agreement’s provision on perpetual land trust for conservation
                        is unconstitutional.<br><br>

                        “There is no doubt that there has been good work done by this group,” Environment Secretary
                        Antonia Loyzaga said in a briefing Monday.

                        “However, there are certain features of this agreement that really bring it into question, and
                        because of those features we will need to take appropriate actions,” she added.<br><br>

                        The DENR will take charge of the reforestation project through its Project TRANSFORM
                        (Transdisciplinary Approach for Resilient and Sustainable Communities) in the event of the
                        cancellation of the agreement with Masungi.<br><br>

                        “This will be a whole-of-government, whole-of-society effort and not just the effort of one
                        single foundation or entity, because in fact we are part of this environment and not just one
                        foundation,” Loyzaga.<br><br>

                        Over the years, Masungi has locked horns with quarry operators, resort owners and other entities
                        who illegally occupy forestlands within the Upper Marikina Watershed.
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