<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/header.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Document</title>
</head>
<body class="details-page">
    <div class="sidebar">
        <div class="logo">
            <i class="fas fa-icons fa-3x"></i>
        </div>
        <a href="index.php"><i class="fas fa-home"></i></a>
        <a href="details.php"><i class="fas fa-globe"></i></a>
        <a href="#section3"><i class="fas fa-cube"></i></a>
        <a href="#section4"><i class="fas fa-map"></i></a>
        <a href="#section5"><i class="fas fa-info-circle"></i></a>
    </div>
    <?php
    $currentPage = basename($_SERVER['PHP_SELF']);
    ?>