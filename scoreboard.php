<?php
require 'class/class.Head.php';
require 'class/class.Header.php';
include 'database.php';
global $database;

$myhead=new Head();
$myhead->addhead('stylesheet','css/main.css','BloodLess Studio: Scoreboard','UTF-8',1);
echo $myhead->getaddhead();

$myheader=new Header();
$myheader->addheader(1);
echo $myheader->getaddheader();

$querry = $database->query("SELECT * FROM `scoreboard` ORDER BY `Time`,`Score` DESC,`Nb_games`,`Date`");

$rank = 1;

echo "
<p style='margin-top:60px;'>
<div class='card border border-dark mx-2 mb-2 vh-100'>
<h4 class='card-header bg-dark text-light justify-content-center'>Scoreboard Artificial Psycho</h4>
<div class='card-body bg-secondary h-auto'>
<table class='table table-striped table-dark'>
  <thead>
    <tr>
      <th scope='col'>#</th>
      <th scope='col'>Name</th>
      <th scope='col'>Time</th>
      <th scope='col'>Score</th>
      <th scope='col'>Games</th>
      <th scope='col'>Date</th>
    </tr>
  </thead>
  <tbody>
";

while ($line = $querry->fetch_assoc()){
    echo"
      <tr>
      <th scope='row'>$rank</th>
      <td>".$line["Name"]."</td>
      <td>".$line["Time"]."</td>
      <td>".$line["Score"]."</td>
      <td>".$line["Nb_games"]."</td>
      <td>".$line["Date"]."</td>
    </tr>";
    $rank++;
}

?>
</tbody>
</table>
</div>
</div>
</body>
</html>

