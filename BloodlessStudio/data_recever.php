<?php
if (isset($_POST['Pseudo'])) {
    $data = $_POST['Pseudo'];
    echo "Test Passed, Variables : ".$data;
}
echo 'Works';
?>