<?php
$pageTitle = $pageTitle ?? "RHS Connects";
$location  = $location  ?? "Andhra Pradesh, Krishna District...";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= $pageTitle ?></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    .bg-app {
      background-color: #2f66f3;
    }

    .location-pill {
      background-color: rgba(255,255,255,0.18);
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
      max-width: 300px;
      font-size: 14px;
    }

    .header-icon {
      width: 50px;
      height: 50px;
    }

    .logo-img {
      height: 42px;
      width: auto;
    }
  </style>
</head>

<body>

<header class="bg-app text-white p-3">

  <!-- TOP ROW -->
  <div class="d-flex justify-content-between align-items-center">

    <!-- LOGO IMAGE ONLY -->
    <div class="d-flex align-items-center">
      <img src="images/logo.png" alt="RHS Logo" class="logo-img">
    </div>

    <!-- NOTIFICATION ICON (PNG) -->
    <img src="images/bell.png"
         alt="Notifications"
         class="header-icon">
  </div>

  <!-- LOCATION -->
  <div class="mt-2">
    <div class="location-pill rounded-pill px-3 py-1 d-inline-flex align-items-center gap-1">
      <i class="bi bi-geo-alt"></i>
      <span><?= $location ?></span>
    </div>
  </div>

</header>
