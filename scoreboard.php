<?php
require 'class/class.Head.php';
require 'class/class.Header.php';
include 'database.php';
private $database;

$myhead=new Head();
$myhead->addhead('stylesheet','css/main.css','BloodLess Studio: Scoreboard','UTF-8',1);
echo $myhead->getaddhead();

$myheader=new Header();
$myheader->addheader(1);
echo $myheader->getaddheader();

//Get Heroku ClearDB connection information
$cleardb_url = parse_url("mysql://be89b74cd405c2:2d67980f@eu-cdbr-west-02.cleardb.net/heroku_9abe1d6d35f5f58?reconnect=true");
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);

$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);


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