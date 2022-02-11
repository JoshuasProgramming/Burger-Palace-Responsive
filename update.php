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

    //Catch post data once the user presses the update button and process information
    if(isset($_POST['update'])){
        $email = $_POST['email'];
        $name = $_POST['name'];
        $password = $_POST['password'];
        $newPassword = $_POST['newPassword'];

        //check if content is present

        //update database table 'users'
        $sql_query = ("UPDATE users SET userPassword='$newPassword' WHERE email='$email' AND fullname='$name' AND userPassword='$password'" );
        $result = mysqli_query($conn, $sql_query);
        //Create failure message
        if(!$sql_query){
            die("Failed to update database. Check query string.");
        }
        else if($sql_query){
            //echo "database updated";
            header("location: logout.php");
        } else {
            header("Location: ../cantUpdate.php");
        }
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
        <div class="login-form-container">
            <form action="#" method="post" class="register-form">
                <input placeholder="Name" name="name" class="register-name" autocomplete="off" required>
                <input placeholder="email" name="email" class="register-email" type="email" autocomplete="off" required>
                <input placeholder=" current password" name="password" type="password" class="register-password" required>
                <input placeholder="new password" name="newPassword" type="password" class="register-password" required>
                <button class="register-btn" name="update">Update</button>
            </form>
        </div>
    </section>

   <script src="script.js"></script>
</body>
</html>