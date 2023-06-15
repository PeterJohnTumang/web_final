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

    <title>Protected area designation, non-attainment area guidelines for oil spill-hit VIP sought | PJNews</title>
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
                    <img src="../img/articles/environment5.jpg" alt="article">
                    <h1 class='l-heading'>Protected area designation, non-attainment area guidelines for oil spill-hit
                        VIP sought
                    </h1>
                    <div class="meta">
                        <small>
                            <i class="fas fa-user"></i>Written by <b>PJNews</b> - June 8, 2023
                        </small>
                        <div class="category category-environment">Environment</div>
                    </div>
                    <p>
                        Environment advocates and locals sought for the declaration of the Verde Island Passage—the
                        marine corridor threatened by the oil spill in Oriental Mindoro—as a legislated protected area
                        on World Oceans Day.<br><br>

                        Parts of VIP are currently marine protected areas, but Protect VIP Network wants the entire
                        marine corridor to be declared a maritime protected area under the Expanded National Integrated
                        Protected Areas Act.<br><br>

                        “[Environment] Secretary Antonia Loyzaga has already declared before that she favors the
                        declaration of VIP as a protected area. We are here hoping that she will put her words into
                        action,” said Fr. Edwin Gariguez, lead convenor of Protect VIP and Social Action Center director
                        of the Apostolic Vicariate of Calapan.<br><br>

                        The advocates also urged the DENR to approve and promulgate guidelines to designate parts of the
                        VIP as non-attainment areas under the Clean Water Act. The DENR can designate water bodies where
                        specific pollutants have already exceeded water quality guidelines as non-attainment
                        areas.<br><br>

                        Protect VIP said the declaration of non-attainment areas would mean that no polluting activities
                        should be permitted to prevent the further degradation of marine area’s waters.<br><br>

                        VIP is dubbed as the “Amazon of the oceans” as it is home to more than 300 coral species, 170
                        fish species, and thousands of marine organisms such as sharks and turtles. It also supports the
                        livelihoods of over two million people<br><br>

                        <b>100 days</b><br>
                        One hundred days have passed since the MT Princess Empress, which was loaded with 900,000 of
                        industrial oil, sank in rough seas, affecting over 194,000 people in Southern Luzon and Western
                        Visayas. Initial estimates by the DENR put the environmental damage caused by the oil spill at
                        P7 billion.<br><br>

                        It was only on Tuesday when the National Bureau of Investigation filed 18 counts each of
                        falsification and perjury raps against 35 individuals, which include owners and officers of RDC
                        Reield Marine Services as well as officials of the Philippine Coast Guard and the Maritime
                        Industry Authority.<br><br>

                        They were found to have falsified the vessel’s certificate of public convenience to allow it to
                        sail 18 times from December 2022 until it sank on February 28.<br><br>

                        But Kalikasan People’s Network for the Environment said the filing of complaints “does not meet
                        the standards for environmental justice.”<br><br>

                        “In the aftermath of an environmental disaster, various steps must be taken to ensure that
                        justice prevails. These include holding all those responsible accountable, providing full
                        reparation and compensation to affected communities, restoring the environment and the lives of
                        community members, and implementing strong mechanisms to prevent future disasters,” the group
                        said.<br><br>

                        It also urged the government to conduct a comprehensive assessment of the losses suffered by the
                        affected communities.<br><br>

                        Work to recover the remaining oil from the MT Princess Empress that sank off Oriental Mindoro
                        began in late May and may last for a month, according to PCG.
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