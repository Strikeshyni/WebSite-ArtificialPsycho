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

<div class='card border border-dark mx-2 h-100'>
  <h5 class='card-header bg-dark text-light'>All Download</h5>
  <div class='card-body py-4 bg-secondary h-100'>


  <h5 class="card-title">Executable du jeux</h5>
  <ol class="list-group list-group-numbered">
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Artificial Psycho</div>
      Première version jouable du jeux disponible depuis le 04/06/22.
      Version BETA.
    </div>
    <a href="#soon available"><span class="badge bg-danger py-3 px-3 rounded-pill">Download BETA Soon</span></a>
  </li>
  </ol>


  <h5 class="card-title mt-2">Soutenances</h5>
  <ol class="list-group list-group-numbered">
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Soutenance 08/03/22</div>
      Rapport de première soutenance
    </div>
    <a href="soutenance_1_ArtificialPsycho.pdf" target="_blank"><span class="badge bg-danger py-3 px-3 rounded-pill">Download PDF</span></a>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Soutenance 28/04/22</div>
      Rapport de seconde soutenance
    </div>
    <a href="soutenance_2_ArtificialPsycho.pdf" target="_blank"><span class="badge bg-danger py-3 px-3 rounded-pill">Download PDF</span></a>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Soutenance 03/06/22</div>
      Rapport de troisième soutenance
    </div>
    <a href="#soon available"><span class="badge bg-danger py-3 px-3 rounded-pill">Download PDF Soon</span></a>
  </li>
  </ol>


  <h5 class="card-title mt-2">Themes & Sounds</h5>
  <ol class="list-group list-group-numbered">
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Theme Menu</div>
    </div>
    <a href="sounds/Theme_Menu.mp3" target="_blank"><span class="badge bg-danger py-3 px-3 rounded-pill" download>Download MP3</span></a>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Psycho Discovery</div>
    </div>
    <a href="sounds/Psycho_Discovery.mp3" target="_blank"><span class="badge bg-danger py-3 px-3 rounded-pill" download>Download MP3</span></a>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Psycho Hell</div>
    </div>
    <audio controls>
      <source src="sounds/Psycho_Hell.mp3" type="audio/mpeg">
       Your browser does not support the audio tag.
    </audio>
    <a href="sounds/Psycho_Hell.mp3"><span class="badge bg-danger py-3 px-3 rounded-pill" download>Download MP3</span></a>
  </li>
  </ol>


  </div>
</div>
</body>
</html>