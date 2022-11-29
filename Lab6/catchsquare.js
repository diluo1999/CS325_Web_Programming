/*
    File: catchsquare.js
    Name: Di Luo
    Class: CS 325, January 2022
    Lab: 6
    Due data: Jan. 15, 2022
*/

"use strict;"

let num_success = 0;
let round_timer = 30;
let square_x = -1;
let square_y = -1;
let counter = 0;
let id;

window.onload = function () {
    setTimeout(game, 5000);
}

function game(){
    document.getElementById("message").remove();
    createSquare();    
    id = setInterval(moveSquare, 100);
}

function moveSquare(){
    let rectangleArea = document.getElementsByClassName('rectanglearea')[0];
    let square = rectangleArea.childNodes[0];
    square_x = square_x + Math.random()*60 - 30;
    square_y = square_y + Math.random()*60 - 30;
    square.style.left = square_x + "px";
    square.style.top = square_y + "px";
    square.style.backgroundColor = "#" + Math.floor(Math.random()*16777215).toString(16);
    counter += 1;
    if (counter>round_timer){
        clearInterval(id);
        let game_over = document.createElement("p");
        game_over.innerHTML = "Game Over";
        let rectangleArea = document.getElementsByClassName('rectanglearea')[0];
        rectangleArea.removeChild(rectangleArea.childNodes[0]);
        rectangleArea.appendChild(game_over);
    }
    document.getElementsByClassName('square')[0].onclick = function () {
        if (num_success == (30-round_timer)){
            num_success += 1;
            document.getElementById("result").innerHTML = "" + num_success;
            round_timer -= 1;
            counter = 0;
        }
    }
}

function createSquare(){
    let rectangleArea = document.getElementsByClassName('rectanglearea')[0];
    let square = document.createElement("div");
    square.className = 'square';

    if (square_x == -1 && square_y == -1){
        square_x = Math.random()*750;
        square_y = Math.random()*250;
    }
    else {
        square_x = square_x + Math.random()*60 - 30;
        square_y = square_y + Math.random()*60 - 30;
    }
    
    square.style.left = square_x + "px";
    square.style.top = square_y + "px";
    
    square.style.backgroundColor = "#" + Math.floor(Math.random()*16777215).toString(16);
    rectangleArea.appendChild(square);
}