<?php
    //session_start() creates a session or resumes the current one based on a 
    //session identifier passed via a GET or POST request, or passed via a cookie.
    session_start();
    
    //prevents the undefined array key ERROR
    error_reporting(0);

    //require the database connection
    require_once 'connection.php';

    //isset checks if the varible 'submit' is set => outputs a true or false output. 
    if(isset($_POST["submit"])){
        
        //making variables of the user's details + preventing sql injection
        $name = mysqli_real_escape_string($conn, $_POST["name"]);
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $password = mysqli_real_escape_string($conn, $_POST["password"]);

        //SELECT all information from the user table and check if it's equal to the login input
        $sql_query = "SELECT * FROM users WHERE fullname='$name' AND email='$email' AND userPassword= '$password' ";
        $result = mysqli_query($conn, $sql_query);
        $row = mysqli_fetch_array($result);

        $count = mysqli_num_rows($result);

        //If the sql SELECT query is correct we'll turn the page into an HTML welcoming page,which has a link to 'update account'
        //Page will also concat the user's name onto the navigation bar as well as the h1 welcoming text
        if($count == 1){
            $_SESSION["name"] = $name;
        //If the user's login information doesn't work, they'll be given a "can't login" message/error.
        } else {
            echo "Can't login";
        }

        //If we get the user's session we'll redirect them to the index.php page (which is the same as index.html, but is for the user)
        if(isset($_SESSION["name"])){
            header("Location: ../index.php");
        } else {
            echo "Can't login". $name. "Refresh and try again";
        }
    }
?>

