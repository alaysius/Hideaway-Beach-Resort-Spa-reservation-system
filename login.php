<?php
include_once('config.php');

if (isset($_POST['login']))
{
    $uemail = $con->escapeString($_POST['email']);
    $upwd = $con->escapeString($_POST['password']);
    echo $con->userLogin($uemail, $upwd);
}
?>