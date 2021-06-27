

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Miss+Fajardose&display=swap" rel="stylesheet">

    <!-- p5 JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.3.1/p5.min.js"
        integrity="sha512-gQVBYBvfC+uyor5Teonjr9nmY1bN+DlOCezkhzg4ShpC5q81ogvFsr5IV4xXAj6HEtG7M1Pb2JCha97tVFItYQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"> 
    -->
    <link rel="stylesheet" href="style.php" media="screen">
    <script src="background.js"></script>
    <script defer src="app.js"></script>
    <title>Developing Durso</title>
</head>

<body>
    <div class="main">

        <header class="head-container">
            <a href="index.html" tabindex="0">
                <!--  <img class="head" src="Zlogo.png">  -->
                <h1 class="head">Developing Durso</h1>
            </a>
        </header>

        <nav>
            <a href="index.php">Home</a>
            <a href="projects.html">Projects</a>
            <a href="aboutme.html">About Me</a>
            <a href="guestbook.php">Guest Book</a>
        </nav>

        <div class="addpost">
            <form id="postForm" method="POST" action="guestbook.php">
                <label for="name">Name or Handle: </label>
                <br/>
                <input type="text" name="text" id="name">
                <br/>
                <label for="message">Message: </label>
                <br/>
                <textarea id="message" name="message" rows="10" cols="20"></textarea>
                <br/>
                <button name="submit" id="submit" onclick="postName()">Post</button>
            </form>
        </div>

        <div id="guestBook">
            <?php 
                 
                 
                 function postName() {
                 //$posts = array();
                 $name = $_POST['name'];
                 $message = $_POST['message'];
                 
                 $whole = '<div class="card"><header class="posterNames">' . $name . '</header><br/><p class="posterMessage">' . $message . '</p></div>';
                 
                 echo $whole;
                 
                 }
                         
            ?>
        </div>

    
        

    </div>
</body>

</html>
