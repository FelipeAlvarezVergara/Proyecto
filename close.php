<?php session_start();

require 'admin/config.php';
require 'functions/functions.php';

  session_destroy();

  header('Location: '.RUTA.'Index.php');

 ?>
