<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_FILES['csvFile']) && $_FILES['csvFile']['error'] === UPLOAD_ERR_OK) {
    $uploadDir = '../uploads/';
    $fileName = basename($_FILES['csvFile']['name']);
    $targetPath = $uploadDir . $fileName;

    if (!is_dir($uploadDir)) {
      mkdir($uploadDir, 0755, true);
    }

    if (move_uploaded_file($_FILES['csvFile']['tmp_name'], $targetPath)) {
      echo "✅ File uploaded successfully: $fileName";
    } else {
      echo "❌ Error moving the uploaded file.";
    }
  } else {
    echo "❌ No file uploaded or upload error.";
  }
} else {
  echo "Invalid request.";
}
?>
