<!DOCTYPE html>
<!-- Mohammad Usman Asegaf Bagian FrontEnd-->

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />

    <title>INTERNETKU | Internet Provider</title>
  </head>
  <body id="home">
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">INTERNETKU</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#skills">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#other_project">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Jumbrotron -->
    <section class="jumbotron text-center">
      <img src="img/foto_profil_rb.jpg" alt="Mohammad Usman Asegaf" width="200" class="rounded-circle img-thumbnail" />
      <h1 class="display-4">Mohammad Usman Asegaf</h1>
      <p class="lead">Computer Science Student | Freelancer | Remotask Employee</p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,64L30,74.7C60,85,120,107,180,133.3C240,160,300,192,360,181.3C420,171,480,117,540,133.3C600,149,660,235,720,229.3C780,224,840,128,900,74.7C960,21,1020,11,1080,32C1140,53,1200,107,1260,112C1320,117,1380,75,1410,53.3L1440,32L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Jumbotron -->

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>About Me</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-center">
          <div class="col-md-4 mb-3 me-3">
            Saya memiliki kemampuan coding di bidang web development, terutama menggunakan framework Bootstrap yang memungkinkan pembuatan antarmuka web responsif dan dinamis. Dengan pemahaman yang mendalam dalam
            struktur HTML, CSS, dan JavaScript, saya mampu mengembangkan situs web yang user-friendly dan optimal pada berbagai perangkat.
          </div>
          <div class="col-md-4 mb-3">
            Di sisi mobile development, saya berpengalaman menggunakan Flutter untuk membuat aplikasi lintas platform yang fungsional dan elegan. Selain itu, saya menguasai Gradle, Java, dan Kotlin untuk pengembangan
            aplikasi Android. Selain itu, saya memiliki keterampilan dalam A-Frame yang memungkinkan saya mengembangkan pengalaman VR yang interaktif di lingkungan web.
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 570">
        <path fill="#e2edff" fill-opacity="1" d="M0,224L48,192C96,160,192,96,288,85.3C384,75,480,117,576,128C672,139,768,117,864,138.7C960,160,1056,224,1152,224C1248,224,1344,160,1392,128L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        <path fill="#e2edff" fill-opacity="1" d="M0,480L48,485.3C96,491,192,501,288,485.3C384,469,480,427,576,421.3C672,416,768,448,864,485.3C960,523,1056,565,1152,560C1248,555,1344,501,1392,474.7L1440,448L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
      </svg>      
        </section>
    <!-- Akhir About -->

    <!-- Skills -->
    <section id="skills">
      <div class="container">
        <div class="row text-center">
          <div class="col mb-3">
            <h2>Experience and Skills</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/gedung_utb.jpg" class="card-img-top" alt="Skill 1" />
              <div class="card-body">
                <p class="card-text text-center">
                  Saya adalah mahasiswa jurusan Teknik Informatika di Universitas Teknologi Bandung (UTB). Di jurusan ini, saya mendalami berbagai konsep dan aplikasi teknologi informasi yang relevan dengan kebutuhan
                  industri modern, dalam lingkungan akademik yang mendukung pengembangan keterampilan teknis dan inovatif.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/freelancer.jpg" class="card-img-top" alt="Skill 2" />
              <div class="card-body text-center">
                <p class="card-text">
                  Saya adalah seorang freelancer yang aktif di platform seperti Upwork dan Fiverr. Di sana, saya menawarkan berbagai layanan yang berkaitan dengan keterampilan yang saya miliki. Dengan pengalaman yang
                  cukup, saya berusaha memberikan hasil kerja yang memuaskan bagi klien, meskipun masih dalam tahap belajar dan pengembangan diri di dunia freelance.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/remotask.png" class="card-img-top" alt="Skill 3" />
              <div class="card-body text-center">
                <p class="card-text">
                  Saya adalah seorang karyawan di Remotask Indonesia. Dalam pekerjaan ini, saya terlibat dalam tugas yang dapat dikerjakan secara remote, seperti pengolahan data. Pekerjaan ini memberi saya kesempatan
                  untuk belajar dan mengembangkan keterampilan baru, serta menyesuaikan waktu kerja dengan kebutuhan saya sebagai mahasiswa.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/pc_build.jpg" class="card-img-top" alt="Skill 4" />
              <div class="card-body text-center">
                <p class="card-text">
                  Saya adalah seorang PC builder yang cukup handal. Dalam proses merakit komputer, saya memahami berbagai komponen dan spesifikasi yang diperlukan untuk menciptakan sistem yang optimal. Dengan pengalaman
                  yang saya miliki, saya dapat membantu orang lain memilih dan merakit PC sesuai dengan kebutuhan mereka, baik untuk gaming, pekerjaan, maupun penggunaan sehari-hari.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/motorbike.jpg" class="card-img-top" alt="Skill 5" />
              <div class="card-body text-center">
                <p class="card-text">
                  Saya memiliki hobi di bidang otomotif, khususnya motor. Saya suka mempelajari berbagai aspek mengenai sepeda motor, mulai dari mekanisme mesin hingga modifikasi dan perawatan. Hobi ini tidak hanya
                  memberikan kepuasan pribadi, tetapi juga memungkinkan saya untuk berinteraksi dengan komunitas otomotif dan belajar lebih banyak tentang teknik dan inovasi terbaru dalam dunia motor.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/iot.jpg" class="card-img-top" alt="Skill 6" />
              <div class="card-body">
                <p class="card-text">
                  Saya memiliki keterampilan di bidang Internet of Things (IoT), meskipun saya masih dalam tahap awal dalam menguasainya. Ketertarikan saya terletak pada bagaimana perangkat dapat saling terhubung dan
                  berkomunikasi untuk meningkatkan efisiensi serta kenyamanan dalam kehidupan sehari-hari. Dengan dasar pengetahuan yang saya miliki, saya berkomitmen untuk terus belajar dan mengembangkan kemampuan di
                  bidang ini agar dapat lebih memahami dan menerapkan solusi IoT di berbagai sektor.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,32L48,37.3C96,43,192,53,288,74.7C384,96,480,128,576,133.3C672,139,768,117,864,96C960,75,1056,53,1152,48C1248,43,1344,53,1392,58.7L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 640">
      <path fill="#e2edff" fill-opacity="1" d="M0,160L26.7,186.7C53.3,213,107,267,160,256C213.3,245,267,171,320,138.7C373.3,107,427,117,480,154.7C533.3,192,587,256,640,272C693.3,288,747,256,800,218.7C853.3,181,907,139,960,144C1013.3,149,1067,203,1120,218.7C1173.3,235,1227,213,1280,202.7C1333.3,192,1387,192,1413,192L1440,192L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path>
      <path fill="#e2edff" fill-opacity="1" d="M0,480L26.7,480C53.3,480,107,480,160,474.7C213.3,469,267,459,320,421.3C373.3,384,427,320,480,330.7C533.3,341,587,427,640,426.7C693.3,427,747,341,800,330.7C853.3,320,907,384,960,410.7C1013.3,437,1067,427,1120,400C1173.3,373,1227,331,1280,336C1333.3,341,1387,395,1413,421.3L1440,448L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path>
    </svg>
    <!-- Akhir Skills -->

    <!-- Other_project -->
     <section id="other_project">
      <div class="container">
        <div class="row text-center">
          <div class="col mb-3">
            <h2>Other Project Example</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-12 col-md-auto">
            <video src="video/Arvr.mp4" class="img-fluid" style="max-width: 900px; width: 100%;"
            controls autoplay muted loop
            ></video>
          </div>
        </div>
      </div>
     </section>

     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 640">
      <path fill="#e2edff" fill-opacity="1" d="M0,288L26.7,282.7C53.3,277,107,267,160,250.7C213.3,235,267,213,320,170.7C373.3,128,427,64,480,64C533.3,64,587,128,640,165.3C693.3,203,747,213,800,218.7C853.3,224,907,224,960,197.3C1013.3,171,1067,117,1120,112C1173.3,107,1227,149,1280,165.3C1333.3,181,1387,171,1413,165.3L1440,160L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path>
      <path fill="#e2edff" fill-opacity="1" d="M0,480L26.7,470.7C53.3,461,107,439,160,448C213.3,457,267,499,320,530.7C373.3,562,427,576,480,576C533.3,576,587,562,640,530.7C693.3,499,747,457,800,448C853.3,439,907,461,960,469.3C1013.3,477,1067,461,1120,433.3C1173.3,406,1227,364,1280,358.7C1333.3,353,1387,367,1413,382.7L1440,384L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path>
    </svg>
     <!-- Akhir Other project -->

    <!-- Contacts -->
    <section id="contact">
      <div class="container">
        <div class="row text-center mb-2">
          <div class="col">
            <h2>Contact Me</h2>
          </div>
        </div>
        <div class="row justify-content-center text-center fs-5 mb-3">
          <div class="col">
            <div class="row-6">usmanasegaf7@gmail.com</div>
            <div class="row-6">+628812089341</div>
            <div class="row-8 mt-2">
              <a href="https://web.facebook.com/profile.php?id=100005539549489" class="bi bi-facebook text-primary me-2"></a>
              <a href="https://www.youtube.com/@mohammadusmanasegaf7180" class="bi bi-youtube text-danger me-2"></a> <a href="https://github.com/usmanasegaf" class="bi bi-github text-dark me-2"></a>
              <a href="https://www.instagram.com/usmanasegaf/" class="bi bi-instagram text-info me-2"></a>
              <a href="https://www.linkedin.com/in/mohammad-usman-asegaf/" class="bi bi-linkedin"></a>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#0d6efd"
          fill-opacity="1"
          d="M0,192L48,192C96,192,192,192,288,170.7C384,149,480,107,576,90.7C672,75,768,85,864,117.3C960,149,1056,203,1152,208C1248,213,1344,171,1392,149.3L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Contacts -->

    <!-- Footer -->
    <footer class="bg-primary text-white text-center p-2">
      <p>Created with Html, Bootstrap 5 CSS Framework by <a href="https://www.youtube.com/@mohammadusmanasegaf7180" class="text-white fw-bold">Mohammad Usman Asegaf</a></p>
    </footer>
    <!-- Akhir Footer -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
