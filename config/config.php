<?php
/*
 * @Author: Miguel Santisteban MiSCapu
 * @WebSite: https://mysqliphp.blogspot.com/
 * @Version: 1.0
 * @Project: Shopping List
 * @File: config.php
 * */
//Defining the errors that will be refueled
error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
//Taking and Storing output data in the buffer
ob_start();
//Start New Session
session_start();
//Defining the constant "SITE_URL
define('SITE_URL','http://localhost/Proyectos/ShoppingList%20v%201.0/');


?>
