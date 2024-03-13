<?php
$request_uri = $_SERVER['REQUEST_URI'];

$routes = [
    "/library/" => 'deneme',
    "/login/" => '/Auth/Login',
    "/library/register" => '/Auth/Register'
];

$path = parse_url($request_uri, PHP_URL_PATH);

if (array_key_exists($path, $routes)) {
    $controllerFile = $routes[$path] . '.controller.php';
    if (file_exists('./Controller/' . $controllerFile)) {
        include('./Controller/' . $controllerFile);
    } else {
        echo '404 Sayfa Bulunamadı';
    }
} else {
    echo '404 Sayfa Bulunamadı';
}
