<?php
include 'connect.php';?>

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

    <title>Subsription Management | PJNews</title>
</head>

<body>
    <div id="slideout-menu">
        <ul>
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="technology-news.html">Technology</a>
            </li>
            <li>
                <a href="">Politics</a>
            </li>
            <li>
                <a href="">Business</a>
            </li>
            <li>
                <a href="">Health</a>
            </li>
            <li>
                <a href="">Environment</a>
            </li>
            <li>
                <a href="">Entertainment</a>
            </li>
            <li>
                <a href="">Sports</a>
            </li>
            <input type="text" placeholder="Search Here">
            </li>
        </ul>
    </div>

    <nav>
        <div id="logo-img">
            <a href="#">
                <img src="img/pjnews-logo.png" alt="GTCoding Logo">
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
                <a href="technology-news.html">Technology</a>
            </li>
            <li>
                <a href="">Politics</a>
            </li>
            <li>
                <a href="">Business</a>
            </li>
            <li>
                <a href="">Health</a>
            </li>
            <li>
                <a href="">Environment</a>
            </li>
            <li>
                <a href="">Entertainment</a>
            </li>
            <li>
                <a href="">Sports</a>
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
    <br><br><br><br>
    <div class="container container-table">

        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Email Address</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `subscription`";
                $result = mysqli_query($con, $sql);
                if($result){
                    while($row=mysqli_fetch_assoc($result)){
                        $id=$row['id'];
                        $email=$row['email'];
                        echo'
                        <tr>
                            <th scope="row">'.$id.'</th>
                            <td>'.$email.'</td>
                            <td>
                            <button class="btn btn-danger"><a href="subscription-approve.php?deleteid='.$id.'" class="text-light">Accept</a></button>
                            <button class="btn btn-danger"><a href="subscription-disapprove.php?deleteid='.$id.'" class="text-light">Reject</a></button>
                        </td>
                        </tr>';
                    }
                }
            ?>

            </tbody>
        </table>
    </div>
    <script src="main.js"></script>
</body>

</html>