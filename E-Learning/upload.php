<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process the file upload
    $file = $_FILES['fileInput'];
    // Perform validation and file handling
    // ...

    // Redirect to a success page or display a message
    $message = 'File uploaded successfully.';
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>E-Learning Website - Upload Documents</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="assessments.css">
</head>
<body>
  <header>
    <h1>E-Learning Website</h1>
  </header>

  <nav>
    <ul>
      <li><a href="home.php">Home</a></li>
      <li><a href="courses.php">Courses</a></li>
      <li><a href="assessments.php">Assessments</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="about.php">About</a></li>
    </ul>
  </nav>

  <main>
    <h2>Upload Documents</h2>
    <div class="upload">
    <form id="uploadForm" method="POST" action="upload.php" enctype="multipart/form-data">
    <input type="file" name="fileInput" required>
      <button type="submit">Upload</button>
    </form>
    </div>
    <?php if (isset($message)): ?>
      <p><?php echo $message; ?></p>
    <?php endif; ?>
  </main>

  <footer>
    <p>&copy; 2023 E-Learning Website. All rights reserved.</p>
  </footer>
</body>
</html>
