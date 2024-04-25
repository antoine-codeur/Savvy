<?php

// Incluez les contrôleurs requis
use App\Http\Controllers\HomeController;
// Définissez les routes
$router->get('/', function () {
    // Logique pour afficher la page d'accueil
    $homeController = new HomeController();
    $homeController->index();
});

$router->get('/contact', function () {
    // Logique pour afficher la page de contact
    $homeController = new HomeController();
    $homeController->contact();
});
