<?php
// vendor registration page
$page_title = "Vendor Registration — FarmLink";

$error_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $full_name = trim($_POST['full_name'] ?? '');
    $vendor_type = trim($_POST['vendor_type'] ?? 'Wholesale Vendor');
    $business_name = trim($_POST['business_name'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $district = trim($_POST['district'] ?? '');
    $address = trim($_POST['address'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';
    $terms = isset($_POST['terms']);

    if ($full_name === '' || $phone === '' || $district === '' || $password === '') {
        $error_message = "Please fill in all required fields marked with *";
    } elseif ($password !== $confirm_password) {
        $error_message = "Passwords do not match. Please try again.";
    } elseif (strlen($password) < 6) {
        $error_message = "Password must be at least 6 characters long.";
    } elseif (!$terms) {
        $error_message = "Please accept the Terms of Service & Privacy Policy.";
    } else {
        header("Location: login.php?registered=1&role=vendor");
        exit();
    }
}

require_once __DIR__ . '/includes/header.php';
?>

<div class="auth-split-page">
  <div class="auth-centered-container">
    <div class="auth-form-box">

      <!-- Logo -->
      <div class="auth-logo-mark">
        <div class="auth-logo-icon">
          <i class="fa-solid fa-shop"></i>
        </div>
        <span class="auth-logo-text">FarmLink</span>
      </div>

      <h2 class="auth-form-heading">Vendor Registration</h2>
      <p class="auth-form-subtext" id="stepSubtext">Step 1 of 2: Business &amp; contact details.</p>

      <!-- Step bar -->
      <div class="auth-step-progress">
        <div class="auth-step-bar-wrap">
          <div class="auth-step-bar" id="stepProgressBar" style="width: 50%;"></div>
        </div>
        <span class="auth-step-label" id="stepLabel">Step 1 of 2</span>
      </div>

      <?php if (!empty($error_message)): ?>
        <div class="auth-alert error">
          <i class="fa-solid fa-circle-exclamation"></i>
          <span><?php echo htmlspecialchars($error_message); ?></span>
        </div>
      <?php endif; ?>

      <form action="vendor-register.php" method="POST" id="vendorRegisterForm">

        <!-- step 1: info -->
        <div id="step1Container">
          <div class="auth-grid-2">
            <div class="auth-group">
              <label class="auth-label">Full Name *</label>
              <div class="auth-input-wrap">
                <i class="fa-solid fa-user input-icon-left"></i>
                <input type="text" name="full_name" id="fullNameInput" class="auth-input" placeholder="e.g. Ramesh Shrestha" value="<?php echo htmlspecialchars($_POST['full_name'] ?? ''); ?>" required>
              </div>
            </div>

            <div class="auth-group">
              <label class="auth-label">Account Type *</label>
              <div class="auth-input-wrap">
                <i class="fa-solid fa-briefcase input-icon-left"></i>
                <select name="vendor_type" class="auth-input auth-select" required>
                  <option value="Wholesale Vendor">Wholesale Merchant</option>
                  <option value="Retailer">Retail Shop</option>
                  <option value="Restaurant Supplier">Restaurant / Hotel</option>
                  <option value="Individual Buyer">Individual Buyer</option>
                </select>
              </div>
            </div>
          </div>

          <div class="auth-grid-2">
            <div class="auth-group">
              <label class="auth-label">Mobile Phone *</label>
              <div class="auth-input-wrap">
                <i class="fa-solid fa-phone input-icon-left"></i>
                <input type="tel" name="phone" id="phoneInput" class="auth-input" placeholder="e.g. 9812345678" value="<?php echo htmlspecialchars($_POST['phone'] ?? ''); ?>" required>
              </div>
            </div>

            <div class="auth-group">
              <label class="auth-label">City / District *</label>
              <div class="auth-input-wrap">
                <i class="fa-solid fa-location-dot input-icon-left"></i>
                <select name="district" id="districtInput" class="auth-input auth-select" required>
                  <option value="">Select District</option>
                  <option value="Kathmandu" <?php echo (($_POST['district'] ?? '') === 'Kathmandu') ? 'selected' : ''; ?>>Kathmandu</option>
                  <option value="Lalitpur" <?php echo (($_POST['district'] ?? '') === 'Lalitpur') ? 'selected' : ''; ?>>Lalitpur</option>
                  <option value="Bhaktapur" <?php echo (($_POST['district'] ?? '') === 'Bhaktapur') ? 'selected' : ''; ?>>Bhaktapur</option>
                  <option value="Pokhara" <?php echo (($_POST['district'] ?? '') === 'Pokhara') ? 'selected' : ''; ?>>Pokhara</option>
                  <option value="Chitwan" <?php echo (($_POST['district'] ?? '') === 'Chitwan') ? 'selected' : ''; ?>>Chitwan</option>
                  <option value="Biratnagar" <?php echo (($_POST['district'] ?? '') === 'Biratnagar') ? 'selected' : ''; ?>>Biratnagar</option>
                </select>
              </div>
            </div>
          </div>

          <div class="auth-group">
            <label class="auth-label">Business / Firm Name (Optional)</label>
            <div class="auth-input-wrap">
              <i class="fa-solid fa-building input-icon-left"></i>
              <input type="text" name="business_name" class="auth-input" placeholder="e.g. Eastern Produce Wholesale" value="<?php echo htmlspecialchars($_POST['business_name'] ?? ''); ?>">
            </div>
          </div>

          <button type="button" class="auth-submit-btn" onclick="goToStep(2)">
            <span>Next: Security &amp; Credentials</span>
            <i class="fa-solid fa-arrow-right"></i>
          </button>
        </div>

        <!-- step 2: password -->
        <div id="step2Container" style="display: none;">
          <div class="auth-grid-2">
            <div class="auth-group">
              <label class="auth-label">Email Address (Optional)</label>
              <div class="auth-input-wrap">
                <i class="fa-solid fa-envelope input-icon-left"></i>
                <input type="email" name="email" class="auth-input" placeholder="vendor@gmail.com" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
              </div>
            </div>

            <div class="auth-group">
              <label class="auth-label">Delivery Street Address</label>
              <div class="auth-input-wrap">
                <i class="fa-solid fa-truck input-icon-left"></i>
                <input type="text" name="address" class="auth-input" placeholder="e.g. Kalimati Market Yard #4" value="<?php echo htmlspecialchars($_POST['address'] ?? ''); ?>">
              </div>
            </div>
          </div>

          <div class="auth-grid-2">
            <div class="auth-group">
              <label class="auth-label">Create Password *</label>
              <div class="auth-input-wrap">
                <i class="fa-solid fa-lock input-icon-left"></i>
                <input type="password" name="password" id="pass1" class="auth-input" placeholder="Min. 6 chars">
                <button type="button" class="auth-pwd-toggle" onclick="togglePwd('pass1', this)"><i class="fa-solid fa-eye"></i></button>
              </div>
            </div>

            <div class="auth-group">
              <label class="auth-label">Confirm Password *</label>
              <div class="auth-input-wrap">
                <i class="fa-solid fa-shield-halved input-icon-left"></i>
                <input type="password" name="confirm_password" id="pass2" class="auth-input" placeholder="Confirm password">
                <button type="button" class="auth-pwd-toggle" onclick="togglePwd('pass2', this)"><i class="fa-solid fa-eye"></i></button>
              </div>
            </div>
          </div>

          <div class="auth-group" style="margin-bottom: 18px;">
            <label class="auth-checkbox-label">
              <input type="checkbox" name="terms" id="termsCheck" value="1" required>
              <span>I agree to the Terms of Service &amp; Privacy Policy.</span>
            </label>
          </div>

          <div class="auth-btn-row">
            <button type="button" class="auth-back-btn" onclick="goToStep(1)">
              <i class="fa-solid fa-arrow-left"></i>
              <span>Back</span>
            </button>
            <button type="submit" class="auth-submit-btn" style="flex: 1;">
              <i class="fa-solid fa-shop"></i>
              <span>Complete Registration</span>
            </button>
          </div>
        </div>

      </form>

      <div class="auth-form-footer">
        Already registered? <a href="login.php?role=vendor">Sign In to Vendor Portal</a>
      </div>

    </div>
  </div>
</div>

<script>
  function goToStep(step) {
    if (step === 2) {
      var name = document.getElementById('fullNameInput').value.trim();
      var phone = document.getElementById('phoneInput').value.trim();
      var district = document.getElementById('districtInput').value;

      if (!name || !phone || !district) {
        alert('Please fill in Full Name, Mobile Phone, and District before continuing.');
        return;
      }

      document.getElementById('step1Container').style.display = 'none';
      document.getElementById('step2Container').style.display = 'block';
      document.getElementById('stepProgressBar').style.width = '100%';
      document.getElementById('stepLabel').textContent = 'Step 2 of 2';
      document.getElementById('stepSubtext').textContent = 'Step 2 of 2: Set your account credentials.';
      document.getElementById('pass1').setAttribute('required', 'required');
      document.getElementById('pass2').setAttribute('required', 'required');
    } else {
      document.getElementById('step2Container').style.display = 'none';
      document.getElementById('step1Container').style.display = 'block';
      document.getElementById('stepProgressBar').style.width = '50%';
      document.getElementById('stepLabel').textContent = 'Step 1 of 2';
      document.getElementById('stepSubtext').textContent = 'Step 1 of 2: Business & contact details.';
    }
  }

  function togglePwd(inputId, btn) {
    var field = document.getElementById(inputId);
    var icon = btn.querySelector('i');
    if (field.type === 'password') {
      field.type = 'text';
      icon.className = 'fa-solid fa-eye-slash';
    } else {
      field.type = 'password';
      icon.className = 'fa-solid fa-eye';
    }
  }
</script>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
