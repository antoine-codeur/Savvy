<!-- guest.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Page</title>
</head>
<body>
    <?php include_once __DIR__ . '/../components/header.php'; ?>    
    <main>
        <?php        
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';
        $page_path = __DIR__ . '/../../views/pages/' . $page . '.php';
        if (file_exists($page_path)) {
            include_once $page_path;
        } else {
            include_once __DIR__ . '/../../views/error.php';
        }
        ?>
    </main>
    <?php include_once __DIR__ . '/../components/footer.php'; ?>
</body>
</html>