<?php
session_start();
$allowed_lang=array('pt','en','es', 'fr');
if (isset($_GET['lang'])===true && in_array($_GET['lang'],$allowed_lang)===true){
    $_SESSION['lang'] = $_GET['lang'];
}elseif(isset($_SESSION['lang'])===false){
    $_SESSION['lang']='pt';
}
include $_SESSION['lang'].'.php';
?>