# StockWise-Forecasting-Website

A fully functional, responsive, and bilingual website for a fictional SME offering forecasting tools to small businesses. The platform includes secure authentication, a personalized dashboard with KPI charts, and follows industry-standard web development practices.

---

## 🖼️ Project Showcase

### Home page Preview
The home page introduces Safe‑Tech Solutions with a hero section, benefits, features, and a demo request modal.

> <img src="Screenshots/home1.png" alt="Image1" width="350"/>
> <img src="Screenshots/home2.png" alt="Image2" width="350"/>
> <img src="Screenshots/home3.png" alt="Image3" width="350"/>
> <img src="Screenshots/home4.png" alt="Image4" width="350"/>

### Login page preview
The login page provides secure access with validated input fields and session management for user authentication.
> <img src="Screenshots/login1.png" alt="Image1" width="350"/>

### Dashboard Preview

The dashboard displays personalized KPI data and serves as the main authenticated user interface.

> <img src="Screenshots/dashboard1.png" alt="Image1" width="350"/>


---

## ✨ Key Features & Functionality

The site is built to be modern, scalable, and highly usable:

| Feature | Description |
| :--- | :--- |
| **Core Technologies** | HTML5, CSS3, JavaScript, PHP |
| **Bilingual Support** | Dynamic language toggle between English and isiZulu |
| **Secure Authentication** | PHP-based session management for secure login/logout |
| **Personalized Dashboard** | User-specific welcome message + interactive KPI charts (**Chart.js**) |
| **Responsive Design** | Fully adaptive layout using `rem`, `%`, and `max-width` units |
| **Robust Form Validation** | Client-side (JavaScript) + server-side (PHP) validation |

---

## 🧭 Pages Developed

* **Home Page:** Hero section, benefits, accordion features, pricing, KPI preview, demo request modal
* **About Page:** Company overview and privacy policy
* **Contact Page:** Contact form, map integration, business details
* **Login & Signup:** Secure forms with validation and session handling
* **Dashboard:** Personalized UI with KPI charts and session-destroying logout functionality

---

## 📁 File Structure & Architecture

The project uses a clean, modular folder structure for easy maintenance and scalability:




---

## 💻 How to Run the Website Locally

This project requires a local PHP development server to handle sessions and authentication.

### **Prerequisites**
* PHP **7.4+**
* A modern web browser (Chrome, Edge, Firefox)

### **Steps to Launch**

1.  **Download or clone** the project files.
2.  **Navigate to the root directory** of the project in your terminal:
    ```bash
    cd path/to/StockWise-Forecasting-Website
    ```
3.  **Start the PHP development server**:
    ```bash
    php -S localhost:8000
    ```
4.  **Open the website** in your browser at the following address:
    ```
    http://localhost:8000/templates/index.php
    ```

---

## 💡 Technical Challenges & Solutions

| Challenge | Solutions Implemented |
| :--- | :--- |
| **Responsiveness Issues** | Adopted a **mobile-first approach**. Replaced all `px` units with **`rem`**, **`%`**, and **`max-width`** to ensure smooth scaling across all devices. |
| **Bilingual Logic** | Implemented custom JavaScript using **`data-lang` attributes** to enable seamless dynamic translation between English and isiZulu. |
| **Session Management** | Used **PHP sessions** for secure user authentication, ensuring proper redirection and access control for protected pages. |
| **Code Maintenance** | Modularized CSS into `style.css`, `responsive.css`, and `variables.css` to improve readability and long-term scalability. |

---

## 🚀 Final Reflection

This project showcases strong proficiency in modern web development practices. Every technical and design decision was made with:

* **Clarity:** Clean structure and readable code.
* **Accessibility:** Semantic HTML and responsive layouts.
* **Scalability:** Modular architecture and maintainable components.
