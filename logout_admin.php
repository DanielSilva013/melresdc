<?php
session_start();
unset(
    $_SESSION['userAdminId'],
    $_SESSION['userAdminNome'],
    $_SESSION['userAdminEmail'],
    $_SESSION['userAdminPasswd'],
);

$_SESSION['logout'] = "Logout efetuado com sucesso";
header("Location: login_admin.php");

?>