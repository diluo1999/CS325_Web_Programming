/*
    File: Lab7_dluo22.js
    Name: Di Luo
    Class: CS 325, January 2022
    Lab: 7
    Due data: Jan. 17, 2022
*/

$(document).ready(function(){
    // click example button will show example in Battle Tag textbox
    $("#example").click(function(){
        $("#bn_tag").attr("value", "tony1999#1234")
    });

    // uncheck checkbox and unselect all choices if radio is clicked
    $(".radio").click(function(){
        $("#hardcore").prop("checked", false);
        $("#fav_char1 option:selected").prop("selected", false);
        $("#fav_char2 option:selected").prop("selected", false);
    });

    // checkbox only available if number of char selected is larger than 0
    $("#hardcore").click(function(event){
        if (!$("#0").is(":checked") && !$("#1").is(":checked") && !$("#2").is(":checked") && !$("#over2").is(":checked")){
            alert("Pleace select the number of characters you have in previous session.");
            event.preventDefault();
        }
        else{
            if ($("#0").is(":checked")){
                alert("You don't have any character!");
                event.preventDefault();
            }
        }
    });

    // check bn tag input while focusout
    $("#bn_tag").focusout(function(){
        let str = $("#bn_tag").val();
        let result = str.match(/^[a-zA-Z0-9]{2,11}#[0-9]{4}$/);
        if (!result){
            alert("BattleNet Tag incorrect! Correct example: tony1999#1234");
        }
    });

    // check if the selection of 1st favorite char corresponds to the number of char
    $("#fav_char1").click(function(event){
        if (!$("#0").is(":checked") && !$("#1").is(":checked") && !$("#2").is(":checked") && !$("#over2").is(":checked")){
            alert("Pleace select the number of characters you have in previous session.");
            event.preventDefault();
        }
        else{
            if ($("#0").is(":checked")){
                alert("You don't have any character!");
                event.preventDefault();
            }
        } 
    });

    // check if the selection of the 2nd fav char corresponds to the number of char and the selection of 1st fav char
    $("#fav_char2").click(function(event){
        if (!$("#0").is(":checked") && !$("#1").is(":checked") && !$("#2").is(":checked") && !$("#over2").is(":checked")){
            alert("Pleace select the number of characters you have in previous session.");
            event.preventDefault();
        }
        else{
            if ($("#0").is(":checked")){
                alert("You don't have any character!");
                event.preventDefault();
            }
            else if ($("#1").is(":checked")){
                alert("You only have 1 character!");
                event.preventDefault();
            }
            else{
                if ($("#fav_char1").val()===""){
                    alert("Please select 1st favorite character class first.");
                    event.preventDefault();
                }
                else{
                    if ($("#fav_char1 option:selected").text()==$("#fav_char2 option:selected").text()){
                        alert("Same charactor class as the 1st one! Please select another one.");
                        event.preventDefault();
                    }
                }
            }
        } 
    });
})