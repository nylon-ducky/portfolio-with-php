<?php header("Content-type: text/css"); ?>
body {
    box-sizing: border-box;
    width: 100vw;
    height: 100vh;
    margin: 0;
    padding: 0;
    /*
    background: black url("gentletexture.jpg") no-repeat left top;
    background-size: cover;
    */
    color: rgb(0, 0, 0);
    background-color: black;
    font-family: Verdana, sans-serif;
    font-weight: bold;

    overflow-x: hidden;
}

.main {
    position: absolute;
    width: 70vw;
    margin: 10vw;
    padding: 2vw 5vw 5vw;


    
    background-color: rgba(245, 245, 245, 0.65);
    box-shadow: 0 0 10px 5px rgba(245, 245, 245, 0.5);
    backdrop-filter: blur( 1.5px );
    -webkit-backdrop-filter: blur( 4px );
    border-radius: 20px;
    border: 1px solid rgba(245, 245, 245, 0.25);
    /*
    background-color: rgba(245, 245, 245, 0.75);
    border-radius: 20px;
    */
}

/*
main > * {
    word-wrap:break-word;
}
*/

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


/*
#email {
    width:fit-content;
    text-align: center;
    margin: auto;
    color:whitesmoke;
    font-size: medium;
    background-color: rgba(245, 245, 245, 0);
    border: none;
    cursor: pointer;
}

#Elabel {
    font-size: x-small;
    width: fit-content;
    margin: auto;
}

*/