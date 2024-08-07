<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Admin Panel - Perch</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container position-relative d-flex align-items-center justify-content-between">
            <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
                <h1 class="sitename">Perch</h1>
                <span>.</span>
            </a>
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#dashboard" class="active">Dashboard</a></li>
                    <li><a href="#users">Users</a></li>
                    <li><a href="#settings">Settings</a></li>
                    <li><a href="#reports">Reports</a></li>
                    <li><a href="#support">Support</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
            <a class="btn-getstarted" href="#logout">Logout</a>
        </div>
    </header><!-- End Header -->

    <!-- ======= Main Section ======= -->
    <main class="main">
        <!-- Dashboard Section -->
        <section id="dashboard" class="dashboard-section section">
            <div class="container" data-aos="fade-up">
                <h2>Dashboard</h2>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card info-card">
                            <div class="card-body">
                                <h5 class="card-title">Users</h5>
                                <p class="card-text">1,234</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card info-card">
                            <div class="card-body">
                                <h5 class="card-title">Posts</h5>
                                <p class="card-text">567</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card info-card">
                            <div class="card-body">
                                <h5 class="card-title">Comments</h5>
                                <p class="card-text">890</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card info-card">
                            <div class="card-body">
                                <h5 class="card-title">Views</h5>
                                <p class="card-text">12,345</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Dashboard Section -->

        <!-- Users Section -->
        <section id="users" class="users-section section">
            <div class="container" data-aos="fade-up">
                <h2>Users</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>johndoe@example.com</td>
                            <td>Admin</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        <!-- Additional user rows as needed -->
                    </tbody>
                </table>
            </div>
        </section><!-- End Users Section -->

        <!-- Settings Section -->
        <section id="settings" class="settings-section section">
            <div class="container" data-aos="fade-up">
                <h2>Settings</h2>
                <form>
                    <div class="mb-3">
                        <label for="siteName" class="form-label">Site Name</label>
                        <input type="text" class="form-control" id="siteName" placeholder="Enter site name">
                    </div>
                    <div class="mb-3">
                        <label for="adminEmail" class="form-label">Admin Email</label>
                        <input type="email" class="form-control" id="adminEmail" placeholder="Enter admin email">
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </section><!-- End Settings Section -->

        <!-- Reports Section -->
        <section id="reports" class="reports-section section">
            <div class="container" data-aos="fade-up">
                <h2>Reports</h2>
                <p>Coming soon...</p>
            </div>
        </section><!-- End Reports Section -->

        <!-- Support Section -->
        <section id="support" class="support-section section">
            <div class="container" data-aos="fade-up">
                <h2>Support</h2>
                <p>Contact our support team for assistance.</p>
            </div>
        </section><!-- End Support Section -->
    </main><!-- End Main Section -->

    <!-- ======= Footer ======= -->
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
    
      <!-- Preloader -->
      <div id="preloader"></div>
    
      <!-- Vendor JS Files -->
      <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="assets/vendor/php-email-form/validate.js"></script>
      <script src="assets/vendor/aos/aos.js"></script>
      <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
      <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
      <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    
      <!-- Main JS File -->
      <script src="assets/js/main.js"></script>
    
    </body>
    
    </html>