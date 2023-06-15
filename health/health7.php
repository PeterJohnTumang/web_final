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

    <title>WHO declares end to COVID global health emergency | PJNews</title>
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
                    <img src="../img/articles/health7.jpg" alt="article">
                    <h1 class='l-heading'>WHO declares end to COVID global health emergency
                    </h1>
                    <div class="meta">
                        <small>
                            <i class="fas fa-user"></i>Written by <b>PJNews</b> - May 5, 2023
                        </small>
                        <div class="category category-health">Health</div>
                    </div>
                    <p>
                        The World Health Organization's lifting of global health emergency is a major step towards the
                        end of the pandemic. <br><br>

                        The World Health Organization on Friday, May 5, declared an end to COVID-19 as a global health
                        emergency, marking a major step toward the end of the pandemic that has killed more than 6.9
                        million people, disrupted the global economy and ravaged communities.<br><br>

                        The WHO’s Emergency Committee met on Thursday, May 5, and recommended the UN-agency declare an
                        end to the coronavirus crisis as a “public health emergency of international concern”, which has
                        been in place for over three years.<br><br>

                        “It is therefore with great hope that I declare COVID-19 over as a global health emergency,”
                        said WHO Director-General Tedros Adhanom Ghebreyesus, adding that the end of the emergency did
                        not mean COVID was over as a global health threat.<br><br>

                        The WHO’s emergency committee first declared that COVID represented its highest level of alert
                        on January 30, 2020. The status helps focus international attention on a global health threat,
                        as well as bolstering collaboration on vaccines and treatments.<br><br>

                        The decision to end the global health emergency status was supported by a majority of the
                        committee, said Didier Houssin, head of the agency’s COVID emergency committee.<br><br>

                        Lifting it is a sign of the progress the world has made fighting the disease, but COVID-19 is
                        here to stay, the WHO has said, even if it no longer represents an emergency.<br><br>

                        The death rate has slowed from a peak of more than 100,000 people per week in January 2021 to
                        just over 3,500 in the week to April 24, 2023, according to WHO data, reflecting widespread
                        vaccination, availability of better treatments and a level of population immunity from prior
                        infections.<br><br>

                        Ending the emergency could mean that international collaboration or funding efforts are also
                        brought to an end or shift in focus, although many have already adapted as the pandemic has
                        receded in different regions.<br><br>

                        “The battle is not over. We still have weaknesses and those weaknesses that we still have in our
                        system will be exposed by this virus or another virus. And it needs to be fixed,” said the WHO’s
                        emergencies director Michael Ryan.<br><br>

                        The WHO does not declare the beginning or end of pandemics, although it did start using the term
                        for COVID in March 2020.<br><br>

                        “In most cases, pandemics truly end when the next pandemic begins,” Ryan said.<br><br>

                        Last year, US President Joe Biden said the pandemic was over. Like a number of other countries,
                        the world’s biggest economy has begun dismantling its domestic state of emergency for COVID,
                        which officially ends May 11, meaning it will stop paying for vaccines and testing for many
                        people and shift responsibility to the commercial market.<br><br>

                        Other regions have taken similar steps. The European Union said in April last year the emergency
                        phase of the pandemic was over, and the WHO’s African head, Matshidiso Moeti, said in December
                        it was time to move to routine management of COVID across the continent.<br><br>

                        The WHO’s declaration comes just four months after China ended its prolonged severe COVID
                        restrictions and was ravaged by a big surge in infections.<br><br>

                        In many parts of the world, testing has dwindled dramatically, and people have largely stopped
                        wearing masks. In some countries, mask-wearing mandates have resumed during COVID outbreaks. The
                        WHO published a plan this week advising countries on how to live with COVID long-term.
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