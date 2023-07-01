<?php 

require 'functions.php';

$root = '/pollgenz-php';

$to_route =
[
    'pollgenz-php' => '/',
    'index.php' => '/',
    'latest' => 'latest',
    'trending' => 'trending',
    'random' => 'random',
    'login' => 'login'
];

$uri = $to_route[basename($_SERVER['REQUEST_URI'])];

$routes = 
[
    '/' => 'controllers/index.php',
    'latest' => 'controllers/latest.php',
    'trending' => 'controllers/trending.php',
    'random' => 'controllers/random.php',
    'login' => 'controllers/login.php'

];

if (array_key_exists($uri, $routes)) {
    // header("Location: .$uri");
    // die();
    require $routes[$uri];
    
} 
else {
    http_response_code(404);

    echo "Not found page";

    die();
}

// include "views/includes/footer.php";