<?php 

require 'functions.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    "/PHP_Basics/" => 'investment-calculator-view.php',
    "/PHP_Basics/handle_submit" => 'handle_submit.php',
];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    echo "404 - No page found";
}

?>