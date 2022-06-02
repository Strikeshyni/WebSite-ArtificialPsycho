<?php
require 'class/class.Head.php';
require 'class/class.Header.php';

$myhead=new Head();
$myhead->addhead('stylesheet','css/main.css','BloodLess Studio: Projets','UTF-8',1);
echo $myhead->getaddhead();

$myheader=new Header();
$myheader->addheader(1);
echo $myheader->getaddheader();


echo " 



<div class='vh-100'>
<div style='margin-top:60px;'></div>
<div class='card border border-dark mx-2 h-75'>
  <h5 class='card-header bg-dark text-light'>Artificial Psycho</h5>
  <div class='card-body py-4 bg-secondary h-100'>
    <h5 class='card-title'>Rentrer dans l'univers d'Artificial Psycho</h5>
    <p class='card-text'>Venez découvrir le projet Artificial Psycho, l'avancé du projet, les différents executables et les scoreboards du jeux.</p>
    <a href='Artificial_psycho/Artificial_psycho.php' class='btn btn-outline-dark .specialbutton'>Go to</a>
  </div>
</div>
<div class='card border border-dark mx-2 my-1 h-25'>
  <h5 class='card-header bg-dark text-light'>Prochainement</h5>
  <div class='card-body bg-secondary h-100'>
    <h5 class='card-title'>. . .</h5>
  </div>
</div>
</div>
</body>
</html>";
?>
