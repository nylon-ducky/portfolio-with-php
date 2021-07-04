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
    <script src="background.js"></script>

    <!-- MAIN SCRIPT -->
    <script src="app.js"></script>

    <title>Projects</title>
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
        <nav id="nav">
            <a href="index.php">Home</a>
            <a href="projects.php">Projects</a>
            <a href="aboutme.php">About Me</a>
            <a href="guestbook.php">Guest Book</a>
        </nav>


        <div class="projects">

            <h2>PHP Recipes</h2>

            <div class="buttons">
                <a class="viewlive" href="https://manicmechanic.netlify.app/index.html">View Live</a>

                <button class="readmore" onclick="readMore()" >Read More</button>
            </div>
        
        </div>



        <div class="projects" id="mechanic">

            <h2>Manic Mechanic</h2>

            <div class="buttons">
                <a class="viewlive" href="https://manicmechanic.netlify.app/index.html">View Live</a>

                <button class="readmore" onclick="readMore(mtxt)" >Read More</button>
            </div>

            <img id="mechanicdesktop" src="assets/mmdesktop.png">

            <p>
                This was a fun project to make, and it was one of the first full fledged websites I built. It was a great experience and really let me work on my design skills.
            </p>
                
            <div id="mtxt">
                <p>
                    This is just a static website designed for a fictional business. I really just wanted to build a full, realistic site thats better than what a lot of my local mechanics have.  
                </p>

                <p>
                    For this project I used some jQuery and Bootstrap as well as the <a href="https://formsubmit.co/">formsubmit.co</a> action attribute to have the form data sent directly to an email address that I made specifically for this website. I decided to go with this because I thought it would more than likely, be what a local mechanic would want from a website. This way there's no need for a back end and no need for paid hosting. But still allows clients to schedule an appointment (in the very loose fashion that my local mechanics do) and contact them with questions or commendation. 
                </p>
                <button class="readless" onclick="readLess(mtxt)">Read Less</button>
            </div>

        </div>



    </div>


    <script>

    let mtxt = document.getElementById('mtxt');


    function readMore(eID) {

       eID.style.display = "block";
       
    }

    function readLess(eID) {

       eID.style.display = "none";
       
    }

    </script>
</body>

</html>