<?php
/*
    File: Lab8_dluo22.php
    Name: Di Luo
    Class: CS 325, January 2022
    Lab: 8
    Due data: Jan. 19, 2022

    Receive the AJAX requests, randomly choose an image, 
    and send the data to the browser
*/

$list_pic = glob("img/*.jpg");
$rand_pic_idx = rand(0, count($list_pic)-1);
echo $list_pic[$rand_pic_idx];

?>