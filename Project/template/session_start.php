<?php
@session_start();
if($_SESSION['check'] != "true"){
    header('location:login.html');
}
?>