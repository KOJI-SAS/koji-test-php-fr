<?php 
    session_start();
    class RenderFactory {
        
        public function render () { 
            $im = imagecreate(50, 50);

            $bg = imagecolorallocate($im, 255, 255, 255);
            $textcolor = imagecolorallocate($im, 0, 0, 0);

            $string = strval($_SESSION['num']);

            imagestring($im, 4, 0, 0, $string, $textcolor);

            // Affichage de l'image
            header('Content-type: image/png');
            imagepng($im);
            imagedestroy($im);
        }
    }

    $img = new RenderFactory();
    $imgToDisplay = $img->render(); 

?>

<!DOCTYPE html>

<html>
    <head>
        <style>
        </style>
    </head>
    <body>
        <div><?php ?></div>
    </body>
</html>

<?php  session_destroy() ;?>
