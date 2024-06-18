<?php
require_once 'router.php';

$router = new Router();

// Define routes

// for pc
// /*
$router->add('/Hobes-Php/', 'views/home.php');
$router->add('/Hobes-Php/home', 'views/home.php');
$router->add('/Hobes-Php/about', 'views/about.php');
$router->add('/Hobes-Php/contact', 'views/contact.php');
$router->add('/Hobes-Php/career', 'views/career.php');
$router->add('/Hobes-Php/jobs', 'views/career HTMLS/jobs.php');
$router->add('/Hobes-Php/products', 'views/products.php');

// */


// for server
/*
$router->add('/', 'views/home.php');
$router->add('/home', 'views/home.php');
$router->add('/about', 'views/about.php');
$router->add('/contact', 'views/contact.php');
$router->add('/career', 'views/career.php');
$router->add('/products', 'views/products.php');
*/
// Dispatch the request
$router->dispatch($_SERVER['REQUEST_URI']);
?>
