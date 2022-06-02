<?php
require 'class/class.Head.php';
require 'class/class.Header.php';
include 'database.php';
private $database;

$servername = 'eu-cdbr-west-02.cleardb.net';
$dbname = 'heroku_9abe1d6d35f5f58';
$username = 'be89b74cd405c2';
$password = '2d67980f';

$myhead=new Head();
$myhead->addhead('stylesheet','css/main.css','BloodLess Studio: Scoreboard','UTF-8',1);
echo $myhead->getaddhead();

$myheader=new Header();
$myheader->addheader(1);
echo $myheader->getaddheader();

// Create connection
$database = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($database->connect_error) {
  die("Connection failed: " . $database->connect_error);
} 


$querry = $database->query("SELECT * FROM scoreboard ORDER BY Time");

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
    </tr>
  </thead>
  <tbody>";

while ($line = $querry->fetch()){
    echo"
      <tr>
      <th scope='row'>$rank</th>
      <td>".$line["Name"]."</td>
      <td>".$line["Time"]."</td>
      <td>".$line["Score"]."</td>
      <td>".$line["Nb_games"]."</td>
    </tr>";
    $rank++;
}
echo"
  </tbody>
</table>
</div>
</div>
";

echo "</body></html>";
 
$database->close();
?>