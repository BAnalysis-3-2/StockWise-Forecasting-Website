<header class="main-header">
  <!-- Logo Group -->
  <div class="logo-group">
      <a href="../index.php">
        <img src="../static/images/Safe-Tech Logo.jpg" alt="Safe-Tech Solutions Logo" class="logo-img">
      </a>
    <span class="main-logo-text">SAFE-TECH SOLUTIONS</span>
  </div>

  <!-- Main Navigation -->
  <button class="menu-toggle" onclick="toggleMenu()">☰</button>
  <ul class="nav-links" id="navMenu">
    <li>
      <a href="index.php">
        <span data-lang="en">Home</span>
        <span data-lang="zu">Ikhaya</span>
      </a>
    </li>
    <li>
      <a href="about.php">
        <span data-lang="en">About</span>
        <span data-lang="zu">Mayelana</span>
      </a>
    </li>
    <li>
      <a href="contacts.php">
        <span data-lang="en">Contact</span>
        <span data-lang="zu">Xhumana</span>
      </a>
    </li>
    <li>
      <a href="auth.php" class="top-start-btn">
        <span data-lang="en">Get Started</span>
        <span data-lang="zu">Qala Manje</span>
      </a>
    </li>

    <!-- ☰ More Button -->
    <li class="utility-trigger">
      <button onclick="toggleUtilityMenu()">☰</button>
    </li>
  </ul>

  <!-- Dropdown Utility Menu -->
  <div class="utility-menu" id="utilityMenu">
    <ul>
      <li>
        <select id="language-toggle" class="lang-toggle">
          <option value="en">English</option>
          <option value="zu">isiZulu</option>
        </select>
      </li>
      <li><a href="#contacts.php#faq"><span data-lang="en">FAQ</span><span data-lang="zu">Imibuzo</span></a></li>
      <li><a href="about.php#glossary"><span data-lang="en">Glossary</span><span data-lang="zu">Incazelo</span></a></li>
      <li><a href="#" onclick="openDemoModal()"><span data-lang="en">Demo</span><span data-lang="zu">Umbukiso</span></a></li>
      <li><a href="#contacts.php"><span data-lang="en">CLI Guide</span><span data-lang="zu">Umhlahlandlela</span></a></li>
    </ul>
  </div>
</header>