<?php
require '../class/class.Head.php';
require '../class/class.Header.php';

$myhead=new Head();
$myhead->addhead('stylesheet','../css/artificial_psycho.css','Artificial Psycho: Projet','UTF-8',2);
echo $myhead->getaddhead();

$myheader=new Header();
$myheader->addheader(2);
echo $myheader->getaddheader();
?>
<div class="mainartif" style="background-image: url('../images/couloir.png'); height: 100vh; background-size: cover;">

<div class='mx-auto bg-dark text-white' style="padding-top: 130px;">
    <h1 class="text-center">Artificial psycho</h1>
</div>
<div class='mx-auto w-75 bg-dark text-white' style="padding-top: 40px;">
    <p>Vous êtes un robot envoyé pour aller éliminer d'étranges I.A qui infeste un bâtiment. Une fois votre vaisseau arrivé prêt du bâtiment en question, une voix, celle de votre vaisseau, vous explique que ces I.A sont victime d'un virus informatique qui les rendent violentes. Une fois ces I.A éliminées, votre vaisseau vous indique qu'un problème similaire a été déclaré un peu plus loin, vous décidez alors de partir explorer tout les lieux présentant la moindre trace de ces I.A. si mystérieusement dangereuses...</p>
</div>
</div>
</body>
</html>