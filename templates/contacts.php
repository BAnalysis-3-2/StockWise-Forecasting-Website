<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Contact | Safe-Tech Solutions</title>

  <link rel="icon" type="image/png" href="../static/images/favicon.png">
  <link rel="stylesheet" href="../static/css/style.css">
  <link rel="stylesheet" href="../static/css/responsive.css">
  <script src="../static/js/script.js" defer></script>
  <script src="../static/js/language_switcher.js" defer></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>

  <?php include '../static/components/header.php'; ?>

  <section class="contact-page-container">

  <section class="contact section-fade">
    <div class="contact-wrapper">
      <h2>
        <span data-lang="en">Contact Us</span>
        <span data-lang="zu">Xhumana Nathi</span>
      </h2>

      <!-- Contact Form -->
      <form class="contact-form" id="contact-form">
        <label>
          <span data-lang="en">Your Name</span>
          <span data-lang="zu">Igama Lakho</span>
          <input type="text" name="name" required>
        </label>

        <label>
          <span data-lang="en">Email Address</span>
          <span data-lang="zu">Ikheli Le-imeyili</span>
          <input type="email" name="email" required>
        </label>

        <label>
          <span data-lang="en">Phone (optional)</span>
          <span data-lang="zu">Ucingo (ongakukhetha)</span>
          <input type="tel" name="phone">
        </label>

        <label>
          <span data-lang="en">Your Message</span>
          <span data-lang="zu">Umlayezo Wakho</span>
          <textarea name="message" rows="6" required></textarea>
        </label>

        <button type="submit">
          <span data-lang="en">Send Message</span>
          <span data-lang="zu">Thumela Umlayezo</span>
        </button>
      </form>

      <!-- Confirmation -->
      <div class="form-confirmation section-fade" style="display:none;">
        <p data-lang="en">✅ Thank you for contacting us! We’ll reply within 24 hours.</p>
        <p data-lang="zu">✅ Siyabonga ngokuxhumana! Sizophendula kungakapheli amahora angu-24.</p>
      </div>

      <!-- Contact Info -->
      <div class="contact-info">
        <div class="contact-line">
          <span class="icon">📞</span>
          <a href="tel:+27123456789">+27 12 345 6789</a>
        </div>
        <div class="contact-line">
          <span class="icon">📞</span>
          <a href="tel:+27876543210">+27 87 654 3210</a>
        </div>
        <div class="contact-line">
          <span class="icon">📧</span>
          <a href="mailto:info@safe-tech.co.za">info@safe-tech.co.za</a>
        </div>
      </div>
  </section>


  <section id="faq" class="faq-section section-fade">
    <h3>
      <span data-lang="en">Frequently Asked Questions</span>
      <span data-lang="zu">Imibuzo Evame Ukubuzwa</span>
    </h3>

    <div class="faq-container">
      <div class="faq-item">
        <button class="faq-toggle">
          <span data-lang="en">📌 How long does it take to get a response?</span>
          <span data-lang="zu">📌 Kuthatha isikhathi esingakanani ukuthola impendulo?</span>
        </button>
        <div class="faq-answer">
          <p data-lang="en">We usually reply within 24 hours.</p>
          <p data-lang="zu">Sivame ukuphendula kungakapheli amahora angu-24.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-toggle">
          <span data-lang="en">📌 Can I forecast multiple products?</span>
          <span data-lang="zu">📌 Ngabe ngingabikezela imikhiqizo eminingi?</span>
        </button>
        <div class="faq-answer">
          <p data-lang="en">Yes, our system supports forecasting across many product categories.</p>
          <p data-lang="zu">Yebo, uhlelo lwethu lusekela ukubikezela ezigabeni eziningi zemikhiqizo.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-toggle">
          <span data-lang="en">📌 What if I don’t have CSV files?</span>
          <span data-lang="zu">📌 Kwenzenjani uma ngingenawo amafayela e-CSV?</span>
        </button>
        <div class="faq-answer">
          <p data-lang="en">No problem — we offer manual entry and guided onboarding for first-time users.</p>
          <p data-lang="zu">Akuyona inkinga — sinikeza ukufaka ngesandla nokusiza kwabasebenzisi abaqalayo.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-toggle">
          <span data-lang="en">📌 Do I need internet to use the system?</span>
          <span data-lang="zu">📌 Ngabe ngidinga i-inthanethi ukuze ngisebenzise uhlelo?</span>
        </button>
        <div class="faq-answer">
          <p data-lang="en">Yes, our forecasting tools require internet access to sync and generate insights.</p>
          <p data-lang="zu">Yebo, amathuluzi ethu okubikezela adinga i-inthanethi ukuze axhume futhi akhiqize ukuqonda.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-toggle">
          <span data-lang="en">📌 Can I use this on my phone?</span>
          <span data-lang="zu">📌 Ngabe ngingakusebenzisa kudivayisi yami yeselula?</span>
        </button>
        <div class="faq-answer">
          <p data-lang="en">Absolutely — our platform is mobile-friendly and works on most smartphones.</p>
          <p data-lang="zu">Impela — ipulatifomu yethu ilungele amafoni futhi isebenza kumafoni amaningi ahlakaniphile.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-toggle">
          <span data-lang="en">📌 Is training provided?</span>
          <span data-lang="zu">📌 Ngabe kunikezwa ukuqeqeshwa?</span>
        </button>
        <div class="faq-answer">
          <p data-lang="en">Yes, we offer onboarding and training sessions to help you get started.</p>
          <p data-lang="zu">Yebo, sinikeza ukuqeqeshwa nokuqalisa ukuze sikusize uqale kahle.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-toggle">
          <span data-lang="en">📌 What if I run a spaza shop?</span>
          <span data-lang="zu">📌 Kwenzenjani uma ngiphethe isitolo sesipaza?</span>
        </button>
        <div class="faq-answer">
          <p data-lang="en">Our system is designed for spaza shops, mini-marts, and township retailers.</p>
          <p data-lang="zu">Uhlelo lwethu lwenzelwe izitolo zesipaza, ama-mini-mart, nabathengisi basemalokishini.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-toggle">
          <span data-lang="en">📌 Can I export my forecasts?</span>
          <span data-lang="zu">📌 Ngabe ngingathumela ukubikezela kwami?</span>
        </button>
        <div class="faq-answer">
          <p data-lang="en">Yes, you can export forecasts to CSV or PDF for sharing and printing.</p>
          <p data-lang="zu">Yebo, ungathumela ukubikezela kwakho ku-CSV noma ku-PDF ukuze wabelane noma uphrinte.</p>
        </div>
      </div>
    </div>
  </section>




  <section class="map-section section-fade">
    <h3>
      <span data-lang="en">Visit Us</span>
      <span data-lang="zu">Vakashela</span>
    </h3>
    
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3564.0201426036388!2d27.855657874995988!3d-26.711803484838512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e9459a0e4771cf9%3A0x1bf605c273f7d61d!2s25-1%20Theo%20Wendt%20St%2C%20Vanderbijlpark%20S.%20E.%207%2C%20Vanderbijlpark%2C%201911!5e0!3m2!1sen!2sza!4v1748184289188!5m2!1sen!2sza"
      width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy">
    </iframe>
  </section>

</section>

  <?php include '../static/components/footer.php'; ?>

</body>

</html>