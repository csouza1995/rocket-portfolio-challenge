<?php
require_once 'helpers/translator.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carlos Souza - Rocket Portfolio Challenge</title>

    <link rel="stylesheet" href="assets/app.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="assets/tailwind.js"></script>
</head>

<body class="bg-figma-200 text-gray-200">
    <?php include 'components/header.php'; ?>

    <main>
        <?php include 'components/hero.php'; ?>

        <?php include 'components/projects.php'; ?>

        <?php include 'components/links.php'; ?>
    </main>

    <?php include 'components/footer.php'; ?>
</body>

</html>