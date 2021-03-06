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

        <div class="projects" id="hellodurso">

            <h2>Hello Durso</h2>

            <div class="buttons">
                <a class="viewlive" href="https://github.com/nylon-ducky/portfolio-with-php">View Code</a>

                <button class="readmore" onclick="readMore(mdurso)">Read More</button>
            </div>

            <img class="dursohome" src="assets/hellodurso.png">

            <p>
                Making this website was a really fun experience. It was my first time using p5.js and was my second project using PHP. I found that I really love working with PHP but don't particularly care for p5. I ran into a few issues using p5.js, but nothing I couldnt handle. I used it to make the dynamic background which I really love because I think it looks like a finger print, which is really representative of one's individuality.
            </p>

            <div id="mdurso">
                <img id="Dmobile" src="assets/hellomobile.png">

                <p>
                    For this website, I wanted a really cool background, so I decided it would either be with Three.js or p5.js and decided on using p5 because I really wanted something that could be different every time you visit, and I could honestly watch this animation all day. I found out that p5 was a bit slow, but with some creative problem solving, I was able to remediate that by controling the amount of frames it goes through, based on screen size. The issue was that it would load fine on a laptop, but on a mobile device (even one with really good specs) it made the website nearly unusable. So by controling the amount of frames with screen size, I was ablle to make it run for a much shorter time on mobile, but still get a nice design, while maintaining an awesome look on PC. 
                </p>

                <p>
                    Working with PHP has been really exciting, it's what I used to do the <a href="guestbook.php">Guest Book</a> on this website and also for the Recipe App project below. It's been pretty simple so far which was absolutely not what I expected, but at the same time, I dont know any othe rback end languages, so I have nothing to compare it to. However, My next language will be Python, so once I start building with that, I'll be able to equitably compare the two.
                </p>

                <img id="Dhalf" src="assets/hellodursohalf.png">

                <button class="readless" onclick="readLess(mdurso)">Read Less</button>

            </div>
        </div>

        <div class="projects" id="recipes">

            <h2>PHP Recipes</h2>

            <div class="buttons">
                <a class="viewlive" href="https://github.com/nylon-ducky/a11y">View Code</a>

                <button class="readmore" onclick="readMore(mrecipes)">Read More</button>
            </div>

            <img class="recipeHome" src="assets/recipe-home.png">

            <p>
                I had a lot of fun making this recipe app because it was my first PHP project. It may not look pretty but it is very functional. You can add a recipe to the database, and it will automatically display on the home page, and it uses the Edamam API so you can search for more specific recipes. Also, because of the super simple design, it's mobile friendly!
            </p>

            <div id="mrecipes">
                <img id="rmobile" src="assets/recipemobile.png">

                <p>
                    As my first PHP project, I was able to learn a lot! I created a database and a table, connected to them, and saved some form input. It may not be super exciting to a pro, but for me, who didnt know a thing about php before this, it's really pretty cool!
                </p>

                <p>
                    There's still a lot more I could do with this, like add something like a shopping cart to round up some recipes for a whole meal or just spend more time on styling, and I very well may go back and do that, but for now, I have another PHP project that I'm really excited to start! This project was more or less just to get to know PHP and see how quickly I could pick it up. Now that I know where I stand, I can't wait to put it to use.
                </p>

                <p>
                    This project is not deployed yet, so unfortunately you can only look through the code for now.
                </p>

                <img class="recipeHome" src="assets/recipes.png">
                
                <button class="readless" onclick="readLess(mrecipes)">Read Less</button>
            </div>

        </div>



        <div class="projects" id="mechanic">

            <h2>Manic Mechanic</h2>

            <div class="buttons">
                <a class="viewlive" href="https://manicmechanic.netlify.app/index.html">View Live</a>

                <button class="readmore" onclick="readMore(mtxt)">Read More</button>
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

                <img id="mechanicmobile" src="assets/mechmobile.png">

                <button class="readless" onclick="readLess(mtxt)">Read Less</button>
            </div>
        </div>


        <div class="projects" id="weatherwheel">

            <h2>Weather Wheel</h2>

            <div class="buttons">
                <a class="viewlive" href="https://weather-2-0.hostman.site/">View Live</a>

                <button class="readmore" onclick="readMore(w2txt)">Read More</button>
            </div>

            <img src="assets/weatherwheel.png">

            <p>
                The Weather Wheel is my second project using the Open Weather API, and my first time using a carousel.
                I wanted to display the weather data on some cards in a 3D carousel, so Here it is!
            </p>

            <div id="w2txt">
                <p>
                    The 3D carousel was a bit of a challenge at first, but I managed to do it with some help from Google.
                    It was a really fun project to make and I still really love the idea, but it could benefit quite a lot from some improvement.
                </p>

                <p>
                    If I were to put some more time into this project, I would like to make it responsive, make the cards bigger, and make it look like the carousel it's self was glowing and floating above a shiny floor. I would also probably remove the rotate button entirely and have it so that you could click anywhere to make it rotate or tap anywhere on the screen for mobile. What I did do before including it here, was I went back and made a few quick adjustments. The cards weren't spaced apart evenly and the rotation was off, so I fixed those two things and I think it looks a lot better because of it.
                </p>

                <button class="readless" onclick="readLess(w2txt)">Read Less</button>

            </div>
        </div>

        <div class="projects" id="cweather">

            <h2>Current Weather</h2>

            <div class="buttons">
                <a class="viewlive" href="https://relaxed-mcnulty-2c6a6a.netlify.app/">View Live</a>

                <button class="readmore" onclick="readMore(wtxt)">Read More</button>
            </div>

            <img src="assets/cweather.png">

            <p>
                This weather app was the first one I made using the Open Weather API.
                It's very basic, it asks for permission to use your location then uses the JavaScript fetch() API to retrieve the current weather data for your location.
            </p>

            <div id="wtxt">

                <p>
                    For this project, I watched a tutorial then followed the <a href="https://openweathermap.org/guide">documentation on Open Weather's website</a>. It wasnt much of a challenge, even for my first time working with an API, so I decided to do it again, but make it look better and use more of the data I had access to. The second version was much more fun and challenging.
                </p>

                <button class="readless" onclick="readLess(wtxt)">Read Less</button>

            </div>
        </div>

        <div class="projects" id="cloudHopper">

            <h2>Cloud Hopper</h2>

            <div class="buttons">
                <a class="viewlive" href="https://cloudhopper.hostman.site/">View Live</a>

                <button class="readmore" onclick="readMore(mcloud)">Read More</button>
            </div>

            <img src="assets/cloudhopper.png">

            <p>
                This is a fun little game I made with JavaScript. I was really proud of it at the time, but looking back at it now, I can see that it could also use some improvements.
            </p>

            <div id="mcloud">

                <p>
                    Cloud Hopper looks really cute in my opinion, but would benefit grately from some instructions on how to play (use the arrow keys to move left and right, and the up arrow key to stop moving) as well as something like a beginning game screen or pause screen, and some actual levels.
                </p>

                <p>
                    One thing this game does have going for it is that it displays your score once the game ends. The score is just based on how many platforms you were able to land on.
                </p>

                <button class="readless" onclick="readLess(mcloud)">Read Less</button>
            </div>
        </div>

        <div class="projects" id="whale">

            <h2>Whale</h2>

            <div class="buttons">
                <a class="viewlive" href="https://whale-d567.hostman.site/">View Live</a>

                <button class="readmore" onclick="readMore(mwhale)">Read More</button>
            </div>

            <img src="assets/whale.png">

            <p>
                This was another fun little JavaScript game I did in the earlier stages of my coding adventure. This one was more fun because there was some more complicated logic that I had to figure out, but it wasn't too difficult though, because I had access to a whole lot of documentation from so many other people doing their own versions of flappy bird.
            </p>

            <div id="mwhale">
                <p>
                    This game could also use the same improvements as Cloud Hopper. Instructions on how to play (use the space bar to jump) and another screen to display score, levels, and instructions.
                </p>

                <p>
                    I really enjoyed making this game and was able to learn a lot. Not only thanks to all the documentation on making javascript games like this, but because so many people had already done remakes of existing games, so there were plenty of guides for this game specifically.
                </p>

                <button class="readless" onclick="readLess(mwhale)">Read Less</button>
            </div>
        </div>


        <div class="projects" id="clock">

            <h2>Clock</h2>

            <div class="buttons">
                <a class="viewlive" href="https://eloquent-shaw-0c6c1d.netlify.app/">View Live</a>

                <button class="readmore" onclick="readMore(mclock)">Read More</button>
            </div>

            <img src="assets/clock.png">

            <p>
                This project was pretty fun, and was inspired by a video I saw from <a href="https://youtu.be/E4RyStef-gY">Coding Train</a>. It's pretty plain, nowhere near as cool as some of the ones he showed, but those were made with p5.js and I used p5 for the background of this website, so there might be a new, cooler clock coming soon!
            </p>

            <div id="mclock">
                <p>
                    The guy on Coding Train used p5.js to make a really cool looking clock and showed some other really awesome examples from the website he was inspired by. I however just used plain JavaScript and CSS because it was done pretty early on into my coding adventure.
                </p>

                <p>
                    I did try to do one thing to make it more interesting. I wanted the hour hand to display the time like a digital clock because I know some people can't read an analog clock. The time is also displayed in the top left hand corner just because the hour hand is a little squished.
                </p>
                <!--
                <p>
                    Overall I'm stil rather pleased with this clock, I think it looks cute, and I had a goal in mind and made it happen, so I'm proud of it. Especially because of my very limited knowlege at the time.
                </p>
                -->
                <button class="readless" onclick="readLess(mclock)">Read Less</button>
            </div>
        </div>

        <div class="projects" id="calculator">

            <h2>Calculator</h2>

            <div class="buttons">
                <a class="viewlive" href="https://distracted-beaver-2b89e9.netlify.app/">View Live</a>

                <button class="readmore" onclick="readMore(mcalc)">Read More</button>
            </div>

            <img src="assets/calculator.png">

            <p>
                This is a pretty simple calculator. It was one of the first projects I made when I started learning JavaScript, but I found the logic to be pretty challenging to write on my own, so after trying to do it on my own for an hour or two, I decided to follow a tutorial.
            </p>

            <div id="mcalc">

                <p>
                    I was surprised to find out after getting into the tutorial, that I was actually rather close to getting some parts of the logic written successfully when I was trying to do it on my own, but I had missed a few key things.
                </p>

                <p>
                    If I were to go back to this and make some improvements, I think the only things I would change are the fact that it doesnt show the math it did to get to the answer once it gets displayed, and I don't think I took account for the use of negative numbers, so thats something that would really need to be fixed before actually using this calculator.
                </p>

                <button class="readless" onclick="readLess(mcalc)">Read Less</button>

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