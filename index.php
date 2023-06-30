<?php 

require 'functions.php';
// dd(basename($_SERVER['REQUEST_URI']));
$root = $_SERVER['REQUEST_URI'];
include "views/includes/header.php";
include "views/includes/navbar.php";

$to_route =
[
    'pollgenz-php' => '/',
    'index.php' => '/',
    'latest' => 'latest',
    'trending.php' => 'trending',
    'random.php' => 'random',
    'login.php' => 'login'
];

$uri = $to_route[basename($_SERVER['REQUEST_URI'])];

$routes = 
[
    '/' => 'controllers/index.php',
    'latest' => 'controllers/latest.php',
    '/trending' => 'controllers/trending.php',
    '/random' => 'controllers/random.php',
    '/login' => 'controllers/login.php'

];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} 
// else {
//     http_response_code(404);

//     echo "Not found page";

//     die();
// }

include "views/includes/footer.php";