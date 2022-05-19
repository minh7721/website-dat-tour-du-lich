<?php
require "customer/Core/Database.php"; 
require "customer/Models/BaseModel.php";
require "customer/Controllers//BaseController.php";
$controller = $_REQUEST['controller'] ?? 'customer';
// echo $controller;
$controllerName = ucfirst((strtolower($controller) .'Controller')) ;
$actionName = strtolower($_REQUEST['action'] ?? 'index' );
require "customer/Controllers/${controllerName}.php";

$controllerObject = new $controllerName ;
 
$controllerObject -> $actionName();