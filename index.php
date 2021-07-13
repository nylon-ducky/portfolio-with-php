<?php 
//If the HTTPS is not found to be "on"
if(!isset($_SERVER["HTTPS"]) || $_SERVER["HTTPS"] != "on")
{
    //Tell the browser to redirect to the HTTPS URL.
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], true, 301);
    //Prevent the rest of the script from executing.
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
    <link rel="stylesheet" href="style.php?<?php echo time();?>" media="screen">

    <!-- p5 BACKGROUND SCRIPT -->
    <script defer src="background.js?<?php echo time();?>"></script>

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
            <a class="underline" href="mailto:Z@hellodurso.com">
            email</a> or checkout the 
            <a class="underline" href="guestbook.php">Guest Book</a>.
            </p>
            <a href="mailto:Z@hellodurso.com" class="underline">Z@hellodurso.com</a>
        </footer>
    </div>

</body>

</html>