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
  <ol class="list-group list-group-numbered">
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Subheading</div>
      Content for list item
    </div>
    <span class="badge bg-primary rounded-pill">14</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Subheading</div>
      Content for list item
    </div>
    <span class="badge bg-primary rounded-pill">14</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Subheading</div>
      Content for list item
    </div>
    <span class="badge bg-primary rounded-pill">14</span>
  </li>
</ol>
  </div>
</div>
</body>
</html>