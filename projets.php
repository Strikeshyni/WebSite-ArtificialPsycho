<?php
require 'class/class.Head.php';
require 'class/class.Header.php';

$myhead=new Head();
$myhead->addhead('stylesheet','css/main.css','BloodLess Studio: Projets','UTF-8',1);
echo $myhead->getaddhead();

$myheader=new Header();
$myheader->addheader(1);
echo $myheader->getaddheader();
?>

<div class='vh-100'>
<div style='margin-top:60px;'></div>
<div class='card border border-dark mx-2 h-65'>
  <h5 class='card-header bg-dark text-light'>Artificial Psycho</h5>
  <div class='card-body py-4 bg-secondary h-100'>
    <h4 class='card-title'>Rentrez dans l'univers d'Artificial Psycho</h4>
    <p class='card-text'>Venez découvrir le projet Artificial Psycho, l'avancé du projet, les différentes versions et les scoreboards du jeu.</p>
    
    <div class="mx-auto align-center w-100"><img class="d-block rounded w-75" src="images/vaisseau.png"></div>
    <div class="mx-auto w-75"><a type="button" href="Artificial_psycho/Artificial_psycho.php" class="btn btn-outline-dark btn-lg btn-block my-1 w-100 mx-auto">C'EST PARTI</a></div>

  </div>
</div>
<div class='card border border-dark mx-2 my-1 h-20'>
  <h5 class='card-header bg-dark text-light'>Prochainement</h5>
  <div class='card-body bg-secondary h-100'>
    <h5 class='card-title'>. . .</h5>
  </div>
</div>
</div>
</body>
</html>

<?php
/* <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block rounded w-100" src="images/vaisseau" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block rounded w-100" src="images/couloir" alt="Second slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>
*/
?>