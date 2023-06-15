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

    <title>DENR reviews approved reclamation projects | PJNews</title>
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
                    <img src="../img/articles/environment7.jpg" alt="article">
                    <h1 class='l-heading'>DENR reviews approved reclamation projects
                    </h1>
                    <div class="meta">
                        <small>
                            <i class="fas fa-user"></i>Written by <b>PJNews</b> - June 5, 2023
                        </small>
                        <div class="category category-environment">Environment</div>
                    </div>
                    <p>
                        The Department of Environment and Natural Resources is reviewing the reclamation projects that
                        were permitted by the government to deepen its understanding of the ecological and economic
                        impacts of these activities, its chief said Monday. <br><br>

                        Environment Secretary Antonia Loyzaga made the statement a day after environmental and
                        fisherfolk groups renewed their call to the government to cancel all reclamation activities,
                        saying these projects would affect over 27,000 hectares of the country’s coastal and maritime
                        ecosystems.<br><br>

                        Loyzaga said the agency cannot just declare those projects illegal and cancel their permits
                        because of the opposition of some groups.<br><br>

                        “What we’re doing in the DENR is we’re reviewing what had already been permitted. We’re trying
                        to understand how the lessons learned from these activities can actually inform actions and
                        policies moving forward,” Loyzaga said in a briefing on World Environment Day.<br><br>

                        In May, the environment department conducted an experts’ forum on reclamation aiming to review
                        and enhance government policies on dump-and-fill activities. <br><br>

                        A month earlier, the DENR chief met with groups opposing reclamation such as Advocates of
                        Science and Technology for the People, Kalikasan People’s Network for the Environment and
                        PAMALAKAYA as part of the agency’s consultations with different sectors. <br><br>

                        Loyzaga stressed the importance of understanding the cumulative impacts of reclamation projects.
                        <br><br>

                        “They were individually assessed and the overall impact [assessment] on Manila Bay and the
                        ecosystems was not done. Therefore, this is the basis for us to be forward in terms of trying to
                        determine whether or not we may be looking at proposed changes to the way we have permitted
                        these projects,” she said.<br><br>

                        Former President Rodrigo Duterte issued a directive to stop accepting applications for
                        reclamation activities.<br><br>

                        <b>Reclamation ‘not for the poor’</b><br>
                        There are around 50 reclamation projects at various stages of development across the country,
                        according to groups under People’s Network for the Integrity of Coastal Habitats and Ecosystems.
                        Of those, around 20 are in Manila Bay. <br><br>

                        “Up to one-fourth of the Manila Bay may be destroyed due to reclamation and related projects
                        such as seabed quarrying and dredging,” Jon Bonifacio, national coordinator of Kalikasan PNE,
                        said in a briefing Sunday. <br><br>

                        Scientists and environmental groups have warned that reclamation, dredging, and seabed quarrying
                        will destroy coastal and marine habitats, resulting in a decline in fisheries production and
                        loss of livelihood among fishers. <br><br>

                        They also said that reclamation projects will expose coastal communities to strong cyclones and
                        storm surge. <br><br>

                        “It is clear that reclamation is only for a few. It exacerbates historical inequality and
                        poverty of people. It’s time to listen to the lessons of science and history,” Bonifacio said.
                        <br><br>

                        The groups also called on the government to declare Manila Bay and other important marine and
                        coastal areas “reclamation-free zones” and regular consultations with affected stakeholders.
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