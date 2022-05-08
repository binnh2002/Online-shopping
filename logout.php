<?php

session_start();
if(isset($_POST)) {
    unset($_SESSION['users']);
    header("Location:login_form.php" );
    exit;
}

?>