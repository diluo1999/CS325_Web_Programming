/*
    File: Lab8_dluo22.js
    Name: Di Luo
    Class: CS 325, January 2022
    Lab: 8
    Due data: Jan. 19, 2022
*/

$(document).ready(function(){
    //Initialize the image using the data returned to the browser by the AJAX request
    $.ajax({
        url: "Lab8_dluo22.php",
        success: function(result){
            let img_element = "<img />";
            $("body").prepend(img_element);
            $("img").attr("src", result);
            $("img").attr("alt", "image"); 
        }
    });

    //Update the image using the data returned to the browser by the AJAX request
    $("button").click(function(){
        $.ajax({
            url: "Lab8_dluo22.php",
            success: function(result){
                $("img").attr("src", result);
            }
        });
    });
});