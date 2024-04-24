<?php

require_once __DIR__ . '/../app/helper.php'; // Modifiez le chemin vers helper.php si nécessaire

// Autres inclusions et initialisations nécessaires

// Votre logique de routage ici

// Autres inclusions et initialisations nécessaires

// Votre logique de routage ici
$route = isset($_GET['route']) ? $_GET['route'] : '/';

switch ($route) {
    case '/':
        // Inclure le fichier de style et le thème
        echo '<link rel="stylesheet" href="/assets/themes/dark.css">';
        echo '<link rel="stylesheet" href="/assets/css/style.css">';
        // Chargez la page d'accueil par défaut en utilisant guest.php
        require_once __DIR__ . '/../resources/views/partials/guest.php';
        break;
    // Autres cas de routage
    default:
        // Si aucune route correspondante n'est trouvée, rediriger vers la page d'erreur
        http_response_code(404); // Définit le code de statut HTTP à 404 (page non trouvée)
        require_once __DIR__ . '/../resources/views/error.php';
        break;
}
