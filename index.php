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

    <!--  OLD FONT
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"> 
    -->

    <!-- MY STYLE -->
    <link rel="stylesheet" href="style.php" media="screen">

    <!-- p5 BACKGROUND SCRIPT -->
    <script src="background.js"></script>

    <!-- MAIN SCRIPT -->
    <script defer src="app.js"></script>
    <title>Developing Durso</title>
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

        <!-- INTRODUCTION -->
        <div class="intro">
            <h2>
                <small>Hi, I'm</small>
                <br />
                Zach Durso
            </h2>
            <p id="pintro">A web developer with special interest in accessibility.</p>
        </div>

        <!-- CALL TO ACTION -->
        <footer id="contact">
            <h3>Look around!</h3>
            <p>
            Feel free to send me an 
            <a href="mailto:dursodev@gmail.com">
            email
            </a>, or checkout the 
            <a href="guestbook.php">Guest Book.</a>
            </p>
            <a href="mailto:dursodev@gmail.com" class="underline">dursodev@gmail.com</a>
            <a href="guestbook.php" class="underline">Guest Book</a>
        </footer>
    </div>

</body>

</html>