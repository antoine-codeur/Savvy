<!-- guest.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Page</title>

</head>
<body>
    <!-- Inclure l'en-tête -->
    <?php include_once __DIR__ . '/../components/header.php'; ?>
    
    <main>
        <!-- Contenu de la page spécifique -->
        <?php
        // Inclure dynamiquement le contenu de la page spécifique
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            $page_path = __DIR__ . '/../../views/' . $page . '.php';
            if (file_exists($page_path)) {
                include_once $page_path;
            } else {
                include_once __DIR__ . '/../../views/error.php'; // Gérer le cas où la page spécifique n'existe pas
            }
        } else {
            // Inclure la page d'accueil par défaut
            include_once __DIR__ . '/../../views/home.php';
        }
        ?>
    </main>
    
    <!-- Inclure le pied de page -->
    <?php include_once __DIR__ . '/../components/footer.php'; ?>
</body>
</html>
