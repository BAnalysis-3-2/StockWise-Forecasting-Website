<?php
session_start();

// Helper: sanitize input
function clean($value) {
  return htmlspecialchars(trim($value), ENT_QUOTES, 'UTF-8');
}

// Determine action
$action = $_POST['action'] ?? '';

if ($action === 'login') {
  $email = clean($_POST['login_email'] ?? '');
  $password = clean($_POST['login_password'] ?? '');

  if ($email === '' || $password === '') {
    header("Location: ../templates/auth.php?error=incomplete");
    exit;
  }

  // Read users.txt and verify credentials
  if (!file_exists("users.txt")) {
    header("Location: ../templates/auth.php?error=invalid");
    exit;
  }

  $users = file("users.txt", FILE_IGNORE_NEW_LINES);
  foreach ($users as $user) {
    list($name, $storedEmail, $storedHash) = explode("|", $user);
    if ($email === $storedEmail && password_verify($password, $storedHash)) {
      $_SESSION['user'] = ['email' => $email, 'name' => $name];
      header("Location: ../templates/dashboard.php");
      exit;
    }
  }

  header("Location: ../templates/auth.php?error=invalid");
  exit;
}

elseif ($action === 'register') {
  $name = clean($_POST['register_name'] ?? '');
  $email = clean($_POST['register_email'] ?? '');
  $password = clean($_POST['register_password'] ?? '');

  if ($name === '' || $email === '' || $password === '') {
    header("Location: ../templates/auth.php?error=incomplete");
    exit;
  }

  // Check for duplicate email
  if (file_exists("users.txt")) {
    $users = file("users.txt", FILE_IGNORE_NEW_LINES);
    foreach ($users as $user) {
      list($_, $storedEmail, $_) = explode("|", $user);
      if ($email === $storedEmail) {
        header("Location: ../templates/auth.php?error=exists");
        exit;
      }
    }
  }

  // Save new user
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);
  $log = "$name|$email|$hashed_password\n";
  file_put_contents("users.txt", $log, FILE_APPEND);

  header("Location: ../templates/auth.php?registered=true");
  exit;
}

else {
  header("Location: ../templates/auth.php?error=invalid");
  exit;
}



