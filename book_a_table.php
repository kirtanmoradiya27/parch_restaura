<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Book a table - Perch</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
  
    <!-- Favicons -->
    <link href="assets/img/favicon_io/android-chrome-512x512.png" rel="icon">
    <link href="assets/img/favicon_io/apple-touch-icon.png" rel="apple-touch-icon">
  
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Amatic+SC:wght@400;700&display=swap"
      rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/book_a_table.css" rel="stylesheet">

  
</head>
<body>
    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container position-relative d-flex align-items-center justify-content-between">

          <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <embed src="assets\img\2jHtXwlb1v39frF41WvMEHMRF22.svg" class="img-fluid"/> -->
            <!-- <img src="assets/img/logo.jpg" alt="" class="img-fluid"> -->
            <h1 class="sitename">Perch</h1>
            <span>.</span>
          </a>
    
          <nav id="navmenu" class="navmenu">
            <ul>
              <li><a href="#hero" class="active">Home<br></a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#menu">Menu</a></li>
              <li><a href="#events">Events</a></li>
              <li><a href="#chefs">Chefs</a></li>
              <li><a href="#gallery">Gallery</a></li>
              <!-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Dropdown 1</a></li>
                  <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                        class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                      <li><a href="#">Deep Dropdown 1</a></li>
                      <li><a href="#">Deep Dropdown 2</a></li>
                      <li><a href="#">Deep Dropdown 3</a></li>
                      <li><a href="#">Deep Dropdown 4</a></li>
                      <li><a href="#">Deep Dropdown 5</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Dropdown 2</a></li>
                  <li><a href="#">Dropdown 3</a></li>
                  <li><a href="#">Dropdown 4</a></li>
                </ul>
              </li> -->
              <li><a href="#contact">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
          </nav>
          <div class=""> 
            <a class="btn-getstarted" href="sign.html">Sign Up</a>
            <a class="btn-getstarted" href="login.html">Login</a>
            <a class="btn-getstarted" href="index.php#book-a-table">Book a Table</a>
          </div>
    
    
        </div>
      </header>

    <main id="main">
        <section id="book-a-table" class="section book-a-table">
            <div class="container" data-aos="fade-up">
                <div class="section-title text-center mb-5">
                    <h2>Reservation</h2>
                    <p class="fs-1">Book a <span class="text-primary">Table</span></p>
                </div>

                <form id="reservation-form" class="reservation-form">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control" id="email" placeholder="Your Email" required>
                        </div>
                        <div class="col-md-6">
                            <input type="tel" class="form-control" id="phone" placeholder="Your Phone" required>
                        </div>
                        <div class="col-md-6">
                            <input type="number" class="form-control" id="people" placeholder="Number of People" min="1" max="20" required>
                        </div>
                        <div class="col-md-6">
                            <input type="date" class="form-control" id="date" required>
                        </div>
                        <div class="col-md-6">
                            <input type="time" class="form-control" id="time" required>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h4 class="mb-3">Choose Your Table Format:</h4>
                        <div class="row g-3 table-options">
                            <div class="col-6 col-md-3">
                                <label class="table-option">
                                    <input type="radio" name="table-format" value="2-seater" required>
                                    <div class="table-image">
                                        <img src="assets/img/table-2-seater.png" alt="2-seater table">
                                        <span>2-Seater</span>
                                    </div>
                                </label>
                            </div>
                            <div class="col-6 col-md-3">
                                <label class="table-option">
                                    <input type="radio" name="table-format" value="4-seater">
                                    <div class="table-image">
                                        <img src="assets/img/table-4-seater.png" alt="4-seater table">
                                        <span>4-Seater</span>
                                    </div>
                                </label>
                            </div>
                            <div class="col-6 col-md-3">
                                <label class="table-option">
                                    <input type="radio" name="table-format" value="6-seater">
                                    <div class="table-image">
                                        <img src="assets/img/table-6-seater.png" alt="6-seater table">
                                        <span>6-Seater</span>
                                    </div>
                                </label>
                            </div>
                            <div class="col-6 col-md-3">
                                <label class="table-option">
                                    <input type="radio" name="table-format" value="8-seater">
                                    <div class="table-image">
                                        <img src="assets/img/table-8-seater.png" alt="8-seater table">
                                        <span>8-Seater</span>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mt-4">
                        <textarea class="form-control" id="message" rows="4" placeholder="Special Requests or Additional Information"></textarea>
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary btn-lg">Book Now</button>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <footer id="footer" class="footer dark-background">

        <div class="container">
          <div class="row gy-3">
            <div class="col-lg-3 col-md-6 d-flex">
              <i class="bi bi-geo-alt icon"></i>
              <div class="address">
                <h4>Address</h4>
                <p>A108 Adam Street</p>
                <p>New York, NY 535022</p>
                <p></p>
              </div>
    
            </div>
    
            <div class="col-lg-3 col-md-6 d-flex">
              <i class="bi bi-telephone icon"></i>
              <div>
                <h4>Contact</h4>
                <p>
                  <strong>Phone:</strong> <span>+91 8799 050 118</span><br>
                  <strong>Email:</strong> <span>info.Perch@gmail.com</span><br>
                </p>
              </div>
            </div>
    
            <div class="col-lg-3 col-md-6 d-flex">
              <i class="bi bi-clock icon"></i>
              <div>
                <h4>Opening Hours</h4>
                <p>
                  <strong>Mon-Sat:</strong> <span>11AM - 23PM</span><br>
                  <strong>Sunday</strong>: <span> 6PM - 23PM;</span>
                </p>
              </div>
            </div>
    
            <div class="col-lg-3 col-md-6">
              <h4>Follow Us</h4>
              <div class="social-links d-flex">
                <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
    
          </div>
        </div>
    
        <div class="container copyright text-center mt-4">
          <p>© <span>Copyright</span> <strong class="px-1 sitename">Perch</strong> <span>All Rights Reserved</span></p>
    
        </div>
    
      </footer>
    
      <!-- Scroll Top -->
      <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
          class="bi bi-arrow-up-short"></i></a>

    
      <!-- Vendor JS Files -->
      <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="assets/vendor/php-email-form/validate.js"></script>
      <script src="assets/vendor/aos/aos.js"></script>
      <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
      <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
      <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/js/book-a-table.js"></script>
</body>
</html>