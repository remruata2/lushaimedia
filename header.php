<?php
  $currentPage = $currentPage ?? '';
?>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center justify-content-between">

    <a href="index.php" class="logo"><img src="assets/img/lmlogotext.png" alt="Lushai Media" class="img-fluid"></a>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a href="index.php"<?= $currentPage === 'home' ? ' class="active"' : '' ?>>Home</a></li>

        <li><a href="about.php"<?= $currentPage === 'about' ? ' class="active"' : '' ?>>About</a></li>

        <li><a href="services.php"<?= $currentPage === 'services' ? ' class="active"' : '' ?>>Services</a></li>
        <li><a href="portfolio.php"<?= $currentPage === 'portfolio' ? ' class="active"' : '' ?>>Portfolio</a></li>
        <li><a href="contact.php"<?= $currentPage === 'contact' ? ' class="active"' : '' ?>>Contact</a></li>

      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->
