<?php
    //session_start() creates a session or resumes the current one based on a 
    //session identifier passed via a GET or POST request, or passed via a cookie.
    session_start();

    //grabbing the database connection to phpMYAdmin
    require_once 'includes/connection.php';

    //Checking if the user has a session. If they don't they'll be redirected
    //to the admin login page
    if (!isset($_SESSION['name'])) {
        $_SESSION['msg'] = "You have to log in first";
        header("Location:login.html");
    }

?>

<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title><?php echo $_SESSION["name"];?>'s account</title> <!--insert user's session name in HTML title--->
</head>
<body>

<!--Navigation bar & hero section below-->
<section class="top" id="landingPage">
        <header>
            <p><a href="#landingPage" class="landing-direct">Burger Palace</a></p>
            <ul class="navbar">
                <li><a href="index.php#About">About</a></li>
                <li><a href="index.php#Menu">Menu</a></li>
                <li><a href="index.php#Contact">Contact</a></li>
                <li><a href="account.php"><?php echo $_SESSION['name']?></a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
            <img class="ham" src="hamburger.png" id="hamburger_image" alt="hamburger">
        </header>
   </section>

   <!---Popup menu-->
   <section class="disabled" id="popup">
        <ul class="ham-ul" id="ham_ul">
            <li><a href="" id="close_popup" class="close-popup">X</a></li>
            <li><a href="index.php#About">About</a></li>
            <li><a href="index.php#Menu">Menu</a></li>
            <li><a href="index.php#Contact">Contact</a></li>
            <li><a href="account.php"><?php echo $_SESSION['name']?></a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
   </section>

   <!--Section that'll contain the hero section and image-->
   <section class="top-2">
        <div class="top-2-text">
            <h1 class="home-header">Username: <?php echo $_SESSION['name']?> </h1>
            <button><a href="index.php" class="let-me">Return</a></button>    
        </div>
   </section>

   <script src="script.js"></script>
</body>
</html>