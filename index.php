<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800;900&family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="assets/css/main.min.css">
  <link rel="stylesheet" href="assets/css/header.css">
  <link rel="stylesheet" href="assets/css/home.css">
  <link rel="stylesheet" href="assets/css/footer.css">
  <title>Penta Home | Home</title>
</head>

<body>
  <?php include('components/header.php'); ?>
  <main class="home-page">
    <!-- Home Banner -->
    <section class="home-banner">
      <div class="container position-relative">
        <div class="home-banner__slider swiper position-relative">
          <div class="swiper-wrapper">
            <div class="swiper-slide position-relative elem-vcenter">
              <figure class="home-banner__slider--image mb-0">
                <img src="assets/images/home/banner-1.png" alt="banner-image">
              </figure>
              <div class="home-banner__slider--contents position-relative w-100">
                <div class="container container-inner">
                  <div class="content-title fw-semibold text-color">
                    <div class="fw-bold">
                      BUILDING HOMES
                    </div>
                    For a promising life...
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide position-relative elem-vcenter">
              <figure class="home-banner__slider--image mb-0">
                <img src="assets/images/home/banner-1.png" alt="banner-image">
              </figure>
              <div class="home-banner__slider--contents position-relative w-100">
                <div class="container container-inner">
                  <div class="content-title fw-semibold text-color">
                    <div class="fw-bold">
                      BUILDING HOMES
                    </div>
                    For a promising life...
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide position-relative elem-vcenter">
              <figure class="home-banner__slider--image mb-0">
                <img src="assets/images/home/banner-1.png" alt="banner-image">
              </figure>
              <div class="home-banner__slider--contents position-relative w-100">
                <div class="container container-inner">
                  <div class="content-title fw-semibold text-color">
                    <div class="fw-bold">
                      BUILDING HOMES
                    </div>
                    For a promising life...
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="home-banner__slider--navigation d-flex justify-content-end gap-1 container container-inner position-absolute">
          <button class="default slider-nav nav-prev elem-center">
            <img src="assets/icons/arrow-left.svg" alt="arrow-left">
          </button>
          <button class="default slider-nav nav-next elem-center">
            <img src="assets/icons/arrow-right.svg" alt="arrow-right">
          </button>
        </div>
      </div>
    </section>
  </main>
  <?php include('components/footer.php'); ?>
  <script src="assets/js/pages/home.js"></script>
</body>

</html>