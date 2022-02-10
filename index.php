<?php
    //Get users session
    //session_start() creates a session or resumes the current one based on a 
    //session identifier passed via a GET or POST request, or passed via a cookie.
    session_start();

    //prevents the undefined array key ERROR
    error_reporting(0);

    //Checking if the user has a session. If they don't they'll be redirected
    //to the admin login page
    if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You have to log in first";
    header("Location:register.html");

    $username = $_SESSION['username'];
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
    <title>Welcome <?php echo $_SESSION["name"];?></title> <!--insert user's session name in HTML title--->
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
            <h1 class="home-header">Welcome<br><center><?php echo $_SESSION['name']?></center></h1>
            <div class="home-options">
                <button><a href="#About" class="let-me" id="">Update Account</a></button>
                <button><a href="#About" class="let-me" id="">Update Profile</a></button>
                <button class="let-me" id="delete_btn" onclick=run()>Delete Account</button>
            </div>
                
        
        </div>
   </section>


    <!--About section below-->
        <section class="about-section" id="About">
            <div class="left-right-main">
                
        
                <div class="right">
                    <h2>About</h2>
                    <p class="about-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga modi, labore explicabo consectetur ea itaque officiis iure, ad delectus minus atque porro libero vel tempore ut.</p>
                    <h4 class="opening-times-text">Opening Times: Mon-Sat 08:00-23:00 Sunday Closed</h4>
                </div>

                <!--map contains the Google map api information-->
                <div id="map" class="google-api left">
                </div>

            </div>
        </section>
    

    <!--Menu section below-->
    <section class="menu-section" id="Menu">
        <div class="food-container">
            <div class="food-image1">
                
            </div>
            <h2>Menu</h2>
            <p class="food1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut voluptas corporis pariatur magni sed quos, quaerat non odio, eaque repellat obcaecati aperiam dignissimos iure incidunt cumque in laborum officia laboriosam!</p>
            
            <div class="food-image2">
                
            </div>
            
        </div>
    </section>

    <!--Contact Form below-->
    <section class="contact-section" id="Contact">
        <h1 class="contact-header">Contact</h1>
        <form action="" method="POST" class="contact-form" >
            <div class="contact-form-container">
                <input class="firstname-input" placeholder="First Name" id="firstname" autocomplete="off" required>
                <input class="lastname-input" placeholder="Last Name" id="lastname" autocomplete="off" required>
                <input class="email-input" placeholder="Email" id="email" autocomplete="off" type="email" required>
                <textarea class="message-input" placeholder="Message" id="message" autocomplete="off" required></textarea>
            </div>
        </form>
        <a class="btn-4" id="submit">Submit</a>
    </section>

    <script src="script.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2ZOOoY0T_Z-BXajRx1TgsNc3GJr9_aQw&callback=myMap"></script>
    
    <script>
        function run(){
            //create a variable which is assigned a values from a prompt user input.
            let options = prompt("Are You Sure (Yes/No)?");

            //If user entered "Yes"...
            if(options == "Yes"){
                window.location.href = "delete.php";
                alert("Account Deleted");
                return;
            }
            //If user entered "No"...
            if(options == "No"){
                return;
            }

            //If user entered something other than "Yes" or "NO"...
            else{
                alert("Didn't work, Try Again");
                return;
            }
        }
        
    </script>

</body>
</html>

