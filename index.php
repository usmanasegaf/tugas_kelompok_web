<!DOCTYPE html>
<!-- Mohammad Usman Asegaf Bagian FrontEnd-->

<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

  <!-- My CSS -->
  <link rel="stylesheet" href="style.css" />

  <title>INTERNETKU | Internet Provider</title>
</head>

<body id="home">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <i class="bi bi-globe me-1"></i>
        INTERNETKU</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#products">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#other_project">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <!-- Jumbrotron -->
  <section class="jumbotron text-center">
    <div class="container mt-4">
      <!-- Carousel -->
      <div id="carouselPaket" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselPaket" data-bs-slide-to="0" class="active" aria-current="true"
            aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselPaket" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselPaket" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselPaket" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>

        <!-- Slides -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://placehold.co/600x400" class="d-block w-100" alt="Image 1"
              style="max-height: 550px; object-fit: cover;">
          </div>
          <div class="carousel-item">
            <img src="https://placehold.co/600x400" class="d-block w-100" alt="Image 1"
              style="max-height: 550px; object-fit: cover;">
          </div>
          <div class="carousel-item">
            <img src="https://placehold.co/600x400" class="d-block w-100" alt="Image 1"
              style="max-height: 550px; object-fit: cover;">
          </div>
          <div class="carousel-item">
            <img src="https://placehold.co/600x400" class="d-block w-100" alt="Image 1"
              style="max-height: 550px; object-fit: cover;">
          </div>
        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselPaket" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselPaket" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <!-- JavaScript to set interval -->
    <script>
      const myCarousel = document.querySelector('#carouselPaket');
      const carousel = new bootstrap.Carousel(myCarousel, {
        interval: 5000,
        wrap: true,
      });
    </script>
  </section>
  <!-- Akhir Jumbotron -->

  <!-- Products -->
  <section id="products">
    <div class="container">
      <div class="row text-center">
        <div class="col mb-3">
          <h4 style="color: #5d5a88;" class="mb-3">Products</h4>
          <h2 style="color: #5d5a88;">Affordable Pricing plans</h2>
        </div>
      </div>
      <div class="row justify-content-center mt-2">
        <div class="col-md-4 mb-3">
          <div class="card">
            <!-- Bagian Atas (Background Putih Keunguan) -->
            <div class="card-header text-center" style="border-bottom: none;">
              <h5 class="card-title" style="color: #5d5a88;">Basic</h5>
              <h1 class="card-subtitle mb-2 fw-semibold" style="color: #5d5a88;">Rp 99.000</h1>
              <p class="card-text" style="color: #5d5a88;">Billed monthly</p>
              <a href="#" class="btn btn-primary custom-btn mb-1" style="background-color: #5d5a88; border: none;">Get
                Started</a>
            </div>
            <!-- Bagian Bawah (Background Putih) -->
            <div class="card-body justify-content-center">
              <div class="container text-start ms-4">
                <p class="card-text"><i class="bi bi-check-circle-fill me-2" style="color: #5d5a88;"></i>
                  All analytic features</p>
                <p class="card-text"><i class="bi bi-check-circle-fill me-2" style="color: #5d5a88;"></i>
                  20Mbps</p>
                <p class="card-text"><i class="bi bi-check-circle-fill me-2" style="color: #5d5a88;"></i>
                  Normal Support</p>
                <p class="card-text"><i class="bi bi-check-circle-fill me-2" style="color: #5d5a88;"></i>
                  Mobile App</p>
                <p class="card-text"><i class="bi bi-check-circle-fill me-2" style="color: #5d5a88;"></i>
                  Up To 20 Connections</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3"> <!-- 2 -->
          <div class="card">
            <div class="card-header text-center" style=" border-bottom: none;">
              <h5 class="card-title" style="color: #5d5a88;">Growth</h5>
              <h1 class="card-subtitle mb-2 fw-semibold" style="color: #5d5a88;">Rp 199.000</h1>
              <p class="card-text" style="color: #5d5a88;">Billed monthly</p>
              <a href="#" class="btn btn-primary custom-btn mb-1" style="background-color: #5d5a88; border: none;">Get
                Started</a>
            </div>
            <div class="card-body justify-content-center">
              <div class="container text-start ms-4">
                <p class="card-text"><i class="bi bi-check-circle-fill me-2" style="color: #5d5a88;"></i>
                  Everything on Basic Plan</p>
                <p class="card-text"><i class="bi bi-check-circle-fill me-2" style="color: #5d5a88;"></i>
                  100Mbps</p>
                <p class="card-text"><i class="bi bi-check-circle-fill me-2" style="color: #5d5a88;"></i>
                  Premium Support</p>
                <p class="card-text"><i class="bi bi-check-circle-fill me-2" style="color: #5d5a88;"></i>
                  Mobile App</p>
                <p class="card-text"><i class="bi bi-check-circle-fill me-2" style="color: #5d5a88;"></i>
                  Up To 100 Connections</p>
              </div>

            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3"> <!-- 3 -->
          <div class="card">
            <div class="card-header text-center" style=" border-bottom: none;">
              <h5 class="card-title" style="color: #5d5a88;">Enterprise</h5>
              <h1 class="card-subtitle mb-2 fw-semibold" style="color: #5d5a88;">Rp 399.000</h1>
              <p class="card-text" style="color: #5d5a88;">Billed monthly</p>
              <a href="#" class="btn btn-primary custom-btn mb-1" style="background-color: #5d5a88; border: none;">Get
                Started</a>
            </div>
            <div class="card-body justify-content-center">
              <div class="container text-start ms-4">
                <p class="card-text"><i class="bi bi-check-circle-fill me-2" style="color: #5d5a88;"></i>
                  Everything on Growth Plan</p>
                <p class="card-text"><i class="bi bi-check-circle-fill me-2" style="color: #5d5a88;"></i>
                  500Mbps</p>
                <p class="card-text"><i class="bi bi-check-circle-fill me-2" style="color: #5d5a88;"></i>
                  Dedicated Support</p>
                <p class="card-text"><i class="bi bi-check-circle-fill me-2" style="color: #5d5a88;"></i>
                  Mobile App</p>
                <p class="card-text"><i class="bi bi-check-circle-fill me-2" style="color: #5d5a88;"></i>
                  Up To 300 Connections</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffffff" fill-opacity="1"
        d="M0,32L48,37.3C96,43,192,53,288,74.7C384,96,480,128,576,133.3C672,139,768,117,864,96C960,75,1056,53,1152,48C1248,43,1344,53,1392,58.7L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
      </path>
    </svg>
  </section>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 640">
    <path fill="#e2edff" fill-opacity="1"
      d="M0,160L26.7,186.7C53.3,213,107,267,160,256C213.3,245,267,171,320,138.7C373.3,107,427,117,480,154.7C533.3,192,587,256,640,272C693.3,288,747,256,800,218.7C853.3,181,907,139,960,144C1013.3,149,1067,203,1120,218.7C1173.3,235,1227,213,1280,202.7C1333.3,192,1387,192,1413,192L1440,192L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z">
    </path>
    <path fill="#e2edff" fill-opacity="1"
      d="M0,480L26.7,480C53.3,480,107,480,160,474.7C213.3,469,267,459,320,421.3C373.3,384,427,320,480,330.7C533.3,341,587,427,640,426.7C693.3,427,747,341,800,330.7C853.3,320,907,384,960,410.7C1013.3,437,1067,427,1120,400C1173.3,373,1227,331,1280,336C1333.3,341,1387,395,1413,421.3L1440,448L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z">
    </path>
  </svg>
  <!-- Akhir products -->


  <!-- Footer -->
  <footer class="bg-primary text-white text-center p-2">
    <p>Created with Html, Bootstrap 5 CSS Framework by <a href="https://www.youtube.com/@mohammadusmanasegaf7180"
        class="text-white fw-bold">Mohammad Usman Asegaf</a></p>
  </footer>
  <!-- Akhir Footer -->


</body>

</html>