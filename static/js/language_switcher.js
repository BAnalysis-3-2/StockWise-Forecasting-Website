document.addEventListener("DOMContentLoaded", function () {
  const toggle = document.getElementById("language-toggle");
  const defaultLang = localStorage.getItem("preferredLanguage") || "en";

  if (toggle) {
    toggle.value = defaultLang;
    switchLanguage(defaultLang);

    toggle.addEventListener("change", function () {
      const selectedLang = this.value;
      switchLanguage(selectedLang);
      localStorage.setItem("preferredLanguage", selectedLang);
    });
  }

  function switchLanguage(lang) {
    document.querySelectorAll("[data-lang]").forEach(el => {
      const isMatch = el.getAttribute("data-lang") === lang;
      el.style.display = isMatch ? "inline" : "none";
    });
  }
});
