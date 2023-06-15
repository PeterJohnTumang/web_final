<?php
#CRUD
include 'connect.php';
$id = $_GET['updateid'];
$sql = "SELECT * FROM `useraccount` WHERE id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$email = $row['email'];
$password = $row['password'];
$name = $row['name'];
$birthday = $row['birthday'];
$gender = $row['gender'];

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $birthday = $_POST['birthday'];
    $gender = $_POST['gender'];

    $sql = "UPDATE `useraccount` SET email='$email', password='$password', name='$name', birthday='$birthday', gender='$gender' WHERE id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo '<script>alert("Account successfully updated!");</script>';
        echo '<script>window.location.href = "admin.php";</script>'; // Redirect back to admin.php
    } else {
        die(mysqli_error($con));
    }
}
?>


<!DOCTYPE html>
<html lang="en">

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

    <title>Update Account | PJNews </title>
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

    <h2 class="updateaccount-heading">UPDATE ACCOUNT</h2>
    <div class="container my-5 my-form">
        <form method="post">
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off"
                    value="<?php echo $email; ?>">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" placeholder="Enter your password" name="password"
                    autocomplete="off" value="<?php echo $password; ?>">
            </div>

            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off"
                    value="<?php echo $name; ?>">
            </div>

            <div class="form-group">
                <label>Birthday</label>
                <input type="date" class="form-control" placeholder="Enter your email" name="birthday"
                    autocomplete="off" value="<?php echo $birthday; ?>">
            </div>

            <div class="form-group">
                <label for="gender">Gender</label>
                <select class="form-control" name="gender">
                    <option value="" selected disabled>Select your gender</option>
                    <option value="Male" <?php if($gender == 'Male') echo 'selected'; ?>>Male</option>
                    <option value="Female" <?php if($gender == 'Female') echo 'selected'; ?>>Female</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
    <script src="main.js"></script>

</body>

</html>