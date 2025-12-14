document.addEventListener("DOMContentLoaded", () => {
  // ========== Contact Form ==========
  const contactForm = document.querySelector(".contact-form");
  const responseBox = document.getElementById("contact-response");

  if (contactForm && responseBox) {
    contactForm.addEventListener("submit", function (e) {
      e.preventDefault();
      const formData = new FormData(contactForm);

      fetch("/php/contact.php", {
        method: "POST",
        body: formData
      })
        .then(res => res.text())
        .then(message => {
          responseBox.textContent = message;
          responseBox.classList.remove("hidden");

          if (message.toLowerCase().includes("thank you")) {
            responseBox.classList.add("success");
            responseBox.classList.remove("error");
            contactForm.reset();
          } else {
            responseBox.classList.add("error");
            responseBox.classList.remove("success");
          }
        })
        .catch(() => {
          responseBox.textContent = "Something went wrong. Please try again.";
          responseBox.classList.remove("hidden");
          responseBox.classList.add("error");
        });
    });
  }

  // ========== Scroll Detection ==========
  const header = document.querySelector("header");
  if (header) {
    window.addEventListener("scroll", () => {
      header.classList.toggle("scrolled", window.scrollY > 50);
    });
  }

  // ========== Fade-In Observer ==========
  function observeFadeIn(selectors) {
    const elements = document.querySelectorAll(selectors);
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
        }
      });
    }, { threshold: 0.1 });

    elements.forEach(el => observer.observe(el));
  }

  observeFadeIn(".section-fade, .benefit-card, .about-carousel-item");

// ========== Accordion Toggle (Features + FAQ) ==========
document.addEventListener("DOMContentLoaded", () => {
  const toggles = document.querySelectorAll(".accordion-toggle");

  toggles.forEach(toggle => {
    toggle.addEventListener("click", function () {
      const content = this.nextElementSibling;
      const icon = this.querySelector(".accordion-icon");

      const isOpen = content.style.display === "block";

      // Close all others
      document.querySelectorAll(".accordion-content").forEach(c => c.style.display = "none");
      document.querySelectorAll(".accordion-icon").forEach(i => i.innerHTML = "&#9660;");

      if (!isOpen) {
        content.style.display = "block";
        if (icon) icon.innerHTML = "&#9650;";
      }
    });
  });
});


  // ========== FAQ Toggle ==========
  document.querySelectorAll(".faq-toggle").forEach(button => {
    button.addEventListener("click", () => {
      const item = button.parentElement;
      item.classList.toggle("active");
    });
  });

  // ========== Carousel ==========
  const track = document.querySelector(".carousel-track");
  const items = document.querySelectorAll(".carousel-item");
  const prevBtn = document.querySelector(".carousel-control.prev");
  const nextBtn = document.querySelector(".carousel-control.next");

  if (track && items.length && prevBtn && nextBtn) {
    const itemsPerPage = 3;
    let currentIndex = 0;

    function updateCarousel() {
      const offset = -(currentIndex * (100 / itemsPerPage));
      track.style.transform = `translateX(${offset}%)`;
    }

    nextBtn.addEventListener("click", () => {
      if (currentIndex < items.length - itemsPerPage) {
        currentIndex++;
        updateCarousel();
      }
    });

    prevBtn.addEventListener("click", () => {
      if (currentIndex > 0) {
        currentIndex--;
        updateCarousel();
      }
    });

    updateCarousel();
  }

  // ========== Modal Logic ==========
  const modal = document.getElementById("demo-modal");
  const openBtn = document.getElementById("open-demo-modal");
  const closeBtn = document.querySelector(".close-modal");

  if (modal && openBtn && closeBtn) {
    openBtn.addEventListener("click", () => {
      modal.style.display = "block";
    });

    closeBtn.addEventListener("click", () => {
      modal.style.display = "none";
    });

    window.addEventListener("click", (e) => {
      if (e.target === modal) {
        modal.style.display = "none";
      }
    });
  }

  // ========== Charts ==========
  const demandChart = document.getElementById("demandChart");
  const topProductsChart = document.getElementById("topProductsChart");

  if (demandChart) {
    new Chart(demandChart.getContext("2d"), {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep"],
        datasets: [
          {
            label: "Predicted Demand",
            data: [120, 150, 130, 160, 170, 140],
            borderColor: "#8482aeff",
            borderWidth: 3,
            fill: false,
          },
          {
            label: "Actual Demand",
            data: [110, 140, 135, 165, 160, 145],
            borderColor: "#28a745",
            borderWidth: 3,
            fill: false,
          }
        ]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: { position: "bottom" }
        },
        scales: {
          y: { beginAtZero: true }
        }
      }
    });
  }

  if (topProductsChart) {
    new Chart(topProductsChart.getContext("2d"), {
      type: "bar",
      data: {
        labels: ["Milk", "Bread", "Sugar"],
        datasets: [{
          label: "Units Sold",
          data: [320, 280, 240],
          backgroundColor: "#6d6dffff"
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        indexAxis: "y",
        plugins: {
          legend: { display: false }
        },
        scales: {
          x: { beginAtZero: true }
        }
      }
    });
  }

  // ========== Contact Form Simulation (Fallback) ==========
  const fallbackForm = document.getElementById("contact-form");
  if (fallbackForm) {
    fallbackForm.addEventListener("submit", (e) => {
      e.preventDefault();
      document.querySelector(".form-confirmation").style.display = "block";
      fallbackForm.reset();
    });
  }
});

// ========== Mobile Menu Toggle ==========
function toggleMenu() {
  const nav = document.getElementById("navMenu");
  if (nav) nav.classList.toggle("show");
}

function toggleFeature(button) {
  const content = button.nextElementSibling;
  const icon = button.querySelector("i");
  if (content.style.display === "none") {
    content.style.display = "block";
    icon.classList.replace("fa-chevron-down", "fa-chevron-up");
  } else {
    content.style.display = "none";
    icon.classList.replace("fa-chevron-up", "fa-chevron-down");
  }
}

/*===========================================
   MENU SWITCHER(header) 
  ===========================================*/
function toggleUtilityMenu() {
  const menu = document.getElementById('utilityMenu');
  menu.style.display = (menu.style.display === 'block') ? 'none' : 'block';
}

