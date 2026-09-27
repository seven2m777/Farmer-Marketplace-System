<?php
// account choice page
$page_title = "Create Account — FarmLink";

require_once __DIR__ . '/includes/header.php';
?>

<div class="auth-split-page">
  <div class="auth-centered-container">
    <div class="auth-form-box">

      <!-- Logo -->
      <div class="auth-logo-mark">
        <div class="auth-logo-icon">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
            <path d="M17 8C8 10 5.9 16.17 3.82 21.34L5.71 22L6.66 19.7C12 19.7 20.2 16.9 21.6 8.5C21.7 8 21.4 7.6 20.9 7.7C18.6 8.2 16.6 8.9 14.8 9.8C16.8 6.4 19.3 4 20.3 3.1C20.6 2.8 20.5 2.3 20.1 2.2C15.8 1.4 10.3 4.3 7.8 7.4C7.5 7.8 7.8 8.4 8.3 8.3C10.8 7.7 13.9 7.4 17 8Z"/>
          </svg>
        </div>
        <span class="auth-logo-text">FarmLink</span>
      </div>

      <h2 class="auth-form-heading">Choose your role.</h2>
      <p class="auth-form-subtext">Select an account type below to get started:</p>

      <div style="display: flex; flex-direction: column; gap: 14px; margin-bottom: 20px;">

        <!-- Farmer Option -->
        <a href="farmer-register.php" class="role-choice-card">
          <div style="width: 44px; height: 44px; background: #e8f5ed; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #035925; font-size: 1.3rem; flex-shrink: 0;">
            <i class="fa-solid fa-wheat-awn"></i>
          </div>
          <div style="flex: 1;">
            <div style="font-family: var(--font-heading); font-size: 1.1rem; font-weight: 800; color: #0a0d0a; margin-bottom: 2px;">
              I am a Farmer
            </div>
            <div style="font-size: 0.84rem; color: #585858; line-height: 1.4; margin-bottom: 6px;">
              List crops, set your own prices, and book cold storage bays directly.
            </div>
            <span style="font-size: 0.85rem; font-weight: 700; color: #035925; display: inline-flex; align-items: center; gap: 4px;">
              <span>Register as Farmer</span>
              <i class="fa-solid fa-arrow-right" style="font-size: 0.75rem;"></i>
            </span>
          </div>
        </a>

        <!-- Vendor Option -->
        <a href="vendor-register.php" class="role-choice-card">
          <div style="width: 44px; height: 44px; background: #e8f5ed; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #035925; font-size: 1.3rem; flex-shrink: 0;">
            <i class="fa-solid fa-shop"></i>
          </div>
          <div style="flex: 1;">
            <div style="font-family: var(--font-heading); font-size: 1.1rem; font-weight: 800; color: #0a0d0a; margin-bottom: 2px;">
              I am a Vendor / Buyer
            </div>
            <div style="font-size: 0.84rem; color: #585858; line-height: 1.4; margin-bottom: 6px;">
              Procure fresh farm produce in wholesale or retail quantities directly from growers.
            </div>
            <span style="font-size: 0.85rem; font-weight: 700; color: #035925; display: inline-flex; align-items: center; gap: 4px;">
              <span>Register as Vendor</span>
              <i class="fa-solid fa-arrow-right" style="font-size: 0.75rem;"></i>
            </span>
          </div>
        </a>

      </div>

      <div class="auth-form-footer">
        Already have an account? <a href="login.php">Sign In Here</a>
      </div>

    </div>
  </div>
</div>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
