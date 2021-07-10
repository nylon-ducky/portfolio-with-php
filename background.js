 

    

     
let points = [];
let mult;

let main = document.getElementsByClassName('main');

let docHeight = window.innerHeight; //document.body.scrollHeight;



function setup() {
    frameRate(30);
    pixelDensity(1);
    
    let canvas = createCanvas(window.innerWidth, docHeight);
    canvas.position(0,0, 'fixed'); 
    canvas.id('canvas');
    background(0);
    //angleMode(DEGREES);
    noiseDetail(1);

    let density = random(20, 40);
    let space = innerWidth / density;

    for(let x = 0; x < innerWidth; x += space) {
        for( let y = 0; y < docHeight; y += space) {
            let p = createVector(x + random(-10, 10), y + random(-10, 10));
            points.push(p);
        }
    }

    mult = random(0.00275, 0.005);
    
    
}


function draw() {
    noStroke();

    console.log(frameCount);
    if(frameCount == 100) {
        noLoop();
    }
    
    for(let i = 0; i < points.length; i++) {

        let r = map(points[i].x, 0, innerWidth, 50, 255);
        let g = map(points[i].y, 0, docHeight, 50, 255);
        let b = map(points[i].x, 0, innerWidth, 255, 50);

        fill(r,g,b);

        let angle = map(noise(points[i].x * mult, points[i].y * mult), 0, 1, 0, 720);
        points[i].add(createVector(cos(angle), sin(angle)));


        ellipse(points[i].x, points[i].y, 1);
    }
    
}


function windowResized() {

    resizeCanvas(windowWidth, windowHeight);
    redraw()
}






