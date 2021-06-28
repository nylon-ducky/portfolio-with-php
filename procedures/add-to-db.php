<?php

// REQUIRE CONNECTION
require 'connect-to-db.php';

// GET INPUT VALUES
$name = $_POST['name'];
$message = $_POST['message'];

// SQL QUERY
$sql = "INSERT INTO guestbook (name, message) VALUES ('$name', '$message')";

// INSERT AND ENSURE DATA WAS INSERTED SUCCESSFULLY
if($conn->query($sql) === TRUE) {
   // echo ' data inserted successfully';
} else {
    //echo ' an error occurred: ' . $conn->error;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- GOOGLE FONTS == MISS FAJARDOSE -->

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Miss+Fajardose&display=swap" rel="stylesheet">

    <!-- p5 JS CDN -->
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.3.1/p5.min.js"
        integrity="sha512-gQVBYBvfC+uyor5Teonjr9nmY1bN+DlOCezkhzg4ShpC5q81ogvFsr5IV4xXAj6HEtG7M1Pb2JCha97tVFItYQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"> 
    -->

    <!-- MY STYLE -->
    <link defer rel="stylesheet" href="../style.php" media="screen">
    
    <!-- p5 BACKGROUND SCRIPT -->
    <script defer src="../background.js"></script>
    
    <!-- MAIN SCRIPT -->
    <script src="../app.js"></script>
    <title>Developing Durso</title>
<body>
<div class="main">

<!-- DD HEADER -->
<header class="head-container">
    <a href="index.html" tabindex="0">
        <!--  <img class="head" src="Zlogo.png">  -->
        <h1 class="head">Developing Durso</h1>
    </a>
</header>

<!-- NAV -->
<nav>
    <a href="../index.php">Home</a>
    <a href="../projects.html">Projects</a>
    <a href="../aboutme.html">About Me</a>
    <a href="../guestbook.php">Guest Book</a>
</nav>

<!-- DISPLAY GUESTBOOK DATA -->
<div id="guestBook">
            <?php 
                require 'select-data.php';
            ?>
</div>
    
</div>
</body>
</html>


