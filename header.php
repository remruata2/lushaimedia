<?php
  $currentPage = $currentPage ?? '';
?>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center">

    <a href="index.php" class="logo me-auto me-lg-0"><img src="assets/img/lmlogotext.png" alt="Lushai Media" class="img-fluid"></a>

    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>
        <li><a href="index.php"<?= $currentPage === 'home' ? ' class="active"' : '' ?>>Home</a></li>

        <li><a href="about.php"<?= $currentPage === 'about' ? ' class="active"' : '' ?>>About</a></li>

        <li><a href="services.php"<?= $currentPage === 'services' ? ' class="active"' : '' ?>>Services</a></li>
        <li><a href="portfolio.php"<?= $currentPage === 'portfolio' ? ' class="active"' : '' ?>>Portfolio</a></li>
        <li><a href="contact.php"<?= $currentPage === 'contact' ? ' class="active"' : '' ?>>Contact</a></li>

      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

    <div class="header-social-links d-flex">
      <a href="#" class="twitter"><i class="bu bi-twitter"></i></a>
      <a href="#" class="facebook"><i class="bu bi-facebook"></i></a>
      <a href="#" class="instagram"><i class="bu bi-instagram"></i></a>
      <a href="#" class="linkedin"><i class="bu bi-linkedin"></i></i></a>
    </div>

  </div>
</header><!-- End Header -->
