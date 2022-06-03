<?php
require '../class/class.Head.php';
require '../class/class.Header.php';

$myhead=new Head();
$myhead->addhead('stylesheet','../css/artificial_psycho.css','Artificial Psycho: Download','UTF-8',3);
echo $myhead->getaddhead();

$myheader=new Header();
$myheader->addheader(3);
echo $myheader->getaddheader();
?>

<p style='margin-top:60px;'>

<div class='card border border-dark mx-2 h-65'>
  <h5 class='card-header bg-dark text-light'>Download</h5>
  <div class='card-body py-4 bg-secondary h-100'>
    <h4 class='card-title'></h4>
    <p class='card-text'></p>
  </div>
</div>


<div class='justify-content-around shadow-sm py-5 px-3 mx-3 mt-5 mb-1 bg-light rounded'>
  <h1 class='display-5'>All Download</h1>
  <hr class='my-4'>
  <h3>Executable</h3>
  <p class='lead'>Vous pourrez bientôt télécharger ici les différentes versions du jeux.</p>
  <hr class='my-4'>
  <p class='lead'><a class='btn btn-primary btn-lg' href='#' role='button'>Learn more</a></p>
  <hr class='my-4'>
</div>
</body>
</html>