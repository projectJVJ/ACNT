<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - eNno Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page">
  <?php include "assets/layout/header.php"; ?>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section mt-5">

      <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/img/Proprietorship.jpg" alt="Los Angeles" class="d-block" style="width:100%">
          </div>
          <div class="carousel-item">
            <img src="assets/img/PartnershipFirm.jpg" alt="Chicago" class="d-block" style="width:100%">
          </div>
          <div class="carousel-item">
            <img src="assets/img/OnepersonCompany.jpg" alt="New York" class="d-block" style="width:100%">
          </div>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>

    </section><!-- /Hero Section -->

    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-lg-4 mb-5"><a href="/acnt/NewBusiness/Proprietorship.php">
              <div class="service-item text-center p-5">
                <div class="icon"><i class="bi bi-person-fill"></i></div>
                <h4>Proprietorship</h4>
                <p>Easily set up a sole proprietorship online with GST registration.</p>
              </div>
            </a>
          </div>
          <div class="col-lg-4 mb-5"><a href="/acnt/NewBusiness/PartnershipFirm.php">
              <div class="service-item text-center p-5">
                <div class="icon"><i class="bi bi-people"></i></div>
                <h4>Partnership Firm</h4>
                <p>Get your partnership firm deed drafted by our experts, along with firm PAN and GST
                  registration.</p>
              </div>
            </a>
          </div>
          <div class="col-lg-4 mb-5"><a href="/acnt/NewBusiness/OnepersonCompany.php">
              <div class="service-item text-center p-5">
                <div class="icon"><i class="bi bi-person-badge"></i></div>
                <h4>One person Company</h4>
                <p>Instant Name Application for Company.</p>
              </div>
            </a>
          </div>
          <div class="col-lg-4 mb-5"><a href="/acnt/NewBusiness/LimitedLiabilityPartnerhsip.php">
              <div class="service-item text-center p-5">
                <div class="icon"><i class="bi bi-people"></i></div>
                <h4>Limited Liability Partnerhsip</h4>
                <p>Instant Name Application for LLP.</p>
              </div>
            </a>
          </div>
          <div class="col-lg-4 mb-5"><a href="/acnt/NewBusiness/PrivateLimitedCompany.php">
              <div class="service-item text-center p-5">
                <div class="icon"><i class="bi bi-building"></i></div>
                <h4>Private Limited Company</h4>
                <p>Instant Name Application for Company.</p>
              </div>
            </a>
          </div>
          <div class="col-lg-4 mb-5"><a href="/acnt/NewBusiness/PublicLimitedCompany.php">
              <div class="service-item text-center p-5">
                <div class="icon"><i class="bi bi-building"></i></div>
                <h4>Public Limited Company</h4>
                <p>Easily incorporate a Public Limited Company through Hiva Professionals.</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section><!-- /Featured Services Section -->
    <div class="container">
      <?php include 'assets/layout/main_footer.php'; ?>
    </div>
  </main>
</body>

</html>