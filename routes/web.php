<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;

// Importez d'autres contrôleurs si nécessaire

// Utilisez le routeur pour définir vos routes
$router->get('/', [HomeController::class, 'index']);

$router->get('/profile', [ProfileController::class, 'index']);

// Définissez d'autres routes selon vos besoins, par exemple :
// $router->get('/portfolio', [PortfolioController::class, 'index']);
// $router->get('/contact', [ContactController::class, 'index']);
