<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UpToSkills</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="styles.css">
  <script src="script.js" defer></script>
</head>
<body>
  <header>
    <div class="logo">
      <h1><span>UpTo</span>Skills</h1>
    </div>
    <nav>
      <ul>
        <li><a href="#home">HOME</a></li>
        <li><a href="about.html" onclick="openModal('aboutModal')">ABOUT</a></li>
        <li><a href="services.html" onclick="openModal('servicesModal')">SERVICES</a></li>
        <li><a href="contact.html" onclick="openModal('contactModal')">CONTACT</a></li>
      </ul>
    </nav>
    <div class="search-box">
      <input type="text" placeholder="type to search">
      <button>Search</button>
      <a href="dashboard.php"><button>Faculty Dashboard</button></a>
    </div>
  </header>

  <div class="main-container">
    <section class="hero">
      <h2>SKILLS FOR LIFETIME!</h2>
      <h1>India's No.1 Skill Tech Organization!</h1>
      <p>EMPOWERING YOUR CAREER WITH UpToSkills</p>
      <p class="sub-text">Free Training for a Brighter Future...!</p>
      <a href="getstarted.html" class="get-started-btn">Get Started</a>
    </section>

    <section class="login-section">
      <div class="login-box">
        <h3>Login</h3>
        <a href="student-login.html" class="login-btn">Student Login</a>
        <a href="faculty-login.html" class="login-btn">Faculty Login</a>
        <a href="signup.html" class="login">Sign up</a>
        </div>
    </section>
  </div>

  <div class="container">
    <div class="box" id="about">
      <h2>About</h2>
      <p>
        Welcome to my website! I am dedicated to providing quality content and information to my visitors.
        With a background in [your expertise], I aim to share valuable insights and services that can help
        you in various ways. I believe in continuous growth and learning, and I'm here to make a difference.
      </p>
    </div>

    <div class="box" id="services">
      <h2>Services</h2>
      <p>
        Our services include a wide range of offerings designed to meet your needs. From consulting to
        technical support, we have solutions tailored just for you. We focus on delivering high-quality
        and reliable services that are aimed at achieving your goals.
      </p>
    </div>

    <div class="box" id="contact">
      <h2>Contact</h2>
      <p>
        Feel free to get in touch! Whether you have a question about our services, need assistance, or
        just want to say hello, we're here for you. Reach us at contact@example.com or give us a call at
        (123) 456-7890. Let's connect and explore how we can help you.
      </p>
    </div>
  </div>

</body>
</html>