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

    <title>BioNTech faces first German lawsuit over alleged COVID-19 vaccine side effects | PJNews</title>
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
                <a href="entertainment-news.php">Entertainment</a>
            </li>
            <li>
                <a href="sports-news.php">Sports</a>
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
                    <img src="../img/articles/health2.jpg" alt="article">
                    <h1 class='l-heading'>BioNTech faces first German lawsuit over alleged COVID-19 vaccine side effects
                    </h1>
                    <div class="meta">
                        <small>
                            <i class="fas fa-user"></i>Written by <b>PJNews</b> - June 12, 2023
                        </small>
                        <div class="category category-health">Health</div>
                    </div>
                    <p>
                        The plaintiff is suing BioNTech for at least 150,000 euro in damages for bodily harm as well as
                        compensation for unspecified material damage. <br><br>

                        BioNTech will go to court on Monday, June 12, to defend itself against a lawsuit from a German
                        woman who is seeking damages for alleged side effects of its COVID-19 vaccine, the first of
                        potentially hundreds of cases in the country.<br><br>

                        The woman, exercising her right under German privacy law for her name not to be made public, is
                        suing the German vaccine maker for at least 150,000 euro ($161,500) in damages for bodily harm
                        as well as compensation for unspecified material damage, according to the regional court in
                        Hamburg which is hearing the case and law firm Rogert & Ulbrich, which is representing
                        her.<br><br>

                        The plaintiff claims she suffered upper-body pain, swollen extremities, fatigue, and a sleeping
                        disorder due to the vaccine. <br><br>

                        The first hearing is on Monday.<br><br>

                        Tobias Ulbrich, a lawyer at Rogert & Ulbrich, told Reuters he aimed to challenge in court the
                        assessment made by European Union regulators and German vaccine assessment bodies that the
                        BioNTech shot has a positive risk-benefit profile.<br><br>

                        German pharmaceutical law states that makers of drugs or vaccines are only liable to pay damages
                        for side-effects if “medical science” shows that their products cause disproportionate harm
                        relative to their benefits or if the label information is wrong.<br><br>

                        BioNTech, which holds the marketing authorisation in Germany for the shot it developed with
                        Pfizer, said it concluded after careful consideration that the case was without merit.<br><br>

                        “The positive benefit-risk profile of Comirnaty remains positive and the safety profile has been
                        well characterised,” the biotech firm said, referring to the vaccine’s brand name.<br><br>

                        It noted about 1.5 billion people had received the shot across the world, including more than 64
                        million in Germany.<br><br>

                        The European Medicines Agency (EMA) says that BioNTech’s Comirnaty, the most commonly used in
                        the Western world, is safe to use. <br><br>

                        In a media briefing last week, the EMA reaffirmed the benefit of all COVID shots it approved,
                        including BioNTech’s, saying in the first year of the pandemic alone, vaccines were estimated to
                        have helped save almost 20 million lives globally.<br><br>

                        It has said there is a very small risk of myocarditis and pericarditis, two types of heart
                        inflammation, following vaccination with Comirnaty, mainly for young males.<br><br>

                        Unexpected side-effects after a drug has regulatory approval are rare. The unprecedented speed
                        at which COVID vaccines were developed during the pandemic meant that potential uncommon
                        side-effects may not have been detected as readily as they might have been in traditionally
                        longer trials.<br><br>

                        EMA has said that safety monitoring had not been compromised during the fast-track
                        assessment.<br><br>

                        The EMA had registered almost 1.7 million spontaneous reports of suspected side-effects by May,
                        which translates into about 0.2 for every 100 administered doses.<br><br>

                        Almost 768 million vaccine doses have been administered in the European Economic Area (EEA),
                        which includes the 27 EU member states plus Iceland, Liechtenstein and Norway.<br><br>

                        The most common temporary side-effects are headache, fever, fatigue and muscle pain.<br><br>

                        The EMA also monitors adverse events or illness after vaccination, and checks for frequencies
                        that surpass normal rates in the non-vaccinated population.<br><br>

                        <b>Liability</b><br>
                        It is not clear who would pay the legal costs or compensation if the plaintiff wins the
                        case.<br><br>

                        Sources have said some of the EU’s bulk purchase agreements with vaccine makers, including
                        BioNTech-Pfizer, contained full or partial liability waivers for both legal costs and potential
                        compensation, which could force EU governments to bear some of the costs.<br><br>

                        Like many countries, Germany also has a public sector financial support scheme for people who
                        suffer permanent harm from vaccines, known as a no-fault compensation programme, but
                        participation in the programme does not block someone seeking damages separately.<br><br>

                        The United States has granted manufacturers immunity from liability for COVID vaccines that
                        receive regulatory approval.<br><br>

                        Rogert & Ulbrich says it has filed about 250 cases for clients seeking damages for alleged
                        side-effects of COVID-19 vaccines.<br><br>

                        Another law firm, Caesar-Preller, says it is representing 100 cases, with both firms saying
                        separately they cover almost all cases in Germany between them.<br><br>

                        A handful of similar cases have been filed in Italy.
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