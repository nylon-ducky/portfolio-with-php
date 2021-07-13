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
    
    width: 70vw;
    margin: 4vh auto;
    padding: 2vw 5vw;


    
    background-color: rgba(245, 245, 245, 0.65);
    box-shadow: 0 0 10px 5px rgba(255, 255, 255, 0.65);
    backdrop-filter: blur( 2px );
    -webkit-backdrop-filter: blur( 4px );
    border-radius: 20px;
    border: 1px solid rgba(245, 245, 245, 0.25);
    
}

*:focus {
    border: 5px solid rgb(18, 66, 172); 
    outline: 5px solid white;
    text-decoration: red underline;

}

h1 {
    font-family: 'Miss Fajardose', serif;
    font-size: 5em;
    font-weight: bold;
    margin: 0;
    word-spacing: .5em;
    text-shadow:1px 2px 4px #ffffff;
}

#headlink:focus {
    border: 5px solid rgb(18, 66, 172); 
    outline: 5px solid white;
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
    text-align: center;
}

.intro > #pintro {
    text-align: center;
}

#contact {
    
    text-align: center;
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


/* Guest Book */


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
    text-decoration: none;
    
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


/* ABOUT ME PAGE */

article p {
    width: 60vw;
    margin: auto;
    max-width: 50ch;
}

#hello {
    margin: 50px auto;
}

#hello, h3, h4, h5 {
    text-align: center;
    font-size: 2em;
}

#me {
    display: block;
    text-align: center;
    font-size: 1.25em;
}

footer {
    text-align: right;
}


.tooltip {
  position: relative;
  display: inline;
  border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 150px;
  background-color: #555;
  color: #fff;
  text-align: center;
  padding: 5px 0;
  border-radius: 6px;

  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -60px;

  /* Fade in tooltip */
  opacity: 0;
  transition: opacity 0.3s;
}

.tooltip .tooltiptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
  opacity: 1;
  font-size: .75em;
}


/* PROJECTS PAGE */


.projects {
    width: fit-content;
    margin: 4vh auto;
}

.projects h2 {
    font-size: 1.75em;
    text-align: center;
}

.projects img {
    margin: 2vh auto;
    display: flex;
    justify-content: center;
}

.projects small {
    display: block;
    font-size: .75em;
    width: 47vw;
    text-align: center;
}

.projects p {
    font-size: 1em;
    width: 47vw;
    margin: auto;
}

.projects p a {
    text-decoration: underline;
}

.buttons {
    display: flex;
    justify-content: space-evenly;
    width: 47vw;
    height: 40px;
    margin: 0 auto;
    
}

.viewlive, .readmore, .readless {
    display: flex;
    justify-content: space-evenly;
    vertical-align: center;
    margin: 10px auto 0;
    padding: 6px;
    
    line-height: 15px;

    border: 1px solid black;
    border-radius: 10px;

    font-family: "Arial Black", sans-serif;
    font-size: 1em;

    cursor: pointer;

}

.viewlive {
    background-color: rgba(255, 0, 0, .55);
}

.readmore {
    background-color: rgba(92, 179, 230, 0.55);
    
}

.readless {
    background-color: rgba(255, 255, 255, 0.55);
}

#mtxt, #w2txt, #wtxt, #mclock, #mcalc, #mcloud, #mwhale, #mrecipes {
    display: none;
}

.recipeHome {
    width: 47vw;
    height: 25vw;
}

#mechanic img {
    width: 47vw;
    height: 25vw;
}

#weatherwheel img {
    width: 40vw;
    height: 40vw;
}

#cweather img {
    width: 40vw;
    height: 36vw;
}

#cloudHopper img, #whale img {
    width: 35vw;
    height: 50vw;
}

#clock img {
    width: 45vw;
    height: 40vw;
}

#calculator img {
    width: 40vw;
    height: 40vw;
}


@media screen and (max-width: 950px) {

    h1 {
        font-size: 4.5em;
        word-spacing: .25em;
    }
    

}

@media screen and (max-width: 760px) {
    h1 {
        font-size: 3.5em;
        word-spacing: .25em;
    }

    nav a {
        font-size: 18px;
    }

    .viewlive, .readless, .readmore {
        font-size: .75em;
    }


}


@media screen and (max-width: 600px) {
    h1 {
        font-size: 3em;
        word-spacing: 0em;
        
    }

    nav a {
        font-size: 12px;
    }

    .main {
        width: 80vw;
        margin: 4vh 5vw;
    }

    p {
        width: 70vw;
        margin: auto;
    }

    .projects p {
        width: 70vw;
    }

    .viewlive, .readless, .readmore {
        font-size: .75em;
    }
    
    .buttons {
        width: 60vw;
    }
}

@media screen and (max-width: 401px) {
    h1 {
        font-size: 2.5em;
    }

    .viewlive, .readless, .readmore {
        font-size: 15px;
        
    }

    .buttons {
        width: 60vw;
    }
}

@media screen and (max-width: 350px) {
    
    body {
        font-size: .75em;
    }
    
    h1 {
        font-size: 3em;
        word-spacing: 0;
    }

    nav a {
        font-size: .5em;
    }

    #canvas {
        width: 100vw;
        height: 100vh;
    }
    
    .main {
        position: fixed;
        width: 90vw;
        height: 97vh;
        margin: auto;
        
        border-radius: 0;
        overflow: scroll;
    }

    .projects img{
        display: block;
        transform: scale(1.5);
        margin: 10vh auto;
    }

    .projects p {
        width: 80vw;
    }

    #rmobile {
        transform: scale(.75);
        margin: -25px -15px;
    }

    article p {
        width: 80vw;
        margin: auto;
    }

    #hello {
        margin: 15px auto;
    }

    .addpost {
        width: 85vw;
        text-align: center;
    }

    .viewlive, .readless, .readmore {
        font-size: 15px;
        
    }

    .buttons {
        width: 70vw;
    }

}

@media screen and (max-width: 280px) {
    .viewlive, .readless, .readmore {
        font-size: 8px;   
    }

    .buttons {
        width: 90vw;
    }

}
