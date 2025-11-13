<?php $currentPage = 'portfolio'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio - Lushai Media</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Company
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <?php include 'header.php'; ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Portfolio</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Portfolio</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Our <strong>Portfolio</strong></h2>
          <p>Explore our innovative solutions that transform businesses and empower organizations</p>
        </div>

        <div class="row portfolio-grid">
          
          <!-- Portfolio Card 1: AI-Powered Data Management -->
          <div class="col-lg-6 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="portfolio-card">
              <div class="portfolio-card-image">
                <img src="assets/img/portfolio/@ai-chat.jpg" class="img-fluid" alt="AI-Powered Data Management">
                <div class="portfolio-card-overlay">
                  <div class="portfolio-card-content">
                    <h3>AI-Powered Data Management</h3>
                    <p class="portfolio-tagline">AI Database</p>
                    <p class="portfolio-description">Revolutionary AI technology for intelligent data processing, OCR integration, and conversational query capabilities.</p>
                    <a href="ai-database.php" class="btn-view-details">View Details <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Portfolio Card 2: Hotel ERP -->
          <div class="col-lg-6 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="portfolio-card">
              <div class="portfolio-card-image">
                <img src="assets/img/portfolio/hotel-erp-dashboard.jpg" class="img-fluid" alt="Hotel ERP Solution">
                <div class="portfolio-card-overlay">
                  <div class="portfolio-card-content">
                    <h3>Hotel ERP Solution</h3>
                    <p class="portfolio-tagline">Enterprise Resource Planning</p>
                    <p class="portfolio-description">Comprehensive hotel management system streamlining operations from reservations to billing with automated intelligence.</p>
                    <a href="hotel-erp.php" class="btn-view-details">View Details <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Portfolio Card 3: ICPS Facilitation -->
          <div class="col-lg-6 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
            <div class="portfolio-card">
              <div class="portfolio-card-image">
                <img src="assets/img/portfolio/icps-online-monitoring.jpg" class="img-fluid" alt="ICPS Facilitation">
                <div class="portfolio-card-overlay">
                  <div class="portfolio-card-content">
                    <h3>ICPS Facilitation</h3>
                    <p class="portfolio-tagline">Integrated Child Protection Scheme</p>
                    <p class="portfolio-description">State-wide digital platform automating reporting, ensuring data integrity, and streamlining child protection workflows.</p>
                    <a href="icps.php" class="btn-view-details">View Details <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Portfolio Card 4: Leikapui Studios -->
          <div class="col-lg-6 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
            <div class="portfolio-card">
              <div class="portfolio-card-image">
                <img src="assets/img/portfolio/leikapui-home.png" class="img-fluid" alt="Leikapui Studios OTT Platform">
                <div class="portfolio-card-overlay">
                  <div class="portfolio-card-content">
                    <h3>Leikapui Studios</h3>
                    <p class="portfolio-tagline">OTT Platform</p>
                    <p class="portfolio-description">Creator-first streaming platform for Mizo cinema with enterprise-grade DRM protection and flexible monetization.</p>
                    <a href="leikapui.php" class="btn-view-details">View Details <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

  <?php include 'footer.php'; ?>