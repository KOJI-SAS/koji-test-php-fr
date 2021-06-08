<?php
require $_SERVER['DOCUMENT_ROOT'].'/koji/modele/data.php';

/* inclure l'autoloader */
require_once $_SERVER['DOCUMENT_ROOT'].'/koji/vendor/autoload.php';

/* templates chargés à partir du système de fichiers (répertoire twig) */
$loader = new \Twig\Loader\FilesystemLoader($_SERVER['DOCUMENT_ROOT'].'/koji/twig/');

/* options : prod = cache dans le répertoire cache, dev = pas de cache */
$options_dev = array('cache' => false, 'autoescape' => false);

/* stocker la configuration */
$twig = new Twig_Environment($loader, $options_dev);

/* recupération du POST */
if(isset($_POST) && !empty($_POST))
{
	$data = GeneratePic($_POST['number']);
	$template = $twig->load("pic.twig");
	echo $template->render(['data' => $data]);
	die();
} 

/* charger+compiler le template, exécuter, envoyer le résultat au navigateur */
echo $twig->render('form.twig');