<?php
require '../class/class.Head.php';
require '../class/class.Header.php';

$myhead=new Head();
$myhead->addhead('stylesheet','../css/artificial_psycho.css','Artificial Psycho: Download','UTF-8',3);
echo $myhead->getaddhead();

$myheader=new Header();
$myheader->addheader(3);
echo $myheader->getaddheader();

echo "
<p style='margin-top:60px;'>

<div class='justify-content-around shadow-sm py-5 px-3 mx-3 mt-5 mb-1 bg-light rounded'>
  <h1 class='display-5'>Download</h1>
  <hr class='my-4'>
  <h3>Executable</h3>
  <p class='lead'>Vous pourrez bientôt télécharger ici les différentes versions du jeux.</p>
  <hr class='my-4'>
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <p class='lead'><a class='btn btn-primary btn-lg' href='#' role='button'>Learn more</a></p>
  <hr class='my-4'>
</div>
";

echo "</body></html>";
?>