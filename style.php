<?php header("Content-type: text/css"); ?>
body {
    box-sizing: border-box;
    width: 100vw;
    height: 100vh;
    margin: 0;
    padding: 0;
    color: rgb(0, 0, 0);
    background-color: black;
    font-family: Verdana, sans-serif;
    font-weight: bold;
    font-size: 1.5em;
    overflow-x: hidden;
}

#canvas {
    z-index: -10;
}

.main {
    position: absolute;
    width: 70vw;
    margin: 10vw ;
    padding: 2vw 5vw 5vw;


    
    background-color: rgba(245, 245, 245, 0.65);
    box-shadow: 0 0 10px 5px rgba(245, 245, 245, 0.5);
    backdrop-filter: blur( 2px );
    -webkit-backdrop-filter: blur( 4px );
    border-radius: 20px;
    border: 1px solid rgba(245, 245, 245, 0.25);
    /*
    background-color: rgba(245, 245, 245, 0.75);
    border-radius: 20px;
    */
}

*:focus {
    border: 5px solid rgb(18, 66, 172);
    text-decoration: red underline;

}

h1 {
    font-family: 'Miss Fajardose', cursive;
    font-size: 5em;
    font-weight: bold;
    margin: 0;
    word-spacing: 1em;
    text-shadow:1px 2px 4px #ffffff;
}



a {
    text-decoration: none;
    color: rgb(0, 0, 0);
}

nav, nav > a {
    display: flex;
    justify-content: space-evenly;
    margin: 1.5vh 0;
    color: white;
    
}

nav {
    background-color: rgba(0, 0, 0, 0.75);
    border-radius: 20px;
    
}

.head {
    display: flex;
    justify-content: space-evenly;
    margin: auto;
}

h2 {
    font-size: 2.25em;
    margin: 0;
}

small {
    font-size: 1.25rem;
}

.intro {
    margin: auto;
}

#contact {
    
    text-align: left;
    margin: auto;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

#contact h3 {
    margin-bottom: 0;
}

.underline {
    text-decoration: underline;
}

#instructions {
    font-size: 1.25em;
    text-align: center;
    padding-bottom: 15px;
    
}


.addpost {
    width: 65vw;
    margin: auto;
    border-radius: 10px;
    background-color: rgba(26, 95, 224, 0.5);
    padding: 2vh 0;
    /*rgba(93, 185, 241, 0.85);
    */
    
}

#postForm > *{
    display: flex;
    justify-content: center;
    width: 55vw;
    margin: auto;
    border-radius: 5px;
    color: white;
    font-weight: bold;
    font-size: 22.5px;
    
}

.label {
    font-size: 22.5px;
    
}

#name, #message {
    margin-top: -10px;
    font-size: 22.5px;
    padding: 15px;
    border: none;
    box-shadow: 0 0 10px 2px rgb(1, 33, 139) inset;
    background-color: rgba(92, 179, 230, 0.35);

    text-align: center;
}

#name {
    height: 30px;
}


#submit {
    width: 80px;
    height: 40px;
    line-height: 40px;
    font-size: 22.5px;
    font-weight: bold;
    border: none;
    box-shadow: 0 0 10px 3px rgb(1, 33, 129) inset;
    background-color: rgba(92, 179, 230, 0.822);
    
}

#guestBook { 
    font-size: 1.5em;
    font-weight: bolder;
}

