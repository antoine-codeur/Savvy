<?php

namespace App\Http\Controllers;

class HomeController
{
    public function index()
    {
        // Vous pouvez inclure ici la logique nécessaire pour récupérer des données
        // qui seront passées à votre vue
        $data = [
            'title' => 'Accueil',
            // Autres données que vous souhaitez passer à la vue
        ];

        // Retourne la vue home.php avec les données
        return view('home', $data);
    }

    public function contact()
    {
        // Vous pouvez inclure ici la logique nécessaire pour la page de contact
        // Par exemple, préparer des données pour le formulaire de contact

        // Retourne la vue contact.php pour afficher la page de contact
        return view('pages.contact');
    }
}
