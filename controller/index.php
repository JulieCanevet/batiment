<?php 
session_start();
include '../vue/index_vue.php';
// Suppression des variables de session et de la session
$_SESSION = array();
session_destroy();