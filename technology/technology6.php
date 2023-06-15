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

    <title>AI ‘won’t replace human creativity,’ says digital media artist | PJNews</title>
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
                    <img src="../img/articles/technology6.jpg" alt="article">
                    <h1 class='l-heading'>AI ‘won’t replace human creativity,’ says digital media artist</h1>
                    <div class="meta">
                        <small>
                            <i class="fas fa-user"></i>Written by <b>PJNews</b> - May 11, 2023
                        </small>
                        <div class="category category-technology">Technology</div>
                    </div>
                    <p>
                        As concerns over potential risks posed by artificial intelligence (AI) continue to mount, a
                        prominent data artist has offered a refreshing perspective by saying that machines "will not
                        replace human creativity."<br><br>

                        “As a concept, it gives us a lot to ponder in terms of how we define creativity and measure
                        creative time or effort in the age of AI,” Refik Anadol, a Turkish-born digital media artist,
                        told Anadolu.<br><br>

                        “As a tool, even though it might have useful professional applications, it won’t replace human
                        creativity because, in my opinion, human creativity requires a strong connection between memory
                        and emotion – something that generative AI will always lack,” he explained.<br><br>

                        “I think that recent advancements in AI technologies might initially be seen as serious threats
                        in the art world, but I don’t think that generative AI specifically poses dangers for the future
                        of creativity,” he added.<br><br>

                        Based in the Turkish metropolis Istanbul as well as Los Angeles, Anadol is known for his use of
                        cutting-edge technologies to produce immersive installations and sculptures. These technologies
                        include artificial intelligence, machine learning, and quantum computing.<br><br>

                        On May 5, Anadol recreated his audio/visual performance Living Architecture: Casa Batllo in
                        Barcelona, Spain to honor Antoni Gaudi, the wildly inventive Catalan architect who died in
                        1926.<br><br>

                        More than 65,000 people experienced the performance in Barcelona, where the Caso Batllo is
                        situated. Last year, a dynamic NFT of Gaudi's iconic Casa Batllo was auctioned off by Christie's
                        in New York for USD1.38 million.<br><br>

                        Anadol’s newly commissioned installation Infinity Room: Bosphorus, a site-specific installation,
                        is informed by real-time environmental data from the Istanbul Strait, and can also be visited at
                        the Istanbul Modern Museum.<br><br>

                        <b>AI 'opportunity to find new ways to collaborate with machines'</b><br><br>

                        Asked about an open letter signed by tech luminaries such as Tesla CEO Elon Musk and Apple
                        co-founder Steve Wozniak calling for a six-month pause on AI research, warning of the new
                        technology’s “profound risks to society and humanity,” Anadol acknowledged the potential
                        dangers.<br><br>

                        “I agree with the opinion expressed in the letter that the pace of AI-related policy-making
                        should match the speed of innovation in the field, but I am of the opinion that instead of
                        pausing AI research we can perhaps work on strengthening policies, regulations, and ethics
                        around it simultaneously,” he said.<br><br>

                        Last week, US Vice President Kamala Harris met with CEOs of tech companies working on AI “to
                        discuss the responsibility that governments and companies have to mitigate risks to protect the
                        public.”<br><br>

                        “Advances in tech always present new opportunities and challenges. Generative AI is no
                        different,” Harris wrote on Twitter.<br><br>

                        The 38-year-old Anadol said he believes that when generative AI technologies expand and are
                        widely used, artists will struggle to push the boundaries of human imagination even
                        further.<br><br>

                        “I think that the rise and the prevalent use of generative AI tools pose challenges for artists
                        to push the boundaries of human imagination even more,” he said. “And I say that not because we,
                        as humans, need to compete with machine creativity; on the contrary, I see this moment as an
                        opportunity to find new ways to collaborate with machines to realize our boldest, the most
                        groundbreaking, and the most futuristic artistic ideas.”<br><br>

                        As artificial intelligence is set to fundamentally reshape our world, art lovers are getting
                        ready to see AI’s impact on both creativity and, even more deeply, human adventure.
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