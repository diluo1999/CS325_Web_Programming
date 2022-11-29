<!--
    File: Lab5_dluo22.php
    Name: Di Luo
    Class: CS 325, January 2022
    Lab: 5
    Due data: Jan. 12, 2022
-->
<!DOCTYPE html>
<html lang="en">
    <head> 
        <title>User Comments</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="Lab5_dluo22.css" />
    </head>
    <body>
        <h1>User Comments</h1>

        <?php
        if( $_POST["name"]!=NULL && $_POST["comment"]!=NULL ) {
            $name = $_POST["name"];
            $comment = $_POST["comment"];
            $time = date("D M j Y, h:i a");
            $comment_element = "<div class=\"comment_block\">
            <div class=\"comment\">
                $comment
            </div>
            <div class=\"name\">
                <em>$name</em>
            </div>
            <div class=\"time\">
                <em>$time</em>
            </div>
            </div>";
            // echo $comment_element;
            file_put_contents('comments.txt', $comment_element, FILE_APPEND); // permission of writing from server is needed.
        }
        else {
        	echo "<div class=\"error\">
    			Error: To post a comment you need to enter both a name and comment
        	</div>";
        }
        // $current_comments = file('comments.txt');
//         $current_comments = array_reverse($current_comments);
//         foreach($current_comments as $current_comment){
//             echo $current_comment;
//         }
        ?>

        <form action="Lab5_dluo22.php" method="post">
            <fieldset>
                <legend>Add a comment</legend>
                <dl>
                    <dt>Name</dt>
                    <dd>
                        <input type="text" name="name" placeholder="enter your name" />
                    </dd>
                    <dt>Comment</dt>
                    <dd>
                        <textarea name="comment" placeholder="enter a comment" rows="5" cols="50"></textarea>
                    </dd>
                </dl>
                <div id="submitDiv">
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                </div>
            </fieldset>
        </form>
    </body>
</html>

<?php
file_put_contents('Lab5_dluo22.html', $)
?>