<?php
require_once('../assets/php/config.php');
session_start();
session_destroy();
header('Location: '.$conf_after_logout);
?>