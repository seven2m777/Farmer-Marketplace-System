<?php
/**
 * FarmLink — Header Navigation Template
 * Human-written PHP header included across all main pages
 */

// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Current script name for active menu highlight
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo isset($page_title) ? $page_title . ' — FarmLink' : 'FarmLink ® — Local Farmer Marketplace & Cold Storage'; ?></title>
  
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <!-- Main Stylesheets -->
  <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="assets/css/forms.css?v=<?php echo time(); ?>">
</head>
<body>

  <!-- Main Header Navigation -->
  <header class="site-header scrolled" id="siteHeader">
    <div class="container nav-container">
      
      <!-- Brand Logo -->
      <a href="index.php" class="brand-logo" aria-label="FarmLink Homepage">
        <div class="brand-icon">
          <!-- Leaf / Farm Icon SVG -->
          <svg width="28" height="28" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M16 3V29M16 7C12 9 8 13 8 18C12 18 15 15 16 11M16 13C20 15 24 19 24 24C20 24 17 21 16 17M16 17C12 19 8 23 8 28C12 28 15 25 16 21" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div class="brand-name">
          FarmLink <span class="reg">®</span>
        </div>
      </a>

      <!-- Primary Navigation Links -->
      <nav class="nav-menu" aria-label="Primary Navigation">
        <a href="index.php" class="nav-link <?php echo $current_page == 'index.php' ? 'active' : ''; ?>">Home</a>
        <a href="products.php" class="nav-link <?php echo $current_page == 'products.php' ? 'active' : ''; ?>">Marketplace</a>
        <a href="index.php#about" class="nav-link">About Us</a>
        <a href="index.php#roles" class="nav-link">The 4 Roles</a>
        <a href="index.php#workflow" class="nav-link">Cold Chain</a>
        <a href="index.php#contact" class="nav-link">Contact</a>
      </nav>

      <!-- User Authentication Actions -->
      <div class="nav-actions">
        <?php if (isset($_SESSION['user_id'])): ?>
          <!-- Logged in user buttons -->
          <a href="<?php echo ($_SESSION['user_role'] ?? 'vendor') === 'customer' ? 'vendor' : ($_SESSION['user_role'] ?? 'vendor'); ?>/dashboard.php" class="btn-glass">
            <i class="fa-solid fa-user-gear"></i>
            <span>Dashboard</span>
          </a>
          <a href="logout.php" class="btn-glass" style="background: rgba(239, 68, 68, 0.2); border-color: rgba(239, 68, 68, 0.4);">
            <i class="fa-solid fa-right-from-bracket"></i>
            <span>Logout</span>
          </a>
        <?php else: ?>
          <!-- Guest buttons for Login and Register -->
          <a href="login.php" class="btn-glass <?php echo $current_page == 'login.php' ? 'active' : ''; ?>">
            <i class="fa-solid fa-right-to-bracket"></i>
            <span>Login</span>
          </a>
          <a href="register.php" class="btn-glass" style="background: #035925; color: #ffffff; border-color: #035925;">
            <i class="fa-solid fa-user-plus"></i>
            <span>Register</span>
          </a>
        <?php endif; ?>
      </div>

      <!-- Mobile Menu Toggle Button -->
      <button class="mobile-menu-toggle" id="mobileToggle" aria-label="Toggle navigation menu">
        <i class="fa-solid fa-bars"></i>
      </button>

    </div>
  </header>
