<?php
$pageTitle = $pageTitle ?? "RHS Connects";
$location  = $location  ?? "Location not set";
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
.set-pointer {
  cursor: pointer;
}

    .header-icon {
      width: 50px;
      height: 50px;
    }

    .logo-img {
      height: 42px;
      width: auto;
    }

    /* ONE LINE LOCATION BAR */
    .location-bar {
      background: #fff;
      color: #333;
      border-radius: 12px;
      padding: 10px 12px;
      display: flex;
      align-items: center;
      justify-content: space-start;
      box-shadow: 0 1px 4px rgba(0,0,0,0.12);
      font-size: 14px;
      gap:4px;
    }

    .location-left {
      display: flex;
      align-items: center;
      gap: 8px;
      overflow: hidden;
    }

    .location-text {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
      max-width: 230px;
      font-weight: 500;
    }

    .set-location {
      color: #2f66f3;
      font-weight: 600;
      white-space: nowrap;
    }
  </style>
</head>

<body>

<header class="bg-app text-white p-3">

  <!-- TOP ROW -->
  <div class="d-flex justify-content-between align-items-center">
    <a href="home.php">
    <img src="images/logo.png" alt="RHS Logo" class="logo-img set-pointer"></a>
    <img src="images/bell.png" alt="Notifications" class="header-icon set-pointer">
  </div>

  <!-- LOCATION (ONE LINE) -->
  <div class="mt-3">
    <div class="location-bar">
      <div class="location-left">
        <i class="bi bi-geo-alt"></i>
        <span class="location-text"><?= $location ?></span>
      </div>

      <span class="set-pointer">Set location</span>
    </div>
  </div>

</header>
