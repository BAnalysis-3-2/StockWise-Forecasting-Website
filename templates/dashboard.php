<?php
session_start();
if (!isset($_SESSION['user'])) {
  header("Location: ../templates/auth.html");
  exit;
}
$user = $_SESSION['user'];
$name = isset($user['name']) ? $user['name'] : 'Safe-Tech User';
$email = isset($user['email']) ? $user['email'] : 'unknown';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Dashboard | Safe-Tech Solutions</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Styles -->
  <link rel="icon" type="image/png" href="../static/images/favicon.png">
  <link rel="stylesheet" href="../static/css/style.css">
  <link rel="stylesheet" href="../static/css/responsive.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <script src="../static/js/script.js" defer></script>
  <script src="../static/js/dashboard.js" defer></script>

  <!-- Vanta.js & Chart.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
  <div id="st-vanta-bg">
    <div class="st-dashboard-layout">
      <!-- Sidebar -->
      <aside class="st-sidebar">
        <div class="st-logo">
          <img src="../static/images/Safe-Tech Logo.jpg" alt="Safe-Tech Logo">
          <div>
            <!-- <h2>Safe-Tech</h2> -->
            <!-- <small>Smarter forecasting, stronger retail.</small>-->
          </div>
        </div>

        <ul class="st-sidebar-nav">
          <li class="active"><i class="fas fa-home"></i> Dashboard</li>
          <li><i class="fas fa-chart-line"></i> Forecasts</li>

          <li id="nav-upload"><i class="fas fa-upload"></i> Upload CSV</li>

          <li><i class="fas fa-lightbulb"></i> Insights</li>
          <li><i class="fas fa-terminal"></i> CLI Setup</li>
          <li><i class="fas fa-book"></i> Glossary</li>
          <li><i class="fas fa-cog"></i> Settings</li>
        </ul>

        <div class="st-user-badge">
          <div class="st-avatar"><?php echo strtoupper(substr($name, 0, 1)); ?></div>
          <p><?php echo htmlspecialchars($name); ?></p>
          <span>Professional User</span>
        </div>
      </aside>

      <!-- Main Panel -->
      <main class="st-main-panel">
        <!-- Header Section -->
        <div class="st-header-bar">
          <div class="st-header-left">
            <h1>Welcome back, <?php echo htmlspecialchars($name); ?>!</h1>
            <p>Here's your forecasting overview.</p>
          </div>
          <!-- Trigger Button -->
          <button class="st-signout-btn" id="st-signout-trigger" title="Sign Out">
            <i class="fas fa-sign-out-alt"></i> Sign Out
          </button>

          <!-- Modal -->
          <div id="st-signout-modal" class="st-modal-overlay">
            <div class="st-modal-box">
              <h3>Confirm Sign Out</h3>
              <p>Are you sure you want to sign out?</p>
              <div class="st-modal-actions">
                <form method="post" action="../php/logout.php">
                  <button type="submit" class="st-modal-confirm">Yes, Sign Out</button>
                </form>
                <button class="st-modal-cancel">Cancel</button>
              </div>
            </div>
          </div>


        </div>

        <!-- Dynamic Content Area -->
        <div id="st-dynamic-content"></div>
        <template id="upload-template">
          <section id="upload-section" class="st-upload-area">
            <h2>Upload CSV</h2>
            <form action="../php/upload-handler.php" method="POST" enctype="multipart/form-data" class="upload-form">
              <label for="csvFile">Choose a CSV file:</label>
              <input type="file" name="csvFile" id="csvFile" accept=".csv" required>
              <button type="submit">Upload</button>
            </form>
          </section>
        </template>

      </main>
    </div>
  </div>

  <!-- Inject user name for JS -->
  <script>
    const userName = <?php echo json_encode($name); ?>;
  </script>
  <script src="../static/js/script.js"></script>
</body>

</html>