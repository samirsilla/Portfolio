<?php include('form.php'); ?>

<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="author" content="Samir Muratovic">
  <meta name="copyright" content="Samir Muratovic">
  <meta name="topic" content="Web Development">
  <meta name="description" content="Samir Muratovic is a professional web developer specializing in responsive front-end design.">
  <meta name="keywords" content="HTML,CSS,JavaScript,PHP,Bootstrap,front-end,developer,web developer, web design, web designer, design, website development, responsive, mobile design,professional">
  <title>Samir Muratovic - Get in Touch</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/contact.css">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
</head>

<body>
  <aside id="sidebar">
    <a id="menu-btn">MENU</a>
  </aside>
  <div id="menu">
    <div id="close">
      <i class="fas fa-times"></i>
    </div>
    <!-- #close -->
    <nav>
      <a href="index.html">Home</a>
      <a id="portfolio-link" href="index.html#projects-wrapper">Portfolio</a>
      <a id="about-link" href="index.html#about-wrapper">About</a>
      <a href="contact.php">Contact</a>
      <a href="blog.html">Blog</a>
    </nav>
  </div> <!-- #menu -->

  <header>
    <div id="brand">
      <h2>smr.</h2>
    </div>
    <!-- #brand -->
  </header>

  <section>
    <div id="contact-form-wrapper">
      <h2 id="contact-header">Got a project idea? Just want to say hello? Shoot me a quick message!</h2>
      <form id="contact-form" method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
        <input class="input-box" id="name" name="name" type="text" placeholder="Name" value="<?= $name ?>">
        <input class="input-box" id="email" name="email" type="email" placeholder="Email" value="<?= $email ?>">
        <textarea class="input-box" type="text" id="message" name="message" value="<?= $message ?>" cols="30" rows="10" placeholder="Message"></textarea>
        <input class="primary-link" id="submit-btn" type="submit" name="submit-btn" value="Send Message">

        <div class="error">
          <?= $display_error ?>
        </div>

      </form>
    </div>
    <!-- #contact-form-wrapper -->
  </section>

  <div class="container">
    <footer>
      <div id="footer-wrapper">
        <div id="social-links">
          <div class="social-link">
            <a href="http://github.com/samirsilla" target="_blank">
              <i class="fab fa-github"></i>
            </a>
          </div>
          <!-- .social-link -->
          <div class="social-link">
            <a href="#" target="_blank">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
          <!-- .social-link -->
          <div class="social-link">
            <a href="#" target="_blank">
              <i class="fab fa-instagram"></i>
            </a>
          </div>
          <!-- .social-link -->
          <div class="social-link">
            <a href="#" target="_blank">
              <i class="fab fa-facebook-f"></i>
            </a>
          </div>
          <!-- .social-link -->
        </div>
        <!-- #social-links -->
        <div id="copyright">
          Copyright &copy; 2018 Samir Muratovic. All Rights Reserved.
        </div>
        <div id="privacy-links">
          <div class="privacy-link">
            <a href="index.html">Privacy Policy</a>
          </div>
          <div class="green-line">

          </div>
          <div class="privacy-link">
            <a href="#">Terms of Use</a>
          </div>
        </div>
        <!-- #privacy-links -->
        <div id="author-brand">
          Website by
          <a href="#" id="author-font">smr.</a>
        </div>
        <!-- #author-brand -->
      </div>
      <!-- .vertical-flex-wrapper -->
    </footer>
  </div>
  <!-- .container -->
  <script src="js/main.js"></script>
</body>

</html>