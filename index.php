<?php
    require_once 'app/functions.php';
    require_once 'app/core/redirect.php';

    $redirect = new Redirect('public/templates/home.php');
    $redirect->redirect();
?>