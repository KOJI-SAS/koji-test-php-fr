<?php
session_start();
if(isset($_POST['userNumber'])){
    $userNumber = $_POST['userNumber'];
    $im = imagecreate(20, 20);

// Fond blanc et texte bleu
    $bg = imagecolorallocate($im, 255, 255, 255);
    $textcolor = imagecolorallocate($im, 0, 0, 255);

// Ajout de la phrase en haut à gauche
    imagestring($im, 5, 0, 0,$userNumber , $textcolor);
    $t=[];
    for($x=0;$x<20;$x++){
        for ($y=0;$y<20;$y++){
            $t[] = $x."=".$y."=".imagecolorat ($im, $x,$y);
        }

    }
    //var_dump($t);

    $_SESSION['finalTable'] = $t;
    header("location:../../grid-result.php");


 //Affichage de l'image
//    header('Content-type: image/png');
//
//    imagepng($im);
}