<?php 
$page = $router->getPage();
$titre = $router->getRoutes()[$page] ?? "404";
$pageLink = CSS . "/" . $page . ".css";
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= TITLE ?></title>
    <link rel="stylesheet" href="<?= CSS ?>/style.css">
    <?php if (file_exists($pageLink)) : ?>
        <link rel="stylesheet" href="<?= $pageLink ?>">
    <?php endif ?>
    <link rel="stylesheet" href="<?= CSS ?>/responsive.css">
    <script defer src="<?= JS ?>/main.js"></script>
</head>