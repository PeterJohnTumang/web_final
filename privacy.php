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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link rel="stylesheet" href="./CSS/style.css" />
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="./CSS/mobile.css" />
    <link href="https://fonts.googleapis.com/css?family=Lato|Staatliches&display=swap" rel="stylesheet" />
    <link rel="shortcut icon" type="image/x-icon" href="img/icon.png" />
    <script src="https://kit.fontawesome.com/85a5fdd30e.js" async></script>

    <title>About Us | PJNews</title>
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
                <a class="active" href="index.php">Home</a>
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

    <section id="about">
        <div class="container">
            <div class="page-container">
                <article class="card">
                    <h1 class="l-heading">PRIVACY STATEMENT</h1>
                    <p>
                        This privacy statement outlines the privacy practices implemented by PJNews to protect the
                        personal information of our users. We are committed to maintaining your trust and confidence in
                        the internet by promoting fair information practices. By using our website, you consent to the
                        data practices described in this privacy statement. If you have any concerns about our privacy
                        practices, please contact us at <b><a
                                href="mailto:pjnewsfeedback@gmail.com">pjnewsfeedback@gmail.com</a></b>.
                        <br><br>
                        <b>Collection of Personal Information:</b><br>
                        We collect information from our users at various points on our website. This includes computer
                        hardware and software information such as IP address, device type, browser type, domain names,
                        time spent, and referring website addresses. Additionally, we may collect personally
                        identifiable information like email addresses, names, addresses, or phone numbers. We may also
                        collect anonymous demographic information such as age, gender, location, browsing behavior,
                        interests, and favorites.
                        <br><br>
                        <b>Use of Personal Information:</b><br>
                        We use personal information for analysis, website administration, user tracking, and to gather
                        broad demographic information for aggregated use. We may also use personally identifiable
                        information to inform you about other products or services offered by us, our affiliates, and
                        partners. In certain cases, we may require users to provide contact information and demographic
                        information for surveys, contests, or promotions. Participation in these activities is optional,
                        and we will only use the provided information for the intended purposes. We may partner with
                        third parties to deliver services or measure website statistics. In such cases, we may share
                        necessary information with these parties, who are obligated to keep the information confidential
                        and use it solely for providing the requested services.
                        <br><br>
                        <b>Use of Cookies:</b><br>
                        We utilize cookies to enhance your online experience. A cookie is a small data file stored on
                        your hard drive that contains information about you. You can choose to accept or decline cookies
                        by modifying your browser settings; however, declining cookies may limit your access to certain
                        features on our website. Some of our business partners also use cookies on our site.<br><br>

                        <b>Security of Personal Information:</b><br>
                        We have implemented security measures to protect your personal information from unauthorized
                        access, use, or disclosure. We store personally identifiable information on secure computer
                        servers protected against unlawful access, misuse, destruction, alteration, and
                        contamination.<br><br>

                        <b>Access and Correction:</b><br>
                        If you have provided us with your personal information, you have the right to request a copy of
                        the information we hold about you and to request corrections if necessary. Please contact us at
                        <b><a href="mailto:pjnewsfeedback@gmail.com">pjnewsfeedback@gmail.com</a></b> to exercise these
                        rights.<br><br>

                        <b>External Links:</b><br>
                        Our website may contain links to other sites. Please note that we are not responsible for the
                        privacy practices of those sites. We encourage you to read the privacy statements of any website
                        that collects personally identifiable information.<br><br>

                        <b>Revisions to the Privacy Statement:</b><br>
                        If we make changes to our privacy policy, we will update the information on our homepage to keep
                        our users informed about the information we collect, how we use it, and any circumstances under
                        which we may disclose it.<br><br>

                        <b>Exponential Interactive Privacy Statement:</b><br>
                        Subject to your consent, Exponential Interactive, Inc. collects and profiles personal data,
                        including IP addresses and cookie IDs, from users on our website for targeted online advertising
                        and ad measurement. You can modify your consent decision at any time. For more information,
                        including access requests and complaints, please review their privacy policy or contact their
                        data protection officer at <b><a
                                href="mailto:pjnewsprivacy@gmail.com.">pjnewsprivacy@gmail.com</a></b>.
                    </p>
                </article>
                <aside class="card bg-primary">
                    <h2>Join PJNews Now</h2>
                    <p>
                        PJNews is a renowned digital brand in journalism, delivering credible and timely news across
                        various categories. We provide in-depth reports, engaging storytelling, and real-time coverage
                        to empower our audience with well-informed insights.
                    </p>
                    <a href="createaccount.php" class="btn btn-dak btn-block">Join Now</a>
                </aside>
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