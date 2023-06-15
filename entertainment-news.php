<?php
include 'connect.php';
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

    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" media='screen and (max-width: 768px)' href="./CSS/mobile.css">
    <link href="https://fonts.googleapis.com/css?family=Lato|Staatliches&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="img/icon.png">
    <script src="https://kit.fontawesome.com/85a5fdd30e.js" async></script>

    <title>PJNews | Latest Philippines News and Multimedia</title>
</head>

<body>
    <div id="slideout-menu">
        <ul>
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="technology-news.php">Technology</a>
            </li>
            <li>
                <a href="politics-news.php">Politics</a>
            </li>
            <li>
                <a href="business-news.php">Business</a>
            </li>
            <li>
                <a href="health-news.php">Health</a>
            </li>
            <li>
                <a href="environment-news.php">Environment</a>
            </li>
            <li>
                <a href="entertainment-news.php">Entertainment</a>
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
                <img src="img/pjnews-logo.png" alt="PJNews Logo">
            </a>
        </div>
        <div id="menu-icon">
            <i class="fas fa-bars"></i>
        </div>
        <ul>
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="technology-news.php">Technology</a>
            </li>
            <li>
                <a href="politics-news.php">Politics</a>
            </li>
            <li>
                <a href="business-news.php">Business</a>
            </li>
            <li>
                <a href="health-news.php">Health</a>
            </li>
            <li>
                <a href="environment-news.php">Environment</a>
            </li>
            <li>
                <a class="active" href="entertainment-news.php">Entertainment</a>
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
    <br><br><br>
    <section id="home-articles" class="py-2">
        <div class="container">
            <h2>ENTERTAINMENT NEWS</h2>
            <div class="articles-container">
                <article class="card">
                    <img src="img/articles/entertainment1.png" alt="photo">
                    <div>
                        <div class="category category-entertainment">
                            Entertainment
                        </div>
                        <h3>
                            <a href="entertainment/entertainment1.php">Andrea Brillantes after split from Ricci Rivero:
                                Still healing, but doing okay
                                program</a>
                        </h3>
                        <p>Breaking her silence on her split with basketball player Ricci Rivero, Andrea Brillantes
                            confessed that she has not fully healed from heartbreak given the fact that she loved
                            someone with all her heart.
                        </p>
                    </div>
                </article>

                <article class="card">
                    <div class="category category-entertainment">
                        Entertainment
                    </div>
                    <h3>
                        <a href="entertainment/entertainment2.php">Celebrities with kids studying abroad</a>
                    </h3>
                    <p>Being a celebrity definitely comes with its perks, and one of them is having the means to provide
                        the best education for their child. Some invest in sending their child to a school overseas.</p>
                </article>

                <article class="card">
                    <img src="img/articles/entertainment3.png" alt="photo">
                    <div class="category category-entertainment">
                        Entertainment
                    </div>
                    <h3>
                        <a href="entertainment/entertainment3.php">Rita Daniela confirms breakup with non-showbiz
                            partner
                            to Mayon
                            evacuees</a>
                    </h3>
                    <p>Kinumpirma ng Kapuso singer-actress na si Rita Daniela na hiwalay na sila ng non-showbiz partner
                        at ama ng kanyang anak. Sa panayam ni Rita sa Fast Talk With Boy Abunda nitong Huwebes, June 15,
                        2023, naging bukas siyang ibahagi ang malungkot na kinahantungan ng mahigit apat na taong
                        relasyon nila ng dating nobyo. </p>
                </article>

                <article class="card">
                    <div class="category category-entertainment">
                        Entertainment
                    </div>
                    <h3>
                        <a href="entertainment/entertainment4.php">Deborah Sun, pitong taon nang nakatira sa condo unit
                            ni Ara Mina nang libre</a>
                    </h3>
                    <p>Pitong taon nang nakatira nang libre si Deborah Sun at ang mga anak niya sa isang condo unit ni
                        Ara Mina sa Quezon City.“Thank you, thank you so much kay Ara! Napakalaki talaga ng tulong niya
                        sa amin!” bulalas ng beteranang artista sa storycon ng pelikulang Unspoken Letters noong Hunyo
                        13, 2023, Martes, sa Limbaga 77 cafe & restaurant, Brgy. Laging Handa, Quezon City.
                    </p>
                    <img src="img/articles/entertainment4.png" alt="photo">
                </article>

                <article class="card">
                    <img src="img/articles/entertainment5.png" alt="photo">
                    <div class="category category-entertainment">
                        Entertainment
                    </div>
                    <h3>
                        <a href="entertainment/entertainment5.php">Noontime show nina Tito, Vic & Joey sa TV5, 'This Is
                            Eat!' ang title?</a>
                    </h3>
                    <p>Ayaw pang kumpirmahin ng ilang sources ng PEP Troika kung totoo bang This Is Eat! ang magiging
                        title ng noontime show nina Tito Sotto, Vic Sotto, at Joey de Leon sa TV5.Marami pa raw
                        pinagpipilian kaya hindi pa nila masabing ito na ang gagamiting title. Tinext din ng PEP Troika
                        si former Senator Tito Sotto — “still contemplating” ang kanyang sagot.
                    </p>
                </article>

                <article class="card">
                    <div class="category category-entertainment">
                        Entertainment
                    </div>
                    <h3>
                        <a href="entertainment/entertainment6.php">Pokwang threatens basher on Twitter: “Ok may schedule
                            ako sa NBI soon!”</a>
                    </h3>
                    <p>Gigil na gigil na binuweltahan ni Pokwang ang isang netizen dahil sa pakikialam nito umano sa
                        kanyang buhay.
                        Sa Twitter ngayong Huwebes ng gabi, June 15, 2023, isang netizen ang pumuna kay Pokwang dahil sa
                        aksiyon nitong ipa-deport ang ex-partner na si Lee O’Brian.
                    </p>
                </article>

                <article class="card">
                    <div>
                        <div class="category category-entertainment">
                            Entertainment
                        </div>
                        <h3>
                            <a href="entertainment/entertainment7.php">Plantita, may kakaibang gardening hack para
                                "buhayin" ang tuyong halaman</a>
                        </h3>
                        <p>Kahit walang green thumb ay pwede pa ring ma-enjoy ang mga halaman. Ito ang naisip ni Lisa
                            Harvey, isang 45-year-old mom at personal assistant for children with special needs.Ayon kay
                            Lisa, na mula sa Surrey, England, hirap na hirap siyang makabuhay ng halaman. Kadalasan ay
                            namamatay lang ang mga itinatanim niya.</p>
                    </div>
                    <img src="img/articles/entertainment7.png" alt="photo">
                </article>
            </div>
        </div>
    </section>

    <footer id='main-footer' class='py-2'>
        <div class="container footer-container">
            <div>
                <img src="img/pjnews-logodark.png" alt="PJNews Logo">
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
                    <li><a href="privacy.php">Privacy Policy</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <div>
                <h2>Join PJNews Now</h2>
                <p>Stay informed with credible news, in-depth reports, and engaging storytelling.</p>
                <a href="createaccount.php" class="btn btn-secondary">Join Now</a>
            </div>
            <div>
                <p>
                    Copyright PJNews &copy; 2023 - All Rights reserved.
                </p>
            </div>
        </div>
    </footer>
    <script src="main.js"></script>
</body>

</html>