/*
    File: Lab10_dluo22.js
    Name: Di Luo
    Class: CS 325, January 2022
    Lab: 10
    Due data: Jan. 25, 2022
*/

$(document).ready(function(){
    $("#command").submit(function(event){
        $.ajax({
            url: "Lab10_dluo22_sql.php",
            data: {command: $("textarea").val(), limit: $("#limit").is(":checked")},
            success: function(result){
                if (result.match(/\<table\>/)){
                    $("#notification").text("Database query \"" + $("textarea").val() + "\" was successful.");
                    $(".error").remove();
                    if ($("table").length){
                        $("table").html(result);
                    }
                    else{
                        $("h1").after(result);
                    }
                }
                else if(result.match(/Sorry, a database error occurred/)){
                    $("#notification").text("Database query \"" + $("textarea").val() + "\" was unsuccessful.");
                    $("table").remove();
                    $(".error").remove();
                    $("h1").after(result);
                }
                else{
                    $("#notification").text("Database query \"" + $("textarea").val() + "\" was unsuccessful. SELECT queries only.");
                    $("table").remove();
                    $(".error").remove();
                }
            }
        });

        event.preventDefault();
        return false;
    });
});