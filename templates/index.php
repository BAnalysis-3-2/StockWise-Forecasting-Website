<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Home | Safe-Tech Solutions</title>
  <link rel="icon" type="image/png" href="static/images/favicon.png">
  <link rel="stylesheet" href="../static/css/style.css">
  <link rel="stylesheet" href="../static/css/responsive.css">

  <script src="../static/js/script.js" defer></script>
  <script src="../static/js/language_switcher.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>

  <header>
    <!-- Logo Group -->
    <div class="logo-group">
      <a href="index.php">
        <img src="../static/images/Safe-Tech Logo.jpg" alt="Safe-Tech Solutions Logo" class="logo-img">
      </a>

      <span class="logo-text">SAFE-TECH SOLUTIONS</span>

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
        <li><a href="contacts.php#faq"><span data-lang="en">FAQ</span><span data-lang="zu">Imibuzo</span></a></li>
        <li><a href="#about.php#glossary"><span data-lang="en">Glossary</span><span data-lang="zu">Incazelo</span></a></li>
        <li><a href="#" onclick="openDemoModal()"><span data-lang="en">Demo</span><span data-lang="zu">Umbukiso</span></a></li>
        <li><a href="about.php#cli-guide"><span data-lang="en">CLI Guide</span><span data-lang="zu">Umhlahlandlela</span></a></li>
      </ul>
    </div>
  </header>


  <section class="hero">
    <div id="vanta-bg"></div>

    <div class="hero-content">
      <h1>
        <span data-lang="en">Smarter Retail Forecasting with AI</span>
        <span data-lang="zu">Ukubikezela Okunobuhlakani Kwezokuthengisa nge-AI</span>
      </h1>

      <p>
        <span data-lang="en">Empowering South African SMEs with intelligent demand prediction and real-time insights.</span>
        <span data-lang="zu">Ukuqinisa ama-SME aseNingizimu Afrika ngokubikezela kwesidingo ngobuhlakani nokuhlaziywa kwesikhathi sangempela.</span>
      </p>

      <a href="auth.php" class="hero-start-btn">
        <span data-lang="en">Get Started</span>
        <span data-lang="zu">Qala Manje</span>
      </a>
    </div>
  </section>

  <!-- Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r119/three.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.globe.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.dots.min.js"></script>
  <script src="../static/js/heroCanvas.js"></script>

  <main class="main-content">

    <!-- ===================================================
     OVERVIEW SECTION (Home Page)
=================================================== -->
    <section class="overview">
      <div class="overview-grid">
        <!-- Left: Text Content -->
        <div class="overview-text">
          <h2>AI Forecasting System Overview</h2>
          <p>
            Safe-Tech Solutions empowers South African retailers with intelligent demand forecasting tools.
            Our system uses machine learning models like ARIMA, XGBoost, and LSTM to predict product demand
            with over 90% accuracy. Designed for township retailers and SMEs, it supports smarter purchasing,
            reduces waste, and improves profitability.
          </p>
        </div>

        <!-- Right: Video -->
        <div class="overview-video">
          <video controls>
            <source src="../static/videos/video.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        </div>
      </div>
    </section>


    <!-- Solutions Section -->
    <section class="solutions">
      <h2>
        <span data-lang="en">Our Solutions</span>
        <span data-lang="zu">Izixazululo Zethu</span>
      </h2>

      <div class="carousel">
        <button class="carousel-control prev">&#9664;</button>

        <div class="carousel-track">
          <div class="carousel-item">
            <img src="../static/icons/inventory-optimization.svg" alt="Inventory Optimization">
            <div class="carousel-labels">
              <p data-lang="en">Inventory Optimization</p>
              <p data-lang="zu">Ukuthuthukiswa Kwempahla</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../static/icons/inventory-forecasting.svg" alt="Inventory Forecasting">
            <div class="carousel-labels">
              <p data-lang="en">Inventory Forecasting</p>
              <p data-lang="zu">Ukubikezela Kwempahla</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../static/icons/inventory-optimization.svg" alt="Inventory Ordering">
            <div class="carousel-labels">
              <p data-lang="en">Inventory Ordering</p>
              <p data-lang="zu">Uku-oda Kwempahla</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../static/icons/supplier-performance.svg" alt="Supplier Performance">
            <div class="carousel-labels">
              <p data-lang="en">Supplier Performance</p>
              <p data-lang="zu">Ukusebenza Kwabahlinzeki</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../static/icons/demand-planning.svg" alt="Demand Planning">
            <div class="carousel-labels">
              <p data-lang="en">Demand Planning</p>
              <p data-lang="zu">Ukuhlela Isidingo</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../static/icons/capacity-planning.svg" alt="Capacity Planning">
            <div class="carousel-labels">
              <p data-lang="en">Capacity Planning</p>
              <p data-lang="zu">Ukuhlela Amandla</p>
            </div>
          </div>
        </div>

        <button class="carousel-control next">&#9654;</button>
      </div>
    </section>


    <!-- Benefits Section -->

    <section class="benefits section-fade">
      <h2>
        <span data-lang="en">Key Benefits of Our Forecasting System</span>
        <span data-lang="zu">Izinzuzo Ezibalulekile Zohlelo Lwethu Lokubikezela</span>
      </h2>

      <div class="benefit-grid">
        <div class="benefit-card">
          <h3>90%+</h3>
          <p data-lang="en">Accurate demand forecasting with machine learning</p>
          <p data-lang="zu">Ukubikezela okunembile kwesidingo kusetshenziswa ubuhlakani bokufunda ngomshini</p>
        </div>
        <div class="benefit-card">
          <h3>50%+</h3>
          <p data-lang="en">Reduction in overstocking and inventory waste</p>
          <p data-lang="zu">Ukwehliswa kokugcwala kwempahla nokuchitha</p>
        </div>
        <div class="benefit-card">
          <h3>30+</h3>
          <p data-lang="en">Product categories optimized for township retailers</p>
          <p data-lang="zu">Izigaba zemikhiqizo ezilungiselelwe abathengisi basemalokishini</p>
        </div>
        <div class="benefit-card">
          <h3>5 Min</h3>
          <p data-lang="en">Forecast generation time for actionable insights</p>
          <p data-lang="zu">Isikhathi sokudala ukubikezela ukuze kutholakale ukuqonda okusebenzayo</p>
        </div>
        <div class="benefit-card">
          <h3>24/7</h3>
          <p data-lang="en">Access to real-time data and monitoring</p>
          <p data-lang="zu">Ukufinyelela kwedatha yesikhathi sangempela nokubhekwa okuqhubekayo</p>
        </div>
        <div class="benefit-card">
          <h3>10+ Yrs</h3>
          <p data-lang="en">Empowering SMEs with over a decade of expertise</p>
          <p data-lang="zu">Ukuqinisa ama-SME ngolwazi lweminyaka engaphezu kweyishumi</p>
        </div>
      </div>
    </section>

    <!-- Features Section -->
    <section class="features section-fade">
      <h2>
        <span data-lang="en">Core Features of Our AI Forecasting Engine</span><br>
        <span data-lang="zu">Izici Eziyinhloko Zenjini Yethu Yokubikezela nge-AI</span>
      </h2>

      <div class="accordion">
        <div class="accordion-item">
          <button type="button" class="accordion-toggle">
            <span data-lang="en">Multi-model forecasting with ARIMA, XGBoost, and LSTM</span>
            <span data-lang="zu">Ukubikezela okuningi nge-ARIMA, XGBoost, ne-LSTM</span>
            <span class="accordion-icon">&#9660;</span>
          </button>
          <div class="accordion-content">
            <p data-lang="en">Employs advanced machine learning techniques for highly accurate demand prediction across diverse product types.</p>
            <p data-lang="zu">Isebenzisa ubuchwepheshe bokufunda ngama-algorithm athuthukile ukuze ibikezele isidingo ngokunembile kumikhiqizo ehlukahlukene.</p>
          </div>
        </div>

        <div class="accordion-item">
          <button type="button" class="accordion-toggle">
            <span data-lang="en">Real-time dashboard with interactive charts</span>
            <span data-lang="zu">Ideshibhodi yesikhathi sangempela enamashadi asebenzisanayo</span>
            <span class="accordion-icon">&#9660;</span>
          </button>
          <div class="accordion-content">
            <p data-lang="en">Visualize trends, compare forecasts, and monitor performance instantly with dynamic charts and KPIs.</p>
            <p data-lang="zu">Bona izitayela, qhathanisa ukubikezela, futhi ulandele ukusebenza ngokushesha usebenzisa amashadi aguquguqukayo nama-KPI.</p>
          </div>
        </div>

        <div class="accordion-item">
          <button type="button" class="accordion-toggle">
            <span data-lang="en">Upload CSV data and generate forecasts instantly</span>
            <span data-lang="zu">Layisha idatha ye-CSV bese udala ukubikezela ngokushesha</span>
            <span class="accordion-icon">&#9660;</span>
          </button>
          <div class="accordion-content">
            <p data-lang="en">Drag-and-drop CSV files to trigger automated preprocessing and forecasting workflows.</p>
            <p data-lang="zu">Hudula bese ulahla amafayela e-CSV ukuze uqale ukuhlela okuzenzakalelayo nokubikezela okuzenzakalelayo.</p>
          </div>
        </div>

        <div class="accordion-item">
          <button type="button" class="accordion-toggle">
            <span data-lang="en">Customizable time horizons and product categories</span>
            <span data-lang="zu">Izikhathi zokubikezela eziguquguqukayo nezigaba zemikhiqizo</span>
            <span class="accordion-icon">&#9660;</span>
          </button>
          <div class="accordion-content">
            <p data-lang="en">Tailor forecasts to specific timeframes and product types based on your business needs.</p>
            <p data-lang="zu">Lungisa ukubikezela ukuze kuhambisane nezikhathi ezithile nezigaba zemikhiqizo ngokuya ngezidingo zebhizinisi lakho.</p>
          </div>
        </div>

        <div class="accordion-item">
          <button type="button" class="accordion-toggle">
            <span data-lang="en">Secure user login and session management</span>
            <span data-lang="zu">Ukungena komsebenzisi okuphephile nokuphathwa kweseshini</span>
            <span class="accordion-icon">&#9660;</span>
          </button>
          <div class="accordion-content">
            <p data-lang="en">Protect user data with encrypted login, session tracking, and role-based access control.</p>
            <p data-lang="zu">Vikela idatha yomsebenzisi ngokungena okuvikelekile, ukulandelela iseshini, nokulawula ukufinyelela ngokuya ngezindima.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Pricing Section -->
    <section class="pricing section-fade">
      <h2 class="pricing-title">
        <span data-lang="en">Simple pricing. No surprises.</span>
        <span data-lang="zu">Amanani alula. Akunasimanga.</span>
      </h2>

      <div class="pricing-grid">
        <div class="pricing-card">
          <h3>STANDARD</h3>
          <p class="price">R 449</p>
          <p>
            <span data-lang="en">/month billed annually</span>
            <span data-lang="zu">/inyanga ibhajethi yonyaka</span>
          </p>
          <p>
            <span data-lang="en">R 549 billed monthly</span>
            <span data-lang="zu">R 549 ibhajethi yanyanga zonke</span>
          </p>
          <a href="auth.php" class="pricing-btn">
            <span data-lang="en">GET STARTED</span>
            <span data-lang="zu">QALA MANJE</span>
          </a>
        </div>

        <div class="pricing-card popular">
          <div class="tag">
            <span data-lang="en">Most Popular</span>
            <span data-lang="zu">Ethandwa Kakhulu</span>
          </div>
          <h3>PROFESSIONAL</h3>
          <p class="price">R 1199</p>
          <p>
            <span data-lang="en">/month billed annually</span>
            <span data-lang="zu">/inyanga ibhajethi yonyaka</span>
          </p>
          <p>
            <span data-lang="en">R 1399 billed monthly</span>
            <span data-lang="zu">R 1399 ibhajethi yanyanga zonke</span>
          </p>
          <a href="auth.php" class="pricing-btn">
            <span data-lang="en">GET STARTED</span>
            <span data-lang="zu">QALA MANJE</span>
          </a>
        </div>

        <div class="pricing-card">
          <h3>PREMIUM</h3>
          <p class="price">R 1899</p>
          <p>
            <span data-lang="en">/month billed annually</span>
            <span data-lang="zu">/inyanga ibhajethi yonyaka</span>
          </p>
          <p>
            <span data-lang="en">R 2299 billed monthly</span>
            <span data-lang="zu">R 2299 ibhajethi yanyanga zonke</span>
          </p>
          <a href="auth.php" class="pricing-btn">
            <span data-lang="en">GET STARTED</span>
            <span data-lang="zu">QALA MANJE</span>
          </a>
        </div>

        <div class="pricing-card">
          <h3>ENTERPRISE</h3>
          <p class="price">R 3699</p>
          <p>
            <span data-lang="en">/month billed annually</span>
            <span data-lang="zu">/inyanga ibhajethi yonyaka</span>
          </p>
          <p>
            <span data-lang="en">R 4599 billed monthly</span>
            <span data-lang="zu">R 4599 ibhajethi yanyanga zonke</span>
          </p>
          <a href="auth.php" class="pricing-btn">
            <span data-lang="en">GET STARTED</span>
            <span data-lang="zu">QALA MANJE</span>
          </a>
        </div>
      </div>
    </section>



    <!-- Demo CTA -->
    <section class="demo-cta section-fade">
      <h2>
        <span data-lang="en">Free yourself from manual forecasting. Try Safe-Tech now.</span>
        <span data-lang="zu">Zikhulule ekubikezeleni ngesandla. Zama i-Safe-Tech manje.</span>
      </h2>
      <button id="openDemoModal" class="demo-btn">
        <span data-lang="en">Request a Demo</span>
        <span data-lang="zu">Cela iDemo</span>
      </button>
    </section>


    <!-- Request a Demo Modal -->
    <div id="demoModal" class="modal">
      <div class="modal-content">
        <span class="close">&times;</span>
        <h3>
          <span data-lang="en">Request a Demo</span>
          <span data-lang="zu">Cela iDemo</span>
        </h3>

        <form id="demoForm">
          <input type="text" name="firstName" required
            placeholder="First Name" data-lang="en"
            onfocus="this.placeholder=''" onblur="this.placeholder='First Name'">
          <input type="text" name="firstName" required
            placeholder="Igama" data-lang="zu"
            onfocus="this.placeholder=''" onblur="this.placeholder='Igama'">

          <input type="text" name="lastName" required
            placeholder="Last Name" data-lang="en"
            onfocus="this.placeholder=''" onblur="this.placeholder='Last Name'">
          <input type="text" name="lastName" required
            placeholder="Isibongo" data-lang="zu"
            onfocus="this.placeholder=''" onblur="this.placeholder='Isibongo'">

          <input type="email" name="email" required
            placeholder="Email" data-lang="en"
            onfocus="this.placeholder=''" onblur="this.placeholder='Email'">
          <input type="email" name="email" required
            placeholder="I-imeyili" data-lang="zu"
            onfocus="this.placeholder=''" onblur="this.placeholder='I-imeyili'">

          <input type="tel" name="phone" required
            placeholder="Phone" data-lang="en"
            onfocus="this.placeholder=''" onblur="this.placeholder='Phone'">
          <input type="tel" name="phone" required
            placeholder="Ucingo" data-lang="zu"
            onfocus="this.placeholder=''" onblur="this.placeholder='Ucingo'">

          <input type="text" name="company" required
            placeholder="Company" data-lang="en"
            onfocus="this.placeholder=''" onblur="this.placeholder='Company'">
          <input type="text" name="company" required
            placeholder="Inkampani" data-lang="zu"
            onfocus="this.placeholder=''" onblur="this.placeholder='Inkampani'">

          <select name="referral" required>
            <option value="" data-lang="en">How did you hear about us?</option>
            <option value="" data-lang="zu">Uzwile kanjani ngathi?</option>
            <option value="Google">Google</option>
            <option value="Social Media">Social Media</option>
            <option value="Referral">Referral</option>
            <option value="Event">Event</option>
          </select>

          <label class="checkbox-label">
            <input type="checkbox" name="privacy" required>
            <span data-lang="en">I acknowledge Safe-Tech's Privacy Policy and agree to receive communications.</span>
            <span data-lang="zu">Ngiyavuma Inqubomgomo Yobumfihlo ye-Safe-Tech futhi ngiyavuma ukuthola izaziso.</span>
          </label>

          <button type="submit" class="submit-btn">
            <span data-lang="en">Get Demo</span>
            <span data-lang="zu">Thola iDemo</span>
          </button>

          <p id="successMessage" style="display:none; color: green; margin-top: 1rem;">
            <span data-lang="en">✅ Demo request submitted successfully!</span>
            <span data-lang="zu">✅ Isicelo seDemo sithunyelwe ngempumelelo!</span>
          </p>
        </form>
      </div>
    </div>

    <!-- KPI Preview Section -->
    <section class="kpi-preview section-fade">
      <h2>
        <span data-lang="en">Forecasting Insights You’ll See</span><br>
        <span data-lang="zu">Ukuqonda Okuzobonakala Ekubikezelweni</span>
      </h2>

      <div class="kpi-charts">
        <div class="chart-block">
          <h3>📈 Predicted vs Actual Demand</h3>
          <canvas id="demandChart"></canvas>
        </div>

        <div class="chart-block">
          <h3>🛒 Top-Selling Products</h3>
          <canvas id="topProductsChart"></canvas>
        </div>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <!-- Testimonials Section -->
    <section class="success-stories section-fade">
      <h2>
        <span data-lang="en">Retailer Success Stories</span><br>
        <span data-lang="zu">Izindaba Zempumelelo Zabathengisi</span>
      </h2>

      <div class="story-grid">
        <div class="story-card">
          <img src="../static/images/thandi.jpg" alt="Thandi from Soweto" class="story-photo">
          <blockquote data-lang="en">
            “Before using Safe-Tech, we constantly overstocked. Now our stock and profits have improved.”
          </blockquote>
          <blockquote data-lang="zu">
            “Ngaphambi kokusebenzisa i-Safe-Tech, besihlala sinenqwaba yezimpahla. Manje isitoko sethu kanye nenzuzo sekuthuthuke.”
          </blockquote>
          <p class="story-meta">— Thandi, Soweto</p>
          <a href="" class="read-more" data-lang="en">Read More</a>
          <a href="" class="read-more" data-lang="zu">Funda Okuningi</a>
        </div>

        <div class="story-card">
          <img src="../static/images/sibusiso.jpg" alt="Sibusiso from Tembisa" class="story-photo">
          <blockquote data-lang="en">
            “Safe-Tech helped us reduce expired stock by 40%. We now order smarter and sell faster.”
          </blockquote>
          <blockquote data-lang="zu">
            “ISafe-Tech isisize ukwehlisa isitoko esiphelelwe isikhathi ngo-40%. Manje siyalungisa futhi sithengisa ngokushesha.”
          </blockquote>
          <p class="story-meta">— Sibusiso, Tembisa Spaza Owner</p>
          <a href="" class="read-more" data-lang="en">Read More</a>
          <a href="" class="read-more" data-lang="zu">Funda Okuningi</a>
        </div>

        <div class="story-card">
          <img src="../static/images/lerato.jpg" alt="Lerato from Katlehong" class="story-photo">
          <blockquote data-lang="en">
            “I used to guess what to order. Now I trust the dashboard to guide me every week.”
          </blockquote>
          <blockquote data-lang="zu">
            “Ngake ngiqagela ukuthi ngithenge ini. Manje ngithemba ideshibhodi ukuthi ingiqondise masonto onke.”
          </blockquote>
          <p class="story-meta">— Lerato, Katlehong Mini-Mart</p>
          <a href="" class="read-more" data-lang="en">Read More</a>
          <a href="" class="read-more" data-lang="zu">Funda Okuningi</a>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq section-fade">
      <h2>
        <span data-lang="en">Frequently Asked Questions</span><br>
        <span data-lang="zu">Imibuzo Evame Ukubuzwa</span>
      </h2>

      <div class="accordion">
        <div class="accordion-item">
          <button type="button" class="accordion-toggle">
            <span data-lang="en">Do I need technical skills to use this?</span>
            <span data-lang="zu">Ngabe kudingeka amakhono ezobuchwepheshe ukuze ngisebenzise uhlelo?</span>
            <span class="accordion-icon">&#9660;</span>
          </button>
          <div class="accordion-content">
            <p data-lang="en">No, the system is designed for everyday retailers with no technical background.</p>
            <p data-lang="zu">Cha, uhlelo lwenzelwe abathengisi abajwayelekile ngaphandle kolwazi lobuchwepheshe.</p>
          </div>
        </div>

        <div class="accordion-item">
          <button type="button" class="accordion-toggle">
            <span data-lang="en">Is my data secure?</span>
            <span data-lang="zu">Ngabe idatha yami iphephile?</span>
            <span class="accordion-icon">&#9660;</span>
          </button>
          <div class="accordion-content">
            <p data-lang="en">Yes, your data is securely protected and never shared with third parties.</p>
            <p data-lang="zu">Yebo, idatha yakho ivikelwe ngokuqinile futhi ayabiwa nabanye.</p>
          </div>
        </div>

        <div class="accordion-item">
          <button type="button" class="accordion-toggle">
            <span data-lang="en">Can I use this on my phone?</span>
            <span data-lang="zu">Ngabe ngingakusebenzisa kudivayisi yami yeselula?</span>
            <span class="accordion-icon">&#9660;</span>
          </button>
          <div class="accordion-content">
            <p data-lang="en">Yes, the dashboard is mobile-friendly and works on most smartphones.</p>
            <p data-lang="zu">Yebo, ideshibhodi iyahambisana namafoni futhi isebenza kumafoni amaningi.</p>
          </div>
        </div>
      </div>
    </section>
  </main>


  <script>
    function toggleMenu() {
      document.getElementById("navMenu").classList.toggle("show");
    }

    function toggleAccordion(button) {
      const content = button.nextElementSibling;
      const arrow = button.querySelector(".accordion-icon") || button.querySelector(".toggle-arrow");

      if (content && arrow) {
        const isOpen = content.style.display === "block";
        content.style.display = isOpen ? "none" : "block";
        arrow.innerHTML = isOpen ? "&#9660;" : "&#9650;";
      }
    }

    document.addEventListener("DOMContentLoaded", () => {
      // Accordion toggles (Features + FAQ)
      document.querySelectorAll(".accordion-toggle").forEach(btn => {
        btn.addEventListener("click", () => toggleAccordion(btn));
      });

      // Demo modal logic
      const demoBtn = document.getElementById("openDemoModal");
      const demoModal = document.getElementById("demoModal");
      const closeBtn = demoModal?.querySelector(".close");

      if (demoBtn && demoModal && closeBtn) {
        demoBtn.addEventListener("click", () => {
          demoModal.style.display = "block";
        });

        closeBtn.addEventListener("click", () => {
          demoModal.style.display = "none";
        });

        window.addEventListener("click", (event) => {
          if (event.target === demoModal) {
            demoModal.style.display = "none";
          }
        });
      }

      // Demo form submission
      const demoForm = document.getElementById("demoForm");
      const successMessage = document.getElementById("successMessage");

      if (demoForm && successMessage) {
        demoForm.addEventListener("submit", (e) => {
          e.preventDefault();
          successMessage.style.display = "block";
          demoForm.reset();
          setTimeout(() => {
            demoModal.style.display = "none";
            successMessage.style.display = "none";
          }, 3000);
        });
      }
    });
  </script>



  <!-- Footer -->
  <?php include '../static/components/footer.php'; ?>

</body>

</html>