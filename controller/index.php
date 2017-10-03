<?php 
session_start();
include '../vue/index_vue.php';
// Suppression of session variables
$_SESSION = array();
session_destroy();