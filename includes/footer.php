<?php
/**
 * FarmLink — Footer Template
 * Human-written PHP footer included across all main pages
 */
?>
  <!-- Main Page Footer -->
  <footer class="page-footer">
    <div class="container">
      
      <div class="footer-columns-grid">
        
        <!-- Brand Information Column -->
        <div class="footer-brand-info">
          <div class="brand-logo" style="color: var(--color-dark);">
            <div class="brand-icon" style="color: var(--color-primary);">
              <svg width="28" height="28" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16 3V29M16 7C12 9 8 13 8 18C12 18 15 15 16 11M16 13C20 15 24 19 24 24C20 24 17 21 16 17M16 17C12 19 8 23 8 28C12 28 15 25 16 21" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <div class="brand-name">
              FarmLink <span class="reg">®</span>
            </div>
          </div>
          <p>
            Local Farmer Marketplace System — Connecting Nepalese farmers directly with commercial vendors, buyers, and cold storage facilities.
          </p>
        </div>

        <!-- Column 1: Navigation Roles -->
        <div>
          <h4 class="footer-heading">System Portals</h4>
          <ul class="footer-link-list">
            <li><a href="login.php?role=farmer">Farmer Login</a></li>
            <li><a href="login.php?role=vendor">Vendor Login</a></li>
            <li><a href="login.php?role=operator">Coldstore Console</a></li>
            <li><a href="login.php?role=admin">Admin Dashboard</a></li>
          </ul>
        </div>

        <!-- Column 2: Account Actions -->
        <div>
          <h4 class="footer-heading">Registration</h4>
          <ul class="footer-link-list">
            <li><a href="farmer-register.php">Farmer Sign Up</a></li>
            <li><a href="vendor-register.php">Vendor / Buyer Sign Up</a></li>
            <li><a href="products.php">Browse Farm Produce</a></li>
            <li><a href="index.php#about">Project Overview</a></li>
          </ul>
        </div>

        <!-- Column 3: Platform Features -->
        <div>
          <h4 class="footer-heading">Platform Features</h4>
          <ul class="footer-link-list">
            <li><a href="index.php#workflow">Smart Cold Storage</a></li>
            <li><a href="index.php#workflow">Direct Farmer Sales</a></li>
            <li><a href="index.php#chambers">Climate Chamber Telemetry</a></li>
            <li><a href="products.php">Verified Produce Catalog</a></li>
          </ul>
        </div>

      </div>

      <!-- Footer Bottom Copyright Bar -->
      <div class="footer-bottom-bar">
        <div class="server-status">
          <span class="status-pulse-dot"></span>
          <span>Local Farmer Marketplace &bull; Database & Backend Ready</span>
        </div>
        <div>
          &copy; <?php echo date('Y'); ?> FarmLink Systems. All rights reserved.
        </div>
      </div>

    </div>
  </footer>

  <!-- JavaScript for Mobile Navigation Toggle -->
  <script>
    // Mobile Navbar Toggle Script
    const mobileToggle = document.getElementById('mobileToggle');
    const navMenu = document.querySelector('.nav-menu');
    
    if (mobileToggle && navMenu) {
      mobileToggle.addEventListener('click', () => {
        if (navMenu.style.display === 'flex') {
          navMenu.style.display = 'none';
        } else {
          navMenu.style.display = 'flex';
          navMenu.style.position = 'absolute';
          navMenu.style.top = '70px';
          navMenu.style.left = '16px';
          navMenu.style.right = '16px';
          navMenu.style.background = 'rgba(0, 44, 17, 0.98)';
          navMenu.style.flexDirection = 'column';
          navMenu.style.padding = '24px';
          navMenu.style.borderRadius = '16px';
          navMenu.style.border = '1px solid rgba(255, 255, 255, 0.1)';
        }
      });
    }
  </script>

</body>
</html>
