<?php
    // start the session
    session_start();

    // // check if session correlates to that of an existing user
    // if (isset($_SESSION['user_id'])) 
    // {
    //   // grab data if user is signed in
    //     echo "User ID: ", $_SESSION['user_id'], "<br />";
    //     echo "Username: ", $_SESSION['username'];
    // }
?>


<!doctype html>

<!-- header for navigation -->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="a page that acts as a hub for the celestial catalogue which allows the purchacing of planets">
    <meta name="robots" content="noindex, nofollow">
    <title>Final Project | Celestial Catalogue</title>

    <!-- custom fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&family=Titan+One&display=swap" rel="stylesheet">


    <!-- css stylesheets -->
    <link rel="stylesheet" href="./styles/navAndfoot.css">
    <link rel="stylesheet" href="./styles/page_style.css">
    
  </head>


    <body>
        <header>
            <!-- nav menu for catalogue -->
            <div class="navMenu1">
            <input id="nav1" type="checkbox">
            <div>
            <label for="nav1">Navigation</label>

            <nav>
                <menu>
                    <li><a href="index.php">Homepage</a></li>
                    <li><a href="catalogue.php">Catalogue</a></li>
                    <li><a href="index.php">About us</a></li>
                </menu>
            </nav>
            </div>
            </div>
        
            <!-- main logo -->
            <a href="index.php"><img src="./img/saturn2.png" alt="header logo"></a>
        
            <!-- nav menu for user settings (log in / sign up / admin menu) -->
            <div class="navMenu2">
            <input id="nav2" type="checkbox">

            <div>
            <label for="nav2">Account</label>
            <nav>
                <menu>
                    <li><a href="index.php">Sign In</a></li>
                    <li><a href="addToPage/logout.php">Log Out</a></li>
                    <li><a href="admin_page.php">View Admin Page</a></li>
                </menu>
            </nav>
            </div>
            </div>
        </header>
    </body>