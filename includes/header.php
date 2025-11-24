<?php
if (session_status() == PHP_SESSION_NONE) session_start();

// Define BASE_URL if not already defined
if (!defined('BASE_URL')) {
    // Use absolute path for better cross-environment support
    define('BASE_URL', 'http://localhost/siws'); // <-- Update this if deployed online
}
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIWS College</title>
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/style.css">
</head>
<body>
<header class="site-header">
  <div class="container">
    <div class="logo">
      <a href="<?php echo BASE_URL; ?>/index.php">
        <img src="<?php echo BASE_URL; ?>/assets/images/logo.png" alt="SIWS Logo">
      </a>
    </div>
    <nav class="main-nav">
      <a href="<?php echo BASE_URL; ?>/index.php">Home</a>
      <a href="<?php echo BASE_URL; ?>/about.php">About Us</a>
      <a href="<?php echo BASE_URL; ?>/academics.php">Academics</a>
      <a href="<?php echo BASE_URL; ?>/admissions.php">Admissions</a>
      <a href="<?php echo BASE_URL; ?>/principal.php">Principal's Message</a>
      <a href="<?php echo BASE_URL; ?>/life.php">Life @ SIWS</a>
      <a href="<?php echo BASE_URL; ?>/recruiters.php">Recruiters</a>
      <a href="<?php echo BASE_URL; ?>/contact.php" class="btn">Contact</a>
    </nav>
  </div>
</header>

<main class="container">
