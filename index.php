<!DOCTYPE html>

<html>
    <head>

    </head>
    <body>
        <form action="/" method="POST" id="numberForm">
            <input type="number" name="num" min="0" max="99"/>
            <input type="submit" />
        </form>
    </body>
</html>

<?php

$action = new ActionController();

if (isset($_POST['num']) && !empty($_POST['num'])) {
    $action->action(); 
    header('Location: result.php');
}


class ActionController {

    public $number;
    public $message;

    public function action (){
        session_start();
        if (isset($_POST['num']) && !empty($_POST['num'])) {
            $_SESSION['num'] = $_POST['num']; 
        }     
    }   
}