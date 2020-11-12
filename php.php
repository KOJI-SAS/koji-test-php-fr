<?php
$number = $_POST['number'];

if(isset($number)){
    //verification si les données sont bonnes 
if (!preg_match("#^[0-9][0-9])$#",$number))
{
 echo "Veuillez entrer un nombre correct entre 0 et 99 !";
}
else
{
 echo "number ok";
}
}


?>