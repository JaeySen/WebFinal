<?php 

require 'functions.php';

$root = '/pollgenz-php';
// echo "<script>console.log('". $_SERVER['REQUEST_URI'] . "')</script>";
$to_route =
[
    'pollgenz-php' => '/',
    'latest' => 'latest',
    'trending' => 'trending',
    'random' => 'random',
    'login' => 'login'
];

$current_pg = basename($_SERVER['REQUEST_URI']);
$uri = $to_route[$current_pg];

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
    // echo basename($_SERVER['REQUEST_URI']);
    die();
}
