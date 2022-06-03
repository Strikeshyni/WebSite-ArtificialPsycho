<?php
if (isset($_POST['Pseudo'])) {
    $data = $_POST['Pseudo'];
    echo "Test Passed, Variables : ".$data;
}
echo 'Works';

//INSERT INTO `scoreboard` (`Name`,`Time`,`Score`,`Date`) VALUES ("Testeuuuur","00:10:10",051515,now());
?>