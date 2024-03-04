<?php
session_start();
unset($_SESSION['email']); //Destruir acesso
unset($_SESSION['senha']);
header('Location: login.php');
?>