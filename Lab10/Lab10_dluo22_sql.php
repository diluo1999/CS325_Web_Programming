<?php
/*
    File: Lab10_dluo22_sql.php
    Name: Di Luo
    Class: CS 325, January 2022
    Lab: 10
    Due data: Jan. 25, 2022
*/
session_start();

try {
    $db = new PDO("mysql:dbname=".$_SESSION["database"].";host=localhost", $_SESSION["name"], $_SESSION["password"]);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $command = $_GET["command"];
    if ($_GET["limit"]=="true"){
        $command.=" limit 10";
    }
    $command = $db->quote($command);
    $command = substr($command,1,-1);
    if (preg_match('/^select/i', $command)){
        $rows = $db->query($command)->fetchAll(PDO::FETCH_ASSOC);
    
        $returnText = "<table>";
        $count = 0;
        foreach ($rows as $row) {
            $returnText.="<tr>";
            if ($count==0) {
                foreach ($row as $key=>$value) {
                    $returnText.="<th>".$key."</th>";
                }
            }
            else{
                foreach ($row as $key=>$value) {
                    if (preg_match('/^([0-9]*|[0-9]*\.[0-9]*)$/', $value)){
                        $returnText.="<td class=\"number\">".$value."</td>";
                    }
                    else{
                        $returnText.="<td class=\"word\">".$value."</td>";
                    }
                }
            }
            $returnText.="</tr>";
            $count+=1;
        }
        $returnText .= "</table>";

        echo $returnText;
    }
    else{
        echo "";
    }
} 
  
catch (PDOException $ex) {
?>
    <p class="error">Sorry, a database error occurred. Please try again later.</p>
    <p class="error">(Error details: <?= $ex->getMessage() ?>)</p>

<?php
}
?>