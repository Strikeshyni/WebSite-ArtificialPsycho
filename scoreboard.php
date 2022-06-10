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

$resultTime = $database->query("SELECT * FROM `scoreboard` ORDER BY `Time` ASC,`Score` DESC,`Date` ASC LIMIT 100");
$resultAny = $database->query("SELECT * FROM `scoreboard` WHERE `Score` >= 10500 ORDER BY `Time` ASC,`Score` DESC,`Date` ASC LIMIT 100");
$resultScore = $database->query("SELECT * FROM `scoreboard` ORDER BY `Score` DESC,`Time` ASC,`Date` ASC LIMIT 100");
?>

<p style='margin-top:60px;'></p>

<div class='card border border-dark mx-2 mb-2 vh-100'>

<div class='card-header bg-dark text-light d-inline-flex justify-content-between'>
<h4 class="align-middle">Artificial Psycho BETA TOP-100 3 catégories</h4>
</div>

<div class='card-body bg-secondary h-auto py-2'>

<ul class="nav nav-tabs">
  <li class="nav-item">
    <a href="#time" class="nav-link bg-dark text-light" role="tab" data-toggle="tab">Time</a>
  </li>
  <li class="nav-item">
    <a href="#any" class="nav-link bg-dark text-light" role="tab" data-toggle="tab">Any %</a>
  </li>
  <li class="nav-item">
    <a href="#score" class="nav-link bg-dark text-light" role="tab" data-toggle="tab">Score</a>
  </li>
</ul>

<div class="tab-content">
<div class="tab-pane active" role="tabpanel" id="time">

<table class='table table-striped table-dark'>
  <thead>
    <tr>
      <th scope='col'>By Time</th>
      <th scope='col'>Name</th>
      <th scope='col'>Time</th>
      <th scope='col'>Score</th>
      <th scope='col'>Date</th>
    </tr>
  </thead>
  <tbody>
  <?php
$rank = 1;
while ($line = $resultTime->fetch_assoc()){
    echo"
    <tr>
      <th scope='row'>$rank</th>
      <td>".$line["Name"]."</td>
      <td>".$line["Time"]."</td>
      <td>".$line["Score"]."</td>
      <td>".$line["Date"]."</td>
    </tr>";
    $rank++;
}
if($rank == 1){
  echo"
    <tr>
      <td colspan='5' class='text-center'>Personne n'est classé pour le moment !</td>
    </tr>";
}
?>
</tbody>
</table>
</div>

<div class="tab-pane active" role="tabpanel" id="any">

<table class='table table-striped table-dark'>
  <thead>
    <tr>
      <th scope='col'>Any % (score >= 10500)</th>
      <th scope='col'>Name</th>
      <th scope='col'>Time</th>
      <th scope='col'>Score</th>
      <th scope='col'>Date</th>
    </tr>
  </thead>
  <tbody>
  <?php
$rank = 1;
while ($line = $resultAny->fetch_assoc()){
    echo"
    <tr>
      <th scope='row'>$rank</th>
      <td>".$line["Name"]."</td>
      <td>".$line["Time"]."</td>
      <td>".$line["Score"]."</td>
      <td>".$line["Date"]."</td>
    </tr>";
    $rank++;
}
if($rank == 1){
  echo"
    <tr>
      <td colspan='5' class='text-center'>Personne n'est classé pour le moment !</td>
    </tr>";
}
?>
</tbody>
</table>
</div>

<div class="tab-pane active" role="tabpanel" id="score">

<table class='table table-striped table-dark'>
  <thead>
    <tr>
      <th scope='col'>By Score</th>
      <th scope='col'>Name</th>
      <th scope='col'>Time</th>
      <th scope='col'>Score</th>
      <th scope='col'>Date</th>
    </tr>
  </thead>
  <tbody>
  <?php
$rank = 1;
while ($line = $resultScore->fetch_assoc()){
    echo"
    <tr>
      <th scope='row'>$rank</th>
      <td>".$line["Name"]."</td>
      <td>".$line["Time"]."</td>
      <td>".$line["Score"]."</td>
      <td>".$line["Date"]."</td>
    </tr>";
    $rank++;
}
if($rank == 1){
  echo"
    <tr>
      <td colspan='5' class='text-center'>Personne n'est classé pour le moment !</td>
    </tr>";
}
?>
</tbody>
</table>
</div>

</div>

</div>
</div>

<?php
/*
<div class="tab-pane fade" id="Any" role="tabpanel" aria-labelledby="Any-tab">
<table class='table table-striped table-dark'>
  <thead>
    <tr>
      <th scope='col'>#</th>
      <th scope='col'>Name</th>
      <th scope='col'>Time</th>
      <th scope='col'>Score</th>
      <th scope='col'>Date</th>
    </tr>
  </thead>
  <tbody>

$rank = 1;
while ($line = $resultTime->fetch_assoc()){
    echo"
    <tr>
      <th scope='row'>$rank</th>
      <td>".$line["Name"]."</td>
      <td>".$line["Time"]."</td>
      <td>".$line["Score"]."</td>
      <td>".$line["Date"]."</td>
    </tr>";
    $rank++;
}
if($rank == 1){
  echo"
    <tr>
      <td colspan='5' class='text-center'>Personne n'est classé pour le moment !</td>
    </tr>";
}
</tbody>
</table>
</div>
*/
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="node_modules\bootstrap\dist\js\bootstrap.js"></script>
</body>
</html>

