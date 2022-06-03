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
  <h5 class='card-header bg-dark text-light'>All Download</h5>
  <div class='card-body py-4 bg-secondary h-100'>

  <h5 class="card-title">Soutenances</h5>
  <ol class="list-group list-group-numbered">
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Soutenance 1</div>
      Rapport de première soutenance
    </div>
    <a href="soutenance_1_ArtificialPsycho.pdf" onclick="ga('send','event','Getting Started','Download','Download Soutenance 1');"><span class="badge bg-primary py-2 px-2 rounded-pill">Download PDF</span></a>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Soutenance 2</div>
      Rapport de seconde soutenance
    </div>
    <span class="badge bg-primary py-2 px-2 rounded-pill">Download PDF</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Soutenance 3</div>
      Rapport de troisième soutenance
    </div>
    <span class="badge bg-primary py-2 px-2 rounded-pill">Download PDF</span>
  </li>
  </ol>

  </div>
</div>
</body>
</html>