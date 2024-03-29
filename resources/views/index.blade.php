<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

  {{-- Required Meta tags --}}
  <meta charset="UTF-8" />
  <meta name="keywords" content="HTML, CSS, JavaScript, PHP, Laravel" />
  <meta name="description" content="Portfolio Website" />
  <meta name="author" content="Muhamad Rezky Rizaldi" />
  {{-- <meta http-equiv="refresh" content="30" /> --}}
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
  <link rel="icon" href="/favicon.ico" type="x-icon" />
  <title>Muhamad Rezky Rizaldi</title>

  {{-- Bootstrap CSS --}}
  <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="/assets/vendors/linericon/style.css" />
  <link rel="stylesheet" href="/assets/vendors/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="/assets/css/magnific-popup.css" />
  <link rel="stylesheet" href="/assets/vendors/nice-select/css/nice-select.css" />
  <link rel="stylesheet" href="/assets/css/animate.min.css" />

  {{-- Icons --}}
  <link rel="stylesheet" href="/assets/fonts/pro/css/all.css" />

  {{-- Main CSS --}}
  <link rel="stylesheet" href="/assets/css/style.css" />
  <link rel="stylesheet" href="/assets/css/own.css" />

</head>

<body id="page-top">

  {{-- Loader --}}
  <div class="loader-wrapper">
    <img class="loader" src="/assets/img/favicon.png" alt="Loader" />
  </div>
  {{-- End Loader --}}

  {{-- Header Section --}}
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg bg-transparent navbar-dark">

        {{-- Header Container --}}
        <div class="container">
          <button class="navbar-toggler pl-3 p-lg-0 p-md-0 p-sm-0" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="navbar-collapse pl-3 p-lg-0 p-md-0 p-sm-0 collapse w-75 order-1 order-lg-0 order-md-1 order-sm-1 dual-collapse2">
            <label class="form-check-label mr-3" for="">Translate</label>
            <div class="mr-auto" id="google_translate_element"></div>
          </div>
          <div class="order-0">
            <a class="navbar-brand mx-auto order-0 order-md-2 text-uppercase gradient-color" title="Muhamad Rezky Rizaldi" href="#page-top" style="cursor: default">
              <img src="/assets/img/brand.jpeg" alt="Brand" class="rounded-circle mr-2" width="40" height="40" />Rezky
            </a>
          </div>
          <div class="navbar-collapse collapse pl-3 p-lg-0 p-md-0 p-sm-0 w-100 order-4 order-md-4 dual-collapse2">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item active"><a class="nav-link active" title="Home" href="#home">Home</a></li>
              <li class="nav-item"><a class="nav-link" title="Profile" href="#profile">Profile</a>
              </li>
              <li class="nav-item"><a class="nav-link" title="Skill" href="#skill">Skill</a>
              </li>
              <li class="nav-item"><a class="nav-link" title="Portfolio" href="#portfolio">Portfolio</a>
              </li>
              <li class="nav-item"><a class="nav-link" title="Contact" href="#contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
        {{-- End Header Container --}}

      </nav>
    </div>
  </header>
  {{-- End Header Section --}}

  {{-- Banner Section --}}
  <section class="home_banner_area" id="home">
    <div class="banner_inner">

      {{-- Banner Container --}}
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="banner_content">
              <h3 class="text-uppercase">Hello, nice to meet you!</h3>
              <h1 class="text-uppercase">I am muhamad rezky rizaldi</h1>
              <h5 class="text-uppercase">Website Developer</h5>
              <div class="d-flex align-items-center">
                <a class="primary_btn" title="Hire Me" href="#"><span>Hire Me<i class="fad fa-bullhorn pl-2"
                  style="font-size: 24px; transform: translate(3px, 3px);"></i></span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="home_right_img">
              <img class="" src="/assets/img/banner/home-right.png" alt="Banner 1" />
            </div>
          </div>
        </div>
      </div>
      {{-- End Banner Container --}}

    </div>
  </section>
  {{-- End Banner Section --}}

  {{-- About Me Section --}}
  <section class="about_area section_gap" id="profile">

    {{-- About Me Container --}}
    <div class="container">
      <div class="row justify-content-start align-items-center">
        <div class="col-lg-5">
          <div class="about_img">
            <img class="" src="/assets/img/about-us.png" alt="Banner 2" />
          </div>
        </div>
        <div class="offset-lg-1 col-lg-5">
          <div class="main_title text-left">
            <h2>Profile</h2>
            <p>Someone who wants to become a professional Web Developer with the aim of revolutionizing the IT world.</p>
            <p>Even though I am an amateur, I currently know several frameworks from various programming languages such as Bootstrap and Laravel. My expertise tends to be more towards Front-end Programming.</p>
            <p>My favorite quote is <strong>Need Not To Know.</strong> from Detective Conan</p>
            <a class="primary_btn" title="Get My CV" href="#"><span>Get My CV<i class="fad fa-file-invoice pl-2" style="font-size: 24px; transform: translate(3px, 3px);"></i></span>
            </a>
          </div>
        </div>
      </div>
    </div>
    {{-- End About Me Container --}}

  </section>
  {{-- End About Me Section --}}

  {{-- Skill Section --}}
  <section class=" features_area" id="skill">

    {{-- Skill Container --}}
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <div class="main_title">
            <h2>Programming Skills</h2>
            <p>Here are a percentage of some of the programming languages that I have mastered so far.</p>
          </div>
        </div>
      </div>
      <div class="row feature_inner">
        <div class="col-lg-4 col-md-6">
          <div class="feature_item">
            <i class="fab fa-html5"></i>
            <h4>HTML 5</h4>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="feature_item">
            <i class="fab fa-css3-alt"></i>
            <h4>CSS 3</h4>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="feature_item">
            <i class="fab fa-php"></i>
            <h4>PHP 7</h4>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="feature_item">
            <i class="fab fa-js-square"></i>
            <h4>Vanilla JavaScript</h4>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="feature_item">
            <i class="fab fa-bootstrap"></i>
            <h4>Bootstrap 4 Framework</h4>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="feature_item">
            <i class="fab fa-laravel"></i>
            <h4>Laravel 5 Framework</h4>
          </div>
        </div>
      </div>
    </div>
    {{-- End Skill Container --}}

  </section>
  {{-- End Skill Section --}}

  {{-- Portfolio Section --}}
  <section class="portfolio_area" id="portfolio">

    {{-- Portfolio Container --}}
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="main_title text-left">
            <h2>Portfolio</h2>
            <p>Here are the list of projects that I have received.</p>
          </div>
        </div>
      </div>
      <div class="filters portfolio-filter">
        <ul>
          <li class="active" data-filter="*">all</li>
          <li data-filter=".latest"> latest</li>
          <li data-filter=".following">following</li>
          <li data-filter=".upcoming">upcoming</li>
          <li data-filter=".finished">Finished</li>
        </ul>
      </div>
      <div class="filters-content">
        <div class="row portfolio-grid justify-content-center">
          <div class="col-lg-4 col-md-6 all finished">
            <div class="portfolio_box">
              <div class="single_portfolio">
                <img class="img-fluid w-100" src="/assets/img/portfolio/restoran.png" alt="Restoran" />
                <div class="overlay"></div>
                <a href="/assets/img/portfolio/restoran.png" class="img-gal">
                  <div class="icon">
                    <span class="lnr lnr-cross"></span>
                  </div>
                </a>
              </div>
              <div class="short_info">
                <h4>Restoran</h4>
                <p>Project Tes Ujikom (Uji Kompetensi) SMK Prakarya Internasional Bandung Tahun Ajaran 2019/2020</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 all finished latest">
            <div class="portfolio_box">
              <div class="single_portfolio">
                <img class="img-fluid w-100" src="/assets/img/portfolio/bimtek.jpeg" alt="Bimbingan Teknisi Mitra Manajemen Dearah" />
                <div class="overlay"></div>
                <a href="/assets/img/portfolio/bimtek.jpeg" class="img-gal">
                  <div class="icon">
                    <span class="lnr lnr-cross"></span>
                  </div>
                </a>
              </div>
              <div class="short_info">
                <h4>Bimtek MMD</h4>
                <p>Project Pertama Berfrofit</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 all finished">
            <div class="portfolio_box">
              <div class="single_portfolio">
                <img class="img-fluid w-100" src="/assets/img/portfolio/e-mading.jpeg" alt="E-mading" />
                <div class="overlay"></div>
                <a href="/assets/img/portfolio/e-mading.jpeg" class="img-gal">
                  <div class="icon">
                    <span class="lnr lnr-cross"></span>
                  </div>
                </a>
              </div>
              <div class="short_info">
                <h4>E-Mading</h4>
                <p>Project Akhir Tahun SMK Prakarya Internasional Bandung Tahun Ajaran 2019/2020</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 all following latest">
            <div class="portfolio_box">
              <div class="single_portfolio">
                <img class="img-fluid w-100" src="/assets/img/portfolio/harunozuka-and-comrade.png" alt="Prof. Harunozuka & Comrade" />
                <div class="overlay"></div>
                <a href="/assets/img/portfolio/harunozuka-and-comrade.png" class="img-gal">
                  <div class="icon">
                    <span class="lnr lnr-cross"></span>
                  </div>
                </a>
              </div>
              <div class="short_info">
                <h4>Harunozuka & Comrade</h4>
                <p>Project Amal</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 all following latest">
            <div class="portfolio_box">
              <div class="single_portfolio">
                <img class="img-fluid w-100" src="/assets/img/portfolio/vtuber-sub-indo.png" alt="Vtuber Sub Indo" />
                <div class="overlay"></div>
                <a href="/assets/img/portfolio/vtuber-sub-indo.png" class="img-gal">
                  <div class="icon">
                    <span class="lnr lnr-cross"></span>
                  </div>
                </a>
              </div>
              <div class="short_info">
                <h4>Vtuber Sub Indo</h4>
                <p>Project Gabut</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 all finished">
            <div class="portfolio_box">
              <div class="single_portfolio">
                <img class="img-fluid w-100" src="/assets/img/portfolio/sistem-info-sekolah.png" alt="Sistem Penilaian Informasi Sekolah" />
                <div class="overlay"></div>
                <a href="/assets/img/portfolio/sistem-info-sekolah.png" class="img-gal">
                  <div class="icon">
                    <span class="lnr lnr-cross"></span>
                  </div>
                </a>
              </div>
              <div class="short_info">
                <h4>Sistem Penilaian Informasi Sekolah</h4>
                <p>Project Prakerin (Praktik Kerja Industri) SMk Prakaya Internasional Bandung Tahun Ajaran 2018/2019</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- End Portfolio Container --}}

  </section>
  {{-- End Portfolio Section --}}

  {{-- Contact Me Section --}}
  <section class="contact_area" id="contact">

    {{-- Contact Me Container --}}
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="main_title text-left">
            <h2>Contact Me</h2>
            <p>Here are the list of projects that I have received.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <div class="contact_info">
            <div class="info_item" title="My Adress">
              <i class="fad fa-home-alt pl-2"></i>
              <h6>Bandung, West Java, Indonesia</h6>
              <p>Terusan Pasir Koja St., 3 Raden Dewi 6 Rd.</p>
            </div>
            <div class="info_item" title="My WhatsApp">
              <i class="fab fa-whatsapp pl-2"></i>
              <h6><a href="https://kontakk.com/wa/f62e55">0819-3661-5469</a></h6>
              <p>WhatsApp Number</p>
            </div>
            <div class="info_item" title="My Gmail">
              <i class="fad fa-envelope pl-2"></i>
              <h6><a href="mailto:rezkyrizaldi30@gmail.com">rezkyrizaldi30@gmail.com</a></h6>
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div>
        <div class="col-lg-9">
          <form class="row contact_form" action="contact_process.php" method="POST" id="contactForm" novalidate="novalidate" required>
            <div class="col-md-6">
              <label for="name">Name</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fad fa-user"></i></div>
                </div>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" autofocus>
              </div>
              <label for="email">Email</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fad fa-envelope"></i></div>
                </div>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address">
              </div>
              <label for="subject">Subject</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fad fa-heading"></i></div>
                </div>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter your Subject">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" name="message" id="message" rows="2" placeholder="Enter your Message"></textarea>
                <small id="passwordHelpBlock" class="form-text text-muted">
                  Your message must be 8-20 characters long, and no more than 500 words.
                </small>
              </div>
            </div>
            <div class="col-md-12 text-right">
              <button title="Send Message" type="submit" value="submit" class="primary_btn">Send Message
                <i class="fad fa-paper-plane pl-2" style="font-size: 24px; transform: translate(3px, 3px);"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
      <div class="embed-responsive embed-responsive-21by9 embed-responsive-16by9 embed-responsive-4by3 embed-responsive-1by1">
        <iframe class="section_gap embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7047122522176!2d107.58782811407994!3d-6.925857094995903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6002ca1a6c5%3A0xbbb1518487a1823c!2sJl.%20Terusan%20Pasirkoja%2C%20Babakan%20Tarogong%2C%20Kec.%20Bojongloa%20Kaler%2C%20Kota%20Bandung%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1597425847874!5m2!1sid!2sid&output=embed" width="1110" height="555" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" style="margin-bottom: 0"></iframe>
      </div>
    </div>
    {{-- End Contact Me Container --}}

  </section>
  {{-- End Contact Me Section --}}

  {{-- Footer Section --}}
  <footer class="footer_area">

    {{-- Footer Container --}}
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="footer_top flex-column">
            <div class="text-left">
              <h2 style="font-size: 36px; font-weight: 700; margin-bottom: 15px; line-height: 50px; text-transform: uppercase;">Follow Me</h2>
              <p>Here is my Social Media Account</p>
            </div>
            <div class="footer_social">
              <a title="My Facebook" href="https://www.facebook.com/rezkyrizaldi30" target="_blank"><i class="fab fa-facebook"></i></a>
              <a title="My Twitter" href="https://twitter.com/RezkyRizaldi1" target="_blank"><i class="fab fa-twitter"></i></a>
              <a title="My Instagram" href="https://instagram.com/rezkyrizaldii" target="_blank"><i class="fab fa-instagram"></i></a>
              <a title="My GitHub" href="https://github.com/RezkyRizaldi" target="_blank"><i class="fab fa-github"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="row footer_bottom justify-content-center">
        <p class="col-lg-8 col-sm-12 footer-text">Copyright &copy;
          <script>
            document.write(new Date().getFullYear());
          </script> All rights reserved by <span class="gradient-color">Muhamad Rezky Rizaldi</span>
        </p>
      </div>
    </div>
    {{-- End Footer Container --}}

  </footer>
  {{-- End Footer Section --}}

  {{-- Back To Top Button --}}
  <a href="#page-top" class="top" style="display: inline"><i class="fad fa-chevron-up"></i></a>

  {{-- Bootstrap JavaScript --}}
  <script type="text/javascript" src="/assets/js/jquery-3.5.1.js"></script>
  <!-- <script type="text/javascript" src="/assets/js/jquery-3.5.1.slim.min.js"></script> -->
  <script type="text/javascript" src="/assets/js/popper.min.js"></script>
  <script type="text/javascript" src="/assets/bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/assets/js/stellar.js"></script>
  <script type="text/javascript" src="/assets/js/jquery.magnific-popup.min.js"></script>
  <script type="text/javascript" src="/assets/vendors/nice-select/js/jquery.nice-select.min.js"></script>
  <script type="text/javascript" src="/assets/vendors/isotope/imagesloaded.pkgd.min.js"></script>
  <script type="text/javascript" src="/assets/vendors/isotope/isotope-min.js"></script>
  <script type="text/javascript" src="/assets/vendors/owl-carousel/owl.carousel.min.js"></script>
  <script type="text/javascript" src="/assets/js/jquery.ajaxchimp.min.js"></script>
  <script type="text/javascript" src="/assets/js/mail-script.js"></script>
  <script type="text/javascript" src="/assets/js/easing.min.js"></script>
  <script type="text/javascript" src="/assets/js/jquery.counterup.js"></script>
  <script type="text/javascript" src="/assets/js/jquery.waypoints.min.js"></script>
  <script type="text/javascript" src="/assets/js/jquery-migrate.min.js"></script>
  <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@1.0.0/dist/tf.min.js"></script> -->
  <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@tensorflow-models/body-pix@1.0.0"></script>  -->

  {{-- Icons --}}
  <script type="text/javascript" src="/assets/fonts/pro/js/all.js"></script>

  {{-- Google Maps JavaScript --}}
  <script type="text/javascript"
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
  <script type="text/javascript" src="/assets/js/gmaps.min.js"></script>

  {{-- Google Translate JavaScript --}}
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({
        pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.VERTCAL, autoDisplay: false
      }, 'google_translate_element');
    }
  </script>

  {{-- My JavaScript --}}
  <script type="text/javascript" src="/assets/js/theme.js"></script>
  <script type="text/javascript" src="/assets/js/loader.js"></script>

</body>

</html>