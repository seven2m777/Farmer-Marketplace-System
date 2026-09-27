<?php
// login page handling
$page_title = "Sign In — FarmLink";

$error_message = '';
$success_message = '';

if (isset($_GET['registered']) && $_GET['registered'] == '1') {
    $success_message = "Account created successfully! You can now log in.";
}

// default role is farmer
$selected_role = isset($_GET['role']) ? strtolower($_GET['role']) : 'farmer';
if (!in_array($selected_role, ['farmer', 'vendor', 'operator', 'admin'])) {
    $selected_role = 'farmer';
}
if ($selected_role === 'customer') {
    $selected_role = 'vendor';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_email = trim($_POST['email'] ?? '');
    $user_password = $_POST['password'] ?? '';
    $user_role = trim($_POST['role'] ?? 'farmer');

    if ($user_role === 'customer') {
        $user_role = 'vendor';
    }

    if ($user_email === '' || $user_password === '') {
        $error_message = "Please enter your email or phone number and your password.";
    } else {
        session_start();
        $_SESSION['user_id'] = 101;
        $_SESSION['user_email'] = $user_email;
        $_SESSION['user_name'] = 'FarmLink User';
        $_SESSION['user_role'] = $user_role;

        if ($user_role === 'farmer') {
            header("Location: farmer/dashboard.php");
            exit();
        } elseif ($user_role === 'vendor') {
            header("Location: vendor/dashboard.php");
            exit();
        } elseif ($user_role === 'operator') {
            header("Location: operator/dashboard.php");
            exit();
        } elseif ($user_role === 'admin') {
            header("Location: admin/dashboard.php");
            exit();
        } else {
            header("Location: index.php");
            exit();
        }
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
          <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
            <path d="M17 8C8 10 5.9 16.17 3.82 21.34L5.71 22L6.66 19.7C12 19.7 20.2 16.9 21.6 8.5C21.7 8 21.4 7.6 20.9 7.7C18.6 8.2 16.6 8.9 14.8 9.8C16.8 6.4 19.3 4 20.3 3.1C20.6 2.8 20.5 2.3 20.1 2.2C15.8 1.4 10.3 4.3 7.8 7.4C7.5 7.8 7.8 8.4 8.3 8.3C10.8 7.7 13.9 7.4 17 8Z"/>
          </svg>
        </div>
        <span class="auth-logo-text">FarmLink</span>
      </div>

      <h2 class="auth-form-heading">Welcome back.</h2>
      <p class="auth-form-subtext">Sign in to your dashboard to continue.</p>

      <?php if (!empty($error_message)): ?>
        <div class="auth-alert error">
          <i class="fa-solid fa-circle-exclamation"></i>
          <span><?php echo htmlspecialchars($error_message); ?></span>
        </div>
      <?php endif; ?>

      <?php if (!empty($success_message)): ?>
        <div class="auth-alert success">
          <i class="fa-solid fa-circle-check"></i>
          <span><?php echo htmlspecialchars($success_message); ?></span>
        </div>
      <?php endif; ?>

      <!-- Role tabs -->
      <div class="auth-role-pills" id="rolePills">
        <button type="button" class="auth-role-pill <?php echo ($selected_role === 'farmer') ? 'active' : ''; ?>" data-role="farmer" onclick="pickRole('farmer')">
          <i class="fa-solid fa-wheat-awn"></i>
          <span class="role-name">Farmer</span>
        </button>

        <button type="button" class="auth-role-pill <?php echo ($selected_role === 'vendor') ? 'active' : ''; ?>" data-role="vendor" onclick="pickRole('vendor')">
          <i class="fa-solid fa-shop"></i>
          <span class="role-name">Vendor</span>
        </button>

        <button type="button" class="auth-role-pill <?php echo ($selected_role === 'operator') ? 'active' : ''; ?>" data-role="operator" onclick="pickRole('operator')">
          <i class="fa-solid fa-snowflake"></i>
          <span class="role-name">Operator</span>
        </button>

        <button type="button" class="auth-role-pill <?php echo ($selected_role === 'admin') ? 'active' : ''; ?>" data-role="admin" onclick="pickRole('admin')">
          <i class="fa-solid fa-shield-halved"></i>
          <span class="role-name">Admin</span>
        </button>
      </div>

      <form action="login.php" method="POST" id="loginForm">
        <input type="hidden" name="role" id="roleField" value="<?php echo htmlspecialchars($selected_role); ?>">

        <div class="auth-group">
          <label for="emailInput" class="auth-label">Email Address or Mobile Phone</label>
          <div class="auth-input-wrap">
            <i class="fa-solid fa-user input-icon-left"></i>
            <input type="text" name="email" id="emailInput" class="auth-input" placeholder="e.g. farmer@gmail.com or 9841234567" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>" required>
          </div>
        </div>

        <div class="auth-group">
          <label for="pwdInput" class="auth-label">Password</label>
          <div class="auth-input-wrap">
            <i class="fa-solid fa-lock input-icon-left"></i>
            <input type="password" name="password" id="pwdInput" class="auth-input" placeholder="Enter your password" required>
            <button type="button" class="auth-pwd-toggle" onclick="togglePwd('pwdInput', this)" aria-label="Toggle password visibility">
              <i class="fa-solid fa-eye"></i>
            </button>
          </div>
        </div>

        <div class="auth-options-row">
          <label class="auth-checkbox-label">
            <input type="checkbox" name="remember" value="1">
            <span>Remember me</span>
          </label>
          <a href="javascript:alert('Password reset link sent to your email/phone.');" class="auth-forgot-link">
            Forgot password?
          </a>
        </div>

        <button type="submit" class="auth-submit-btn" id="submitBtn">
          <i class="fa-solid fa-right-to-bracket"></i>
          <span id="submitBtnText">Sign In as Farmer</span>
        </button>
      </form>

      <div class="auth-form-footer">
        Don't have an account? <a href="register.php">Create an Account</a>
      </div>

    </div>
  </div>
</div>

<script>
  function pickRole(role) {
    document.getElementById('roleField').value = role;

    var pills = document.querySelectorAll('.auth-role-pill');
    for (var i = 0; i < pills.length; i++) {
      if (pills[i].getAttribute('data-role') === role) {
        pills[i].classList.add('active');
      } else {
        pills[i].classList.remove('active');
      }
    }

    var btnLabel = 'Sign In as ' + role.charAt(0).toUpperCase() + role.slice(1);
    document.getElementById('submitBtnText').textContent = btnLabel;
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

  document.addEventListener('DOMContentLoaded', function() {
    pickRole('<?php echo htmlspecialchars($selected_role); ?>');
  });
</script>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
