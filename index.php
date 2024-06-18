<?php
require_once 'router.php';

$router = new Router();

// Define routes
$router->add('/PHP%20conversion/', 'views/home.php');
$router->add('/PHP%20conversion/home', 'views/home.php');
$router->add('/PHP%20conversion/about', 'views/about.php');
$router->add('/PHP%20conversion/contact', 'views/contact.php');
$router->add('/PHP%20conversion/career', 'views/career.php');
$router->add('/PHP%20conversion/products', 'views/products.php');

// Dispatch the request
$router->dispatch($_SERVER['REQUEST_URI']);
?>
