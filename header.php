<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo isset($page_title) ? $page_title : "Priyamvada Singh | Tarot Mentor & Spiritual Guide"; ?></title>
  <link rel="shortcut icon" href="./image/favicon.ico" type="image/x-icon">
  <meta name="description"
    content="<?php echo isset($page_description) ? $page_description : "Connect with your inner wisdom through Tarot readings, spiritual guidance, and courses with Priyamvada Singh."; ?>" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <link rel="stylesheet" href="css/style.css" />

</head>

<body>

  <!-- NAVBAR -->
  <nav class="navbar">
    <div class="container">
      <div class="nav-inner">
        <a href="index.php" class="nav-logo">
          <!-- <span class="logo-name">Priyamvada Singh</span>
          <span class="logo-tagline">Tarot Mentor · Spiritual Guide</span> -->
          <img src="./image/logo.png" alt="logo" h-auto />
        </a>
        <ul class="nav-links">
          <li><a href="index.php"
              class="<?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>">Home</a></li>
          <li><a href="about.php"
              class="<?php echo (basename($_SERVER['PHP_SELF']) == 'about.php') ? 'active' : ''; ?>">About</a></li>
          <li><a href="services.php"
              class="<?php echo (basename($_SERVER['PHP_SELF']) == 'services.php') ? 'active' : ''; ?>">Services</a>
          </li>
          <li><a href="contact.php"
              class="<?php echo (basename($_SERVER['PHP_SELF']) == 'contact.php') ? 'active' : ''; ?>">Contact</a></li>
        </ul>
        <a href="contact.php" class="btn btn-primary nav-cta">Book a Consultation</a>
        <button class="hamburger" aria-label="Menu">
          <span></span><span></span><span></span>
        </button>
      </div>
    </div>
  </nav>