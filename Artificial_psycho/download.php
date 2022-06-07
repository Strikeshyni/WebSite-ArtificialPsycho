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

<p style='margin-top:65px;'>

<div class='card border border-dark mx-2 h-100'>
  <h5 class='card-header bg-dark text-light'>Tous les Téléchargements</h5>
  <div class='card-body py-4 bg-secondary h-100'>


  <h5 class="card-title">Exécutable du jeu</h5>
  <ol class="list-group list-group-numbered">
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Artificial Psycho BETA</div>
      BETA Installer.
    </div>
    <a href="https://github.com/Strikeshyni/WebSite-ArtificialPsycho/raw/main/Artificial_psycho/BETA/SetupArtificialPsycho.exe" download><span class="badge bg-danger py-3 px-3 rounded-pill">Télécharger BETA Setup</span></a>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Manuel d'installation</div>
      Jetez un coup d'oeil au manuel pour être guidé sur l'installation de la BETA.
    </div>
    <a href="BETA/Manuel_Artificial_Psycho.pdf" target="_blank"><span class="badge bg-danger py-3 px-3 rounded-pill">Ouvrir</span></a>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Après installation</div>
      Vous trouverez ici les sources utilisées pour la création d'Artificial Psycho.
    </div>
    <a href="BETA/Source_Biblio.txt" target="_blank"><span class="badge bg-danger py-3 px-3 rounded-pill">Ouvrir</span></a>
  </li>
  </ol>


  <h5 class="card-title mt-2">Soutenances</h5>
  <ol class="list-group list-group-numbered">
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Soutenance 08/03/22</div>
      Rapport de première soutenance au format pdf
    </div>
    <a href="soutenance_1_ArtificialPsycho.pdf" target="_blank"><span class="badge bg-danger py-3 px-3 rounded-pill">Ouvrir</span></a>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Soutenance 28/04/22</div>
      Rapport de deuxième soutenance au format pdf
    </div>
    <a href="soutenance_2_ArtificialPsycho.pdf" target="_blank"><span class="badge bg-danger py-3 px-3 rounded-pill">Ouvrir</span></a>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Soutenance 07/06/22</div>
      Rapport de troisième soutenance au format pdf
    </div>
    <a href="soutenance_3_ArtificialPsycho.pdf" target="_blank"><span class="badge bg-danger py-3 px-3 rounded-pill">Ouvrir</span></a>
  </li>
  </ol>


  <h5 class="card-title mt-2">Thèmes & Musiques</h5>
  <ol class="list-group list-group-numbered">
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Menu Theme</div>
    </div>
    <audio class="rounded-pill px-3" controls>
      <source src="sounds/Theme_Menu.mp3" type="audio/mpeg">
       Your browser does not support the audio tag.
    </audio>
    <a href="sounds/Menu_Theme.mp3" onclick="ga('send','event','Getting Started','Download','Download Sound 3');" download><span class="badge bg-danger py-3 px-3 rounded-pill">Télécharger</span></a>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Psycho Discovery</div>
    </div>
    <audio class="rounded-pill px-3" controls>
      <source src="sounds/Psycho_Discovery.mp3" type="audio/mpeg">
       Your browser does not support the audio tag.
    </audio>
    <a href="sounds/Psycho_Discovery.mp3" onclick="ga('send','event','Getting Started','Download','Download Sound 3');" download><span class="badge bg-danger py-3 px-3 rounded-pill">Télécharger</span></a>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Psycho Hell</div>
    </div>
    <audio class="rounded-pill px-3" controls>
      <source src="sounds/Psycho_Hell.mp3" type="audio/mpeg">
       Your browser does not support the audio tag.
    </audio>
    <a href="sounds/Psycho_Hell.mp3" onclick="ga('send','event','Getting Started','Download','Download Sound 3');" download><span class="badge bg-danger py-3 px-3 rounded-pill">Télécharger</span></a>
  </li>
  </ol>


  </div>
</div>
</body>
</html>