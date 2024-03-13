<?php
$request_uri = $_SERVER['REQUEST_URI'];

$routes = [
    '/library/' => 'deneme'
];

$path = parse_url($request_uri, PHP_URL_PATH);

if (array_key_exists($path, $routes)) {
    $controllerFile = $routes[$path] . '.controller.php';
    if (file_exists('controller/' . $controllerFile)) {
        include('controller/' . $controllerFile);
    } else {
        echo '404 Sayfa Bulunamadı';
    }
} else {
    echo '404 Sayfa Bulunamadı';
}
