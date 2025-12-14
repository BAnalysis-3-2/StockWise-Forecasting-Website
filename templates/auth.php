<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login / Signup | Safe-Tech Solutions</title>

  <link rel="icon" type="image/png" href="../static/images/favicon.png">
  <link rel="stylesheet" href="../static/css/style.css">
  <link rel="stylesheet" href="../static/css/responsive.css">
  <script src="../static/js/script.js" defer></script>
  <script src="../static/js/language_switcher.js" defer></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
 
  <!--
    Vanta.js & Chart.js 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->

  <script defer>
    function showSignup() {
      const loginForm = document.querySelector(".login-form");
      const signupForm = document.querySelector(".register-form");

      loginForm.style.opacity = 0;
      setTimeout(() => {
        loginForm.style.display = "none";
        signupForm.style.display = "block";
        signupForm.style.opacity = 1;
        document.getElementById("register-name").focus();
      }, 300);
    }

    function showLogin() {
      const loginForm = document.querySelector(".login-form");
      const signupForm = document.querySelector(".register-form");

      signupForm.style.opacity = 0;
      setTimeout(() => {
        signupForm.style.display = "none";
        loginForm.style.display = "block";
        loginForm.style.opacity = 1;
        document.getElementById("login-email").focus();
      }, 300);
    }

    function togglePassword(id, iconId) {
      const input = document.getElementById(id);
      const icon = document.getElementById(iconId);
      if (input.type === "password") {
        input.type = "text";
        icon.classList.replace("fa-eye", "fa-eye-slash");
      } else {
        input.type = "password";
        icon.classList.replace("fa-eye-slash", "fa-eye");
      }
    }

    window.onload = () => {
      const params = new URLSearchParams(window.location.search);
      if (params.has('registered') || params.get('error') === 'exists') {
        showLogin();
      } else {
        showLogin();
      }
    };

    function validatePrivacyAgreement() {
  const checkbox = document.getElementById("privacy-agree");
  if (!checkbox.checked) {
    alert("You must agree to the Privacy Policy before signing up.");
    return false;
  }
  return true;
}

  </script>

</head>

<body>

<!--<div id="st-vanta-bg">-->

  <?php include '../static/components/header.php'; ?>

<section class="auth-section">
  <h1>
    <span data-lang="en">Welcome to Safe-Tech</span>
    <span data-lang="zu">Siyakwamukela ku-Safe-Tech</span>
  </h1>

  <p>
    <span data-lang="en">Login to your account or create one to access secure tools.</span>
    <span data-lang="zu">Ngena ku-akhawunti yakho noma udale entsha ukuze usebenzise amathuluzi aphephile.</span>
  </p>

  <!-- 🔔 Feedback Messages -->
  <?php
  if (isset($_GET['registered'])) {
    echo '<p class="auth-message success"><span data-lang="en">Registration successful. You can now log in.</span><span data-lang="zu">Ubhalise ngempumelelo. Manje usungangena.</span></p>';
  }
  if (isset($_GET['error'])) {
    $error = $_GET['error'];
    if ($error === 'invalid') echo '<p class="auth-message error"><span data-lang="en">Invalid credentials. Please try again.</span><span data-lang="zu">Ulwazi olufakiwe alulungile. Zama futhi.</span></p>';
    if ($error === 'exists') echo '<p class="auth-message error"><span data-lang="en">Email already registered.</span><span data-lang="zu">I-imeyili isivele ibhalisiwe.</span></p>';
    if ($error === 'incomplete') echo '<p class="auth-message error"><span data-lang="en">Please fill in all required fields.</span><span data-lang="zu">Sicela ugcwalise zonke izinkambu ezidingekayo.</span></p>';
  }
  ?>

  <div class="auth-toggle">
    <button onclick="showLogin()">
      <span data-lang="en">Login</span>
      <span data-lang="zu">Ngena</span>
    </button>
    <button onclick="showSignup()">
      <span data-lang="en">Sign Up</span>
      <span data-lang="zu">Bhalisa</span>
    </button>
  </div>

  <div class="auth-forms">
    <!-- 🔐 Login Form -->
    <form method="POST" action="../php/auth_handler.php" class="auth-form login-form">
      <h2>
        <span data-lang="en">Login</span>
        <span data-lang="zu">Ngena</span>
      </h2>

      <label for="login-email">
        <span data-lang="en">Email:</span>
        <span data-lang="zu">I-imeyili:</span>
      </label>
      <input type="email" id="login-email" name="login_email" required>

      <label for="login-password">
        <span data-lang="en">Password:</span>
        <span data-lang="zu">Iphasiwedi:</span>
      </label>
      <div class="password-wrapper">
        <input type="password" id="login-password" name="login_password" required>
        <i class="fas fa-eye" id="login-toggle" onclick="togglePassword('login-password', 'login-toggle')"></i>
      </div>

      <button type="submit" name="action" value="login">
        <span data-lang="en">Login</span>
        <span data-lang="zu">Ngena</span>
      </button>
    </form>

    <!-- 📝 Registration Form -->
    <form method="POST" action="../php/auth_handler.php" class="auth-form register-form" style="display: none;" onsubmit="return validatePrivacyAgreement()">
      <h2>
        <span data-lang="en">Sign Up</span>
        <span data-lang="zu">Bhalisa</span>
      </h2>

      <label for="register-name">
        <span data-lang="en">Full Name:</span>
        <span data-lang="zu">Igama Eligcwele:</span>
      </label>
      <input type="text" id="register-name" name="register_name" required>

      <label for="register-email">
        <span data-lang="en">Email:</span>
        <span data-lang="zu">I-imeyili:</span>
      </label>
      <input type="email" id="register-email" name="register_email" required>

      <label for="register-password">
        <span data-lang="en">Password:</span>
        <span data-lang="zu">Iphasiwedi:</span>
      </label>
      <div class="password-wrapper">
        <input type="password" id="register-password" name="register_password" required>
        <i class="fas fa-eye" id="register-toggle" onclick="togglePassword('register-password', 'register-toggle')"></i>
      </div>

      <label class="privacy-check">
        <input type="checkbox" id="privacy-agree" required>
        <span data-lang="en">I agree to the <a href="about.php#privacy-policy" target="_blank">Privacy Policy</a></span>
        <span data-lang="zu">Ngiyavuma <a href="about.php#privacy-policy" target="_blank">Inqubomgomo Yobumfihlo</a></span>
      </label>

      <button type="submit" name="action" value="register">
        <span data-lang="en">Create Account</span>
        <span data-lang="zu">Dala I-akhawunti</span>
      </button>
    </form>
  </div>
</section>

<!--</div>-->

  <?php include '../static/components/footer.php'; ?>

</body>

</html>