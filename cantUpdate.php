<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Can't Update</title>
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
        <h1 class="home-header">Can't Update</h1>
        <button><a href="login.html" class="let-me">Retry</a></button>    
    </div>
</section>