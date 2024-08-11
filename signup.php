<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PC:Sign Up</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid border-bottom d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-4 text-center py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Our Office</h6>
                        <span>123 Street, Mumbai, India</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center border-start border-end py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Email Us</h6>
                        <span>petconnect@example.com</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Call Us</h6>
                        <span>+012 345 6789</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
        <a href="index.php" class="navbar-brand ms-lg-5">
            <h1 class="m-0 text-uppercase text-dark"><i class="bi bi-shop fs-1 text-primary me-3"></i>Pet Connect</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.php" class="nav-item nav-link ">Home</a>
                
                <!-- <a href="service.php" class="nav-item nav-link">Adoption</a> -->
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="adoption.php" class="nav-item nav-link">Adoption Center</a>
                <!-- <a href="login.php" class="nav-item nav-link">Login</a> -->
                 <div class="nav-item dropdown ">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Login</a>
                    <div class="dropdown-menu m-0">
                        <a href="signin.php" class="dropdown-item">Sign In</a>
                        <a href="signup.php" class="dropdown-item">Sign Up</a>
                        
                    </div> 
                </div>
                <a href="contact.php" class="nav-item nav-link nav-contact bg-primary text-white px-5 ms-lg-5">Contact <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- sigup starts -->
    <div class="container">
        <?php
        // if (isset($_POST["submit"])) {
        //    $fullName = $_POST["fullname"];
        //    $email = $_POST["email"];
        //    $password = $_POST["password"];
        //    $passwordRepeat = $_POST["repeat_password"];
           
        //    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        //    $errors = array();
           
        //    if (empty($fullName) OR empty($email) OR empty($password) OR empty($passwordRepeat)) {
        //     array_push($errors,"All fields are required");
        //    }
        //    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //     array_push($errors, "Email is not valid");
        //    }
        //    if (strlen($password)<8) {
        //     array_push($errors,"Password must be at least 8 charactes long");
        //    }
        //    if ($password!==$passwordRepeat) {
        //     array_push($errors,"Password does not match");
        //    }
        //    require_once "database.php";
        //    $sql = "SELECT * FROM users WHERE email = '$email'";
        //    $result = mysqli_query($conn, $sql);
        //    $rowCount = mysqli_num_rows($result);
        //    if ($rowCount>0) {
        //     array_push($errors,"Email already exists!");
        //    }
        //    if (count($errors)>0) {
        //     foreach ($errors as  $error) {
        //         echo "<div class='alert alert-danger'>$error</div>";
        //     }
        //    }else{
            
        //     $sql = "INSERT INTO users (full_name, email, password) VALUES ( ?, ?, ? )";
        //     $stmt = mysqli_stmt_init($conn);
        //     $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
        //     if ($prepareStmt) {
        //         mysqli_stmt_bind_param($stmt,"sss",$fullName, $email, $passwordHash);
        //         mysqli_stmt_execute($stmt);
        //         echo "<div class='alert alert-success'>You are registered successfully.</div>";
        //     }else{
        //         die("Something went wrong");
        //     }
        //    }
          

        // }
        ?>
        <form action="signup.php" class=" align-items-center border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;" method="post">
            <div class="form-group ">
                <input type="text" class="form-control bg-light border-5 px-4 mt-5 5 5 5" name="fullname" placeholder="Full Name:">
            </div>
            <div class="form-group">
                <input type="emamil" class="form-control bg-light border-5 px-4 mt-5 5 5 5" name="email" placeholder="Email:">
            </div>
            <div class="form-group">
                <input type="password" class="form-control bg-light border-5 px-4 mt-5 5 5 5" name="password" placeholder="Password:">
            </div>
            <div class="form-group">
                <input type="password" class="form-control bg-light border-5 px-4 mt-5 5 5 5" name="repeat_password" placeholder="Repeat Password:">
            </div>
            <div class="form-btn">
                <input type="submit" class="btn btn-primary w-100 py-3 mt-5" value="SIGN UP" name="submit">
            </div>
        </form>
        <div>
        <div><p>Already Registered <a href="signin.php">Login Here</a></p></div>
      </div>
    </div>


    <!-- signup ends -->

 
    

    <!-- Footer Start -->
    <div class="container-fluid bg-light mt-5 py-5">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Get In Touch</h5>
                    <p class="mb-4">No dolore ipsum accusam no lorem. Invidunt sed clita kasd clita et et dolor sed dolor</p>
                    <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>123 Mumbai, India</p>
                    <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>petconnect@example.com</p>
                    <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>+012 345 67890</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Quick Links</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-body mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                        <a class="text-body mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                        <a class="text-body mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                        <a class="text-body mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Meet The Team</a>
                        <!-- <a class="text-body mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a> -->
                        <a class="text-body" href="contact.php"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Newsletter</h5>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control p-3" placeholder="Your Email">
                            <button class="btn btn-primary">Sign Up</button>
                        </div>
                    </form>
                    <h6 class="text-uppercase mt-4 mb-3">Follow Us</h6>
                    <div class="d-flex">
                        <a class="btn btn-outline-primary btn-square me-2" href="#"><i class="bi bi-twitter"></i></a>
                        <a class="btn btn-outline-primary btn-square me-2" href="#"><i class="bi bi-facebook"></i></a>
                        <a class="btn btn-outline-primary btn-square me-2" href="#"><i class="bi bi-linkedin"></i></a>
                        <a class="btn btn-outline-primary btn-square" href="#"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
                <div class="col-12 text-center text-body">
                    <a class="text-body" href="">Terms & Conditions</a>
                    <span class="mx-1">|</span>
                    <a class="text-body" href="">Privacy Policy</a>
                    <span class="mx-1">|</span>
                    <a class="text-body" href="">Customer Support</a>
                    <span class="mx-1">|</span>
                    <a class="text-body" href="">Payments</a>
                    <span class="mx-1">|</span>
                    <a class="text-body" href="">Help</a>
                    <span class="mx-1">|</span>
                    <a class="text-body" href="">FAQs</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white-50 py-4">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="text-white" href="#">PET CONNECT</a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!-- <p class="mb-0">Designed by <a class="text-white" href="https://htmlcodex.com">HTML Codex</a></p> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>