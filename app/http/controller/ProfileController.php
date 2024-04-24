<?php

namespace App\Http\Controllers;

class ProfileController
{
    public function index()
    {
        // Vous pouvez inclure ici la logique nécessaire pour récupérer des données
        // qui seront passées à votre vue
        $data = [
            'title' => 'Profil',
            // Autres données que vous souhaitez passer à la vue
        ];

        // Retourne la vue profile.php avec les données
        return view('profile', $data);
    }
}
