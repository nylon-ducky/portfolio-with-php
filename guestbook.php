<?php
require 'procedures/connect-to-db.php';
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.3.1/p5.min.js" integrity="sha512-gQVBYBvfC+uyor5Teonjr9nmY1bN+DlOCezkhzg4ShpC5q81ogvFsr5IV4xXAj6HEtG7M1Pb2JCha97tVFItYQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--  OLD FONT
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"> 
    -->

    <!-- MY STYLE -->
    <link rel="stylesheet" href="style.php" media="screen">

    <!-- p5 BACKGROUND SCRIPT -->
    <script defer src="background.js?<?php echo time();?>"></script>

    <!-- MAIN SCRIPT -->
    <script defer src="app.js"></script>
    <title>Guest Book</title>
</head>

<body>
    <div class="main">

        <!-- DD HEADER -->
        <header class="head-container">
            <a href="index.php" tabindex="0">
                <h1 class="head">Developing Durso</h1>
            </a>
        </header>
        <!-- NAV -->
        <nav>
            <a href="index.php">Home</a>
            <a href="projects.php">Projects</a>
            <a href="aboutme.php">About Me</a>
            <a href="guestbook.php">Guest Book</a>
        </nav>

        <h2 id="instructions">Please sign the guest book for access.</h2>

        <!-- FORM TO SIGN GUEST BOOK -->
        <div class="addpost">
            <form id="postForm" method="POST" action="procedures/add-to-db.php">
                <label class="labels" for="name">Name or Handle: </label>
                <br />
                <input type="text" name="name" id="name">
                <br />
                <label class="labels" for="message">Message: </label>
                <br />
                <textarea id="message" name="message" rows="10" cols="20"></textarea>
                <br />
                <button name="submit" id="submit" value="submit">Post</button>
            </form>
        </div>

    </div>
</body>

</html>


