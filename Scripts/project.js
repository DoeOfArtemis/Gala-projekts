let numberOfCircles = 4,
    colors = [],
    pickedColor,
    resetButton,
    colorDisplay,
    messageDisplay,
    circles;

//Set up game base
function loadGame(){
    resetButton = document.querySelector('#reset');
    colorDisplay = document.querySelector('#colorDisplay');
    messageDisplay = document.querySelector('#message');
    circles = document.querySelectorAll('.circle');
    setUpCircles();
    reset();
    resetButton.addEventListener("click", function(){
        reset();
    })
}

//Set up first colors, give option to change colors
function reset(){
    colors = generateRandomColors(numberOfCircles);
    pickedColor = pickColor();
    colorDisplay.textContent = " " + pickedColor;

    for (let i=0; i < circles.length; i++) {
        if(colors[i]){
            circles[i].style.display = "block";
            circles[i].style.backgroundColor = colors[i];
        } else{
            circles[i].style.display = "none";
        }

        messageDisplay.textContent = "";
        resetButton.textContent = "Citas krāsas";
    }
}

//Set events that happen when clicking on circles
function setUpCircles(){
    for (let i=0; i < circles.length; i++) {
        circles[i].addEventListener("click", function(){
            var clickedColor = this.style.backgroundColor;

            //If the color in the clicked circle matches RGB code, output message and change colors
            if (clickedColor === pickedColor){
                messageDisplay.textContent = "Pareizi!";
                resetButton.textContent = "Spēlēt vēlreiz";
                changeColors(clickedColor);
            } else {
                //If colors don't match, circle takes on background color
                this.style.backgroundColor = "rgb(54, 54, 54)";
                messageDisplay.textContent = "Mēģini vēlreiz";
            }
        })
    }
}

//Change color of all circles to equal
function changeColors(color){
    for (var i=0; i < circles.length; i++){
        circles[i].style.backgroundColor = color;
    }
}

//Generate color to find
function pickColor(){
    let random = Math.floor(Math.random() * colors.length);
    return colors[random];
}

//Generate colors of all circles
function generateRandomColors(num){
    let arr = [];
    for (var i=0; i < num; i++){
        arr.push(randomColor());
    }
    return arr;
}

//Generates random color
function randomColor(){
    let r = Math.floor(Math.random()*256);
    let g = Math.floor(Math.random()*256);
    let b = Math.floor(Math.random()*256);
    return "rgb("+r+","+g+","+b+")";
}