<?php
    session_start();
    if(!isset($_SESSION['login'])) {
        header('LOCATION:main.php'); die();
    }
?>
<html>
    <head>
        <title>Admin Page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body class="container jumbotron" style="font-size: 50px; text-align: center;">
        This is user page view able only by logged in <strong><span class="gpyphicon glyphicon-heart"></span>USER.</strong>
        <a class="alert alert-warning" href="mainpage.html"> ACCESS WEBSITE </a>
    </body>
</html>
