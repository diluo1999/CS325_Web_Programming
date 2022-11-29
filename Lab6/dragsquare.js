/*
    File: dragsquare.js
    Name: Di Luo
    Class: CS 325, January 2022
    Lab: 6
    Due data: Jan. 15, 2022
*/

"use strict;"

window.onload = function () {
    let rectangleArea = document.getElementsByClassName('rectanglearea')[0];
    let square = document.createElement("div");
    square.className = 'rectangle';
    square.style.top = Math.random()*250 + "px";
    square.style.left = Math.random()*750 + "px";
    square.style.backgroundColor = "#" + Math.floor(Math.random()*16777215).toString(16);
    rectangleArea.appendChild(square);

    var mouseStatus = 0;

    square.onmousedown = function (event) {
        mouseStatus = 1;
        square.style.top = event.clientY - 75 + "px";
        square.style.left = event.clientX - 45 + "px";
    }

    square.onmousemove = function (event) {
        if (mouseStatus == 1) {
            square.style.top = event.clientY - 75 + "px";
            square.style.left = event.clientX - 45 + "px";
        }
    }

    square.onmouseup = function (event) {
        mouseStatus = 0;
    }
}