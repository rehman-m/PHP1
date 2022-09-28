<?php
session_start();

if(isset($_REQUEST['submit'])){
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['mobile'] = $_POST['mobile'];
}

?>

