
/*===========================================
   SAFE-TECH DASHBOARD 
  ===========================================*/
// 🌌 Vanta Background
VANTA.NET({
  el: "#st-vanta-bg",
  mouseControls: true,
  touchControls: true,
  minHeight: 200.00,
  minWidth: 200.00,
  scale: 1.00,
  scaleMobile: 1.00,
  color: 0x40413,
  backgroundColor: 0x0,
  points: 10.00,
  maxDistance: 27.00,
  spacing: 19.00,
});



// 🧠 Tip Pool
const tips = [
  "Use rolling averages to smooth out seasonal spikes.",
  "Group SKUs by category to spot trends faster.",
  "Use last year’s holiday data to forecast Q4 demand.",
  "Watch for supplier lead time changes — they affect stockouts.",
  "Use error metrics like MAPE to evaluate model accuracy."
];
const randomTip = tips[Math.floor(Math.random() * tips.length)];

// 🧭 Menu Switching
const menuItems = document.querySelectorAll('.st-sidebar-nav li');
const contentArea = document.getElementById('st-dynamic-content');

menuItems.forEach(item => {
  item.addEventListener('click', () => {
    menuItems.forEach(i => i.classList.remove('active'));
    item.classList.add('active');
    const label = item.textContent.trim().toLowerCase();
    renderSection(label);
  });
});

// 🧱 Section Renderer
function renderSection(section) {
  contentArea.innerHTML = '';

  if (section === 'dashboard') {
    contentArea.innerHTML = `
      <section class="st-kpi-grid">
        <div class="st-kpi-card">
          <i class="fas fa-chart-line"></i>
          <h3>Accuracy</h3>
          <p>92% <span class="st-kpi-change up">+5%</span></p>
        </div>
        <div class="st-kpi-card">
          <i class="fas fa-boxes"></i>
          <h3>Stockouts Prevented</h3>
          <p>18 <span class="st-kpi-change down">-3%</span></p>
        </div>
        <div class="st-kpi-card">
          <i class="fas fa-money-bill-wave"></i>
          <h3>Avg. Weekly Sales</h3>
          <p>R12,500 <span class="st-kpi-change up">+8%</span></p>
        </div>
      </section>

      <section class="st-chart-panel">
        <div class="st-chart-header">
          <h2>Monthly Forecast vs Actuals</h2>
          <button class="st-refresh-btn" title="Refresh"><i class="fas fa-sync-alt"></i> Refresh</button>
        </div>
        <canvas id="salesChart" style="max-width: 100%; height: 260px;"></canvas>
      </section>

      <section class="st-companion-section">
        <h2>Your Forecasting Companion</h2>
        <div class="st-companion-grid">
          <div class="st-companion-card">
            <i class="fas fa-shield-alt"></i>
            <h3>Stockout Prevention Challenge</h3>
            <p>Keep stockouts below 2% this week. You're on track!</p>
          </div>
          <div class="st-companion-card">
            <i class="fas fa-lightbulb"></i>
            <h3>Tip of the Day</h3>
            <p>${randomTip}</p>
          </div>
          <div class="st-companion-card">
            <i class="fas fa-shopping-cart"></i>
            <h3>Retail Insight</h3>
            <p>Top-selling SKU last week: Lemonade 500ml. Consider bulk restock.</p>
          </div>
        </div>
      </section>
    `;
    renderChart();
    attachRefresh();
  }

  else {
    contentArea.innerHTML = `<h1>${section}</h1><p>This section is under construction.</p>`;
  }
}

// 🔐 Sign Out Modal Logic
document.getElementById('st-signout-trigger')?.addEventListener('click', () => {
  document.getElementById('st-signout-modal').style.display = 'flex';
});

document.querySelector('.st-modal-cancel')?.addEventListener('click', () => {
  document.getElementById('st-signout-modal').style.display = 'none';
});


// 🔁 Refresh Button Logic
function attachRefresh() {
  document.querySelector('.st-refresh-btn')?.addEventListener('click', () => {
    renderSection('dashboard');
  });
}

// 📊 Chart Renderer
function renderChart() {
  const ctx = document.getElementById('salesChart').getContext('2d');
  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
      datasets: [
        {
          label: 'Forecast',
          data: [2200, 2100, 2300, 2400, 2500, 2600, 2700, 2800, 2900, 3000, 3100, 3200],
          backgroundColor: '#abafadff'
        },
        {
          label: 'Actual',
          data: [2000, 1900, 2100, 2200, 2300, 2400, 2500, 2600, 2700, 2800, 2900, 3000],
          backgroundColor: '#002b5c'
        }
      ]
    },
    options: {
      responsive: true,
      plugins: {
        legend: { position: 'top', labels: { color: '#ffffff' } }
      },
      scales: {
        y: { beginAtZero: true, max: 3300, ticks: { color: '#ffffff' } },
        x: { ticks: { color: '#ffffff' } }
      }
    }
  });
}

// 🚀 Load default section
renderSection('dashboard');

document.addEventListener("DOMContentLoaded", () => {
  const uploadNav = document.getElementById("nav-upload");
  const dynamicContent = document.getElementById("st-dynamic-content");
  const uploadTemplate = document.getElementById("upload-template");

  if (uploadNav && dynamicContent && uploadTemplate) {
    uploadNav.addEventListener("click", () => {
      dynamicContent.innerHTML = uploadTemplate.innerHTML;
    });
  }
});
