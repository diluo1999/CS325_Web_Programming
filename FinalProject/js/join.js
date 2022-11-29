/*
    File: join.js
    Name: Di Luo
    Class: CS 325, January 2022
    Final Project
    Due data: Jan. 27, 2022
*/

$(document).ready(function(){
    $("form").submit(function(event){
        $.ajax({
            url: "join.php",
            type: "POST",
            data: {name: $("#name").val(), email: $("#email").val(), 
                tshirt: $("#tshirt").val(), activity: $("#act").val(),
                time: $("#time").val()},
            success: function(result){
                alert(result);
            }
        });

        event.preventDefault();
        return false;
    });
});