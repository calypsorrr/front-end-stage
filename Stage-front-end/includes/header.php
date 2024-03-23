<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

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
            <img class="agl" src="../img/Agilica_Final.svg" alt="Logo">
        </div>
        <a href="index.php" <?php if ($currentPage === 'index.php') echo 'class="active"'; ?>><i class="fas fa-home"></i></a>
        <a href="map.php" <?php if ($currentPage === 'map.php') echo 'class="active"'; ?>><i class="fas fa-globe"></i></a>
        <a href="3D.php" <?php if ($currentPage === '3D.php') echo 'class="active"'; ?>><i class="fas fa-cube"></i></a>
        <a href="floorplan.php" <?php if ($currentPage === 'floorplan.php') echo 'class="active"'; ?>><i class="fas fa-map"></i></a>
        <a href="info.php" <?php if ($currentPage === 'info.php') echo 'class="active"'; ?>><i class="fas fa-info-circle"></i></a>
    </div>