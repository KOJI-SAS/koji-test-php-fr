Install MAMP

goto MAMP\htdoc\

launch git clone https://github.com/KOJI-SAS/koji-test-php-fr.git

goto MAMP\htdoc\koji-test-php-fr\koji\

launch :
curl -s http://getcomposer.org/installer | php
php composer.phar require "twig/twig:^2.0"

on your web browser go to : http://localhost/koji-test-php-fr/koji/www/form.php
