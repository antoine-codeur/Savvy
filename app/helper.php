<?php

// Définissez une fonction view pour simuler la fonction de rendu de vue
function view($view, $data = [])
{
    extract($data);
    include_once '../resources/views/' . $view . '.php';
}
