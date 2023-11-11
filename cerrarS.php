<?php
session_start();
if (isset($_POST["cerraSecion"])) {
    session_destroy();
    header('Location: login.php');
    exit;
}
