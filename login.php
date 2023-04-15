<?php

$login = $_POST['login'];
$senha = $_POST['senha'];

if ($login == "click" && $senha == "153") {
    header('Location: principal.php');
} else {
    header('Location: index.php');
}


?>
