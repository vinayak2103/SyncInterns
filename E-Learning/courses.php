<!DOCTYPE html>
<html>
<head>
  <title>Courses - E-Learning Website</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
  <header>
    <h1>E-Learning Website</h1>
  </header>
  <nav>
    <ul>
      <li><a href="home.php">Home</a></li>
      <li><a href="upload.php">Upload Docs</a></li>
      <li><a href="assessments.php">Assessments</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="about.php">About</a></li>
    </ul>
  </nav>
  <main>
    <h2>Explore Our Courses</h2>
    <div class="course">
      <h3>Web Development</h3>
      <img src="Images\course-1.svg" alt="">
      <p>Description of Course 1</p>
      <a href="#" class="btn">Enroll Now</a>
    </div>
    <div class="course">
      <h3>Android Development</h3>
      <img src="Images\course-2.svg" alt="">
      <p>Description of Course 2</p>
      <a href="#" class="btn">Enroll Now</a>
    </div>
    <div class="course">
      <h3>Machine learning</h3>
      <img src="Images\course-6.svg" alt="">
      <p>Description of Course 3</p>
      <a href="#" class="btn">Enroll Now</a>
    </div>
    <div class="course">
      <h3>Cloud Computing</h3>
      <img src="Images\course-4.svg" alt="">
      <p>Description of Course 3</p>
      <a href="#" class="btn">Enroll Now</a>
    </div>
    <div class="course">
      <h3>Cyber security</h3>
      <img src="Images\course-5.svg" alt="">
      <p>Description of Course 3</p>
      <a href="#" class="btn">Enroll Now</a>
    </div>
 
  </main>

  <footer>
    <p>&copy; <?php echo date("Y"); ?> E-Learning Website. All rights reserved.</p>
  </footer>
</body>
</html>
