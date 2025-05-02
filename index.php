<!DOCTYPE html>
<html lang="pt">

<head>
    <?php
    $page = $_GET['page'] ?? 'login';
    echo "<title>GameView - $page</title>";

    if ($page !== 'login') {
        $login = $_COOKIE["login"] ?? '';
        if (empty($login)) {
            header("Location: index.php?page=login");
            exit;
        }
    }
    ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<?php
switch ($page) {
    case 'home':
        include 'pages/home.php';
        break;
    case 'login':
        include 'pages/login.php';
        break;
    case 'game':
        include 'pages/game.php';
        break;
    case "config":
        include "pages/config.php";
        break;
}
?>

</html>