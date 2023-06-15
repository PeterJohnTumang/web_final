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

    <title>Twitter CEO Linda Yaccarino shares first employee memo | PJNews</title>
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
                    <img src="../img/articles/technology1.jpg" alt="article">
                    <h1 class='l-heading'>Twitter CEO Linda Yaccarino shares first employee memo</h1>
                    <div class="meta">
                        <small>
                            <i class="fas fa-user"></i>Written by <b>PJNews</b> - June 13, 2023
                        </small>
                        <div class="category category-technology">Technology</div>
                    </div>
                    <p>New Twitter CEO Linda Yaccarino sent her first employee memo on Monday explaining her long-term
                        objectives for the company. Interestingly, she echoed some of Elon Musk’s words when describing
                        these goals. As a result, she inspires her workforce “drive civilization forward through the
                        unfiltered exchange of information and open dialogue.”
                        Leaders determine how an organization will develop over time. <br><br> Understanding Linda
                        Yaccarino’s plans for Twitter allows us to see how one of the world’s largest social media
                        networks will transform. Based on her recent memo, we can expect great things from the company’s
                        new head.

                        <br><br>
                        This article will show the Twitter CEO’s latest message to employees. Later, I will cover the
                        numerous challenges Yaccarino and her team must hurdle to improve the platform. Her next moves
                        will significantly impact social media, so check it out!
                    </p>
                    <p>Linda Yaccarino officially started her executive role on June 6, 2023. She has many things to fix
                        and improve in the company, but she enthusiastically took the challenge.

                        The Verge shared Linda Yaccarino’s Twitter Memo on June 13, 2023, revealing many details about
                        her long-term vision for the company. Her message shows she is willing to continue Elon Musk’s
                        vision of turning the platform into a “global town square.”<br><br>

                        Musk used that term to describe Twitter’s future. She also alluded to the tech leader’s famous
                        products and services, such as electric vehicles. You can read her full statement below:

                        Building Twitter 2.0 Together
                        Hello Twitter!

                        People keep asking me: Why Twitter? So, I’ll tell you.<br><br>

                        New Twitter CEO Linda Yaccarino sent her first employee memo on Monday explaining her long-term
                        objectives for the company. Interestingly, she echoed some of Elon Musk’s words when describing
                        these goals. As a result, she inspires her workforce “drive civilization forward through the
                        unfiltered exchange of information and open dialogue.” <br><br>

                        Leaders determine how an organization will develop over time. Understanding Linda Yaccarino’s
                        plans for Twitter allows us to see how one of the world’s largest social media networks will
                        transform. Based on her recent memo, we can expect great things from the company’s new head.
                        <br><br>

                        This article will show the Twitter CEO’s latest message to employees. Later, I will cover the
                        numerous challenges Yaccarino and her team must hurdle to improve the platform. Her next moves
                        will significantly impact social media, so check it out!<br><br>

                        <b>What was the Twitter CEO’s message?</b> <br>

                        Linda Yaccarino officially started her executive role on June 6, 2023. She has many things to
                        fix and improve in the company, but she enthusiastically took the challenge. <br><br>

                        The Verge shared Linda Yaccarino’s Twitter Memo on June 13, 2023, revealing many details about
                        her long-term vision for the company. Her message shows she is willing to continue Elon Musk’s
                        vision of turning the platform into a “global town square.” <br><br>

                        Musk used that term to describe Twitter’s future. She also alluded to the tech leader’s famous
                        products and services, such as electric vehicles. You can read her full statement below:
                        <br><br>

                        <b>Building Twitter 2.0 Together</b><br>
                        Hello Twitter! People keep asking me: Why Twitter? So, I’ll tell you. From space exploration to
                        electric vehicles, Elon knew these industries needed transformation, so he did it. More
                        recently, it has become increasingly clear that the global town square needs transformation—to
                        drive civilization forward through the unfiltered exchange of information and open dialogue
                        about the things that matter most to us. <br><br>

                        Have you ever been talking with someone particularly insightful, and thought, You’re
                        brilliant—everybody should get the chance to hear this. Or, I’m learning so much from you—can we
                        do this again? Or maybe it’s as simple as. You should have the freedom to speak your mind. We
                        all should. <br><br>

                        <b>Enter Twitter 2.0.</b><br>
                        Twitter is on a mission to become the world’s most accurate real-time information source and a
                        global town square for communication. We’re on the precipice of making history—and that’s not an
                        empty promise. That’s OUR reality.<br><br>

                        When you start by wrapping your arms around this powerful vision, literally everything is
                        possible. You have to genuinely believe—and work hard for that belief.<br><br>

                        And in this moment of complete reinvention, we have the opportunity to reach across aisles,
                        create new partnerships, celebrate new voices, and build something together that can change the
                        world. And from what I can tell so far, you’re built for this.<br><br>

                        The success of Twitter 2.0 is all of our responsibility. We need to think big. We need to
                        transform. We need to do it all together.<br><br>

                        And we can do it all by starting from first principles – questioning our assumptions and
                        building something new from the ground up. It’s rare to have the chance to put a new future into
                        the hands of every person, partner, and creator on the planet. That’s exactly why I’m here –
                        with all of YOU.<br><br>

                        So, let’s dig our heels in (4 inches or flat!) and build Twitter 2.0 together.<br><br>
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