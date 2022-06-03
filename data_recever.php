<?php
if (isset($_POST['Pseudo'])) {
    $data = $_POST['Pseudo'];
    echo "Test Passed, Variables : ".$data;
}
echo 'Works';

//$database->query("INSERT INTO `scoreboard` (`Name`,`Time`,`Score`,`Date`) VALUES ('$pseudo','$time',$score,now())");
?>