<?php
include 'database.php';
global $database;

if (!empty($_POST))
{
    var_dump($_POST);
    $pseudo = $_POST['Name'];
    $time = $_POST['Time'];
    $score = $_POST['Score'];
/*
if (isset($_POST['Pseudo'])) {
    $data = $_POST['Pseudo'];
    echo "Test Passed, Variables : ".$data;
}
*/
    $sql = "INSERT INTO `scoreboard` (`Name`,`Time`,`Score`,`Date`) VALUES (?,?,?,now())";
    $database->prepare($sql)->execute([$pseudo, $time, $score]);
}
//$database->query("INSERT INTO `scoreboard` (`Name`,`Time`,`Score`,`Date`) VALUES ('$pseudo','$time',$score,now())");
?>