<?php
// php/contact.php

// Basic validation
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = trim($_POST["name"] ?? "");
  $email = trim($_POST["email"] ?? "");
  $message = trim($_POST["message"] ?? "");

  // Check required fields
  if ($name === "" || $email === "" || $message === "") {
    echo "Please fill in all fields.";
    exit;
  }

  // Optional: sanitize inputs
  $safe_name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
  $safe_email = filter_var($email, FILTER_SANITIZE_EMAIL);
  $safe_message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

  // Optional: validate email format
  if (!filter_var($safe_email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email address.";
    exit;
  }

  // Optional: save to file or database
  $log = "Name: $safe_name\nEmail: $safe_email\nMessage: $safe_message\n---\n";
  file_put_contents("messages.txt", $log, FILE_APPEND);

  // Optional: send email (requires mail config)
  // mail("info@safetech.co.za", "New Contact Message", $log);

  // Success response
  echo "Thank you, $safe_name. Your message has been received.";
} else {
  echo "Invalid request.";
}
?>
