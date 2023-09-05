<!DOCTYPE html>
<html>
<head>
  <title>Contact - E-Learning Website</title>
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
      <li><a href="upload.php">Upload Docs</a></li>
      <li><a href="courses.php">Courses</a></li>
      <li><a href="assessments.php">Assessments</a></li>
      <li><a href="about.php">About</a></li>
    </ul>
  </nav>

  <main>
    <h2>Contact Us</h2>
    <div class="contact">
    <form action="#" method="post">
      <label for="name">Enter your Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Enter Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="message">Enter The Message:</label>
      <textarea id="message" name="message" required></textarea>

      <button type="submit" class="btn">Submit</button>
    </form>
    </div>
  </main>

  <footer>
    <p>&copy; <?php echo date("Y"); ?> E-Learning Website. All rights reserved.</p>
  </footer>
</body>
</html>
