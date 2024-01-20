<?php
require 'link.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
    <title>Template Laporan SPX</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" crossorigin="anonymous"> -->

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Bebas+Neue&family=Play&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />

    <!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->

    <link href="select2.min.css" rel="stylesheet" />
    <script src="select2.min.js"></script>
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="link.php" />

</head>

<body>
    <!-- navbar -->
    <nav>
        <div class="logo">
            <a href="index.php" style="text-decoration:none;">
                <h4>TEMPLATE LAPORAN SPX REGU I</h4>
            </a>
        </div>
        <ul>
            <li><a href="laporan.php">Laporan 2 jam Outbound otomatis</a></li>
            <li><a href="lapin.php">Laporan 2 jam Inbound</a></li>
            <li><a href="stpagi.php">Serah Terima Pagi</a></li>
            <li><a href="stmlm1.php">Serah Terima Malam 1</a></li>
            <li><a href="stmlm2.php">Serah Terima Malam 2</a></li>

        </ul>

        <div class="menu-toogle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
    <main>
        <!-- ISI -->