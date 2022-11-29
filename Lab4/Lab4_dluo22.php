<!-- 
    File: Lab4_dluo22.php
    Name: Di Luo
    Class: CS 325, January 2022
    Lab: 4
    Due data: Jan. 10, 2022
-->

<!DOCTYPE html>
<html>
<head>
    <title>The 12 Days of Christmas</title>
    <!-- Stylesheet -->
    <link href="12days.css" type="text/css" rel="stylesheet"/>
    <?php
    $word[1] = "a partridge in a pear tree.";
    $word[2] = "two turtle doves,";
    $word[3] = "three french hens,";
    $word[4] = "four calling birds,";
    $word[5] = "five golden rings,";
    $word[6] = "six geese a-laying,";
    $word[7] = "seven swans a-swimming,";
    $word[8] = "eight maids a-milking,";
    $word[9] = "nine ladies dancing,";
    $word[10] = "ten lords a-leaping,";
    $word[11] = "eleven pipers piping,";
    $word[12] = "twelve drummers drumming,";
    $suffix = array("st", "nd", "rd", "th", "th", "th", "th", "th", "th", "th", "th", "th");
    ?>
</head>

<body>
<h1>
    <img src="tree.gif" alt="xmas tree"/>
    12 Days of Christmas
    <img src="tree.gif" alt="xmas tree"/>
</h1>

<div id="box">
    <?php
    for ($num_day = 1; $num_day <= 12; $num_day += 1) { // first loop: for each day
    ?>
    <div class="day">
        <p>
            On the
            <strong><?= $num_day ?></strong><?= $suffix[$num_day-1] ?>
            day of Christmas my true love gave to me...
        </P>
        <?php
        for ($num_type = $num_day; $num_type > 0; $num_type -= 1){ // second loop: for each group of items
            if ($num_day != 1 && $num_day != 2 && $num_type == 1){ // only first two days don't have "and " before "a partridge ..."
        ?>
            <p><?= "and ".$word[$num_type] ?></p>
            <?php
            }
            else {
            ?>
            <p><?= $word[$num_type] ?></p>
            <?php
            }
            ?>
        <div>
            <?php
            for ($num_pic = $num_type; $num_pic > 0; $num_pic -= 1){ // third loop: for each picture in the same group
            ?>
            <img src="gift<?= $num_type ?>.jpg" alt="an xmas gift" />
            <?php
            }
            ?>
        </div>
        <?php
        }
        ?>
    </div>
    <?php
    }
    ?>
</div>
</body>
</html>