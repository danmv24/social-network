<?php 
      if(!isset($_SESSION)) 
      { 
          session_start(); 
      }

    echo <<<_INIT
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel='stylesheet' href='css2/style.css'>
            <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.css">
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
            <script src="http://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.js"></script>
            <script src='javascript.js'></script>
_INIT;

    require_once 'functions.php';


    $userstr = "Welcome Guest";

    if (isset($_SESSION['user']))
    {
        $user = $_SESSION['user'];
        $loggenin = TRUE;
        $userstr = "Logged in as: $user";
    }
    else $loggenin = FALSE;

    echo <<<_MAIN
        <titel>Social Network</title>
    </head>
    <body>
        <div data-role="page">
        <div data-role="header">
            <div id="logo" class="center">S<img id="robin" src="images/img.png">cial Network</div>
            <div class="username">$userstr</div>
        </div>
        <div data-role="content">
_MAIN;

    if ($loggenin)
    {
        echo <<<_LOGGENIN
        <div class="center">
            <a data-role='button' data-inline='true' data-icon='home' data-transition='slide' href='members.php?view=$user'>Home</a>
            <a data-role='button' data-inline='true' data-transition='slide' href='members.php'>Members</a>
            <a data-role='button' data-inline='true' data-transition='slide' href='friends.php'>Friends</a>
            <a data-role='button' data-inline='true' data-transition='slide' href='messages.php'>Messages</a>
            <a data-role='button' data-inline='true' data-transition='slide' href='profile.php'>Edit Profile</a>
            <a data-role='button' data-inline='true' data-transition='slide' href='logout.php'>Log out</a>
        </div>
_LOGGENIN;
    }
    else
    {
        echo <<<_GUEST
        <div class="center">
        <a data-role='button' data-inline='true' data-icon='home' data-transition='slide' href='index2.php'>Home</a>
        <a data-role='button' data-inline='true' data-icon="plus" data-transition='slide' href='signup.php'>Sign Up</a>
        <a data-role='button' data-inline='true' data-icon="check" data-transition='slide' href='login.php'>Log In</a>
        </div>
        <p class="info">(You must be logged in too use this app)</p>
_GUEST;
    }

?>