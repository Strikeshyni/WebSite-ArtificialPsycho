<?php
require 'class/class.Head.php';
require 'class/class.Header.php';

$myhead=new Head();
$myhead->addhead('stylesheet','css/main.css','BloodLess Studio: Le Studio','UTF-8',1);
echo $myhead->getaddhead();

$myheader=new Header(); 
$myheader->addheader(1);
echo $myheader->getaddheader();

echo "
        <div style='margin-top:80px;'></div>

        <div class='justify-content-around py-5 px-3 mx-3 mt-5 bg-dark text-light rounded'>
            <h3 class='pl-2'>Le Studio</h3>
            <p>Bloodless Studio c'est formé dans le cadre d'un projet de groupe. Pour notre projet de second semestre nous avions à construire ensemble un projet sur Unity et codé en C#. Nous avons ainsi déssider ensemble de crée Bloodless Studio. Studio qui va débuter sa première création en février 2022. Artificial psycho est alors en développement et toute l'équipe se donne à fond dans le projet. </p>
        </div>

        <div class='mx-3 px-5 py-2 text-light bg-secondary'><h3> Les Membres </h3></div>
        <div class='mx-3 d-flex justify-content-around bg-secondary text-light shadow-sm p-3 rounded'>
            <figure class='figure'>
                <img src='images/pp2.jpg' class='figure-img img-fluid img-thumbnail rounded' alt='...'>
                <figcaption class='figure-caption text-center'>Hugo FRANGIAMONE</figcaption>
            </figure>
            <figure class='figure'>
                <img src='images/pp1.jpg' class='figure-img img-fluid img-thumbnail rounded' alt='...'>
                <figcaption class='figure-caption text-center'>Abel AUBRON</figcaption>
            </figure>
            <figure class='figure'>
                <img src='images/pp3.jpg' class='figure-img img-fluid img-thumbnail rounded' alt='...'>
                <figcaption class='figure-caption text-center'>Florian RUIZ</figcaption>
            </figure>
            <figure class='figure'>
                <img src='images/pp4.jpg' class='figure-img img-fluid img-thumbnail rounded' alt='...'>
                <figcaption class='figure-caption text-center'>Léonard FIGUINHA</figcaption>
            </figure>
        </div>
</body>
</html>";
?>