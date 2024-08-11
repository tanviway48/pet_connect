<?php
include('includes/databs.php');
include('functions/common_funtions.php');
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PetConnect-ADOPTION CENTER</title>
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
                <a href="adoption.php" class="nav-item nav-link active">Adoption Center</a>
                <a href="select.php" class="nav-item nav-link ">selected pet(<?php select_item();?>)</a>
                <!-- <a href="login.php" class="nav-item nav-link">Login</a> -->
                <?php
                
                if(!isset($_SESSION['username'])){
                    echo"<li class='nav-item'>
                    <a class='nav-link' href='./users_area/user_login.php'>login</a>
                </li>";
               }else{
                   echo"<li class='nav-item'>
                    <a class='nav-link' href='./users_area/user_logout.php'>logout</a>
                </li>";
               }
                
                ?>
                <a href="contact.php" class="nav-item nav-link nav-contact bg-primary text-white px-5 ms-lg-5">Contact <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- CALLING FUNCTION-start -->
       <?php
       select_pet()
       ?>
    <!-- CALLING FUNCTION-ends -->


    <!-- Adoption Start -->
    <!-- <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">PET TO ADOPT</h6>
                <h1 class="display-5 text-uppercase mb-0">Your Best Friends</h1>
            </div>
            <div class="owl-carousel product-carousel">
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/rabbit2.jpeg" alt="">
                        <h6 class="text-uppercase">Hira</h6>
                        <h5 class="text-primary mb-0">A FELMISH RABBIT</h5>
                        <div class="btn-action d-flex justify-content-center">
                            
                            <a class="btn btn-primary py-2 px-3" href="hira.php"><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/mittu.jpeg" alt="">
                        <h6 class="text-uppercase">Mitthu</h6>
                        <h5 class="text-primary mb-0">A Parrot</h5>
                        <div class="btn-action d-flex justify-content-center">
                           
                            <a class="btn btn-primary py-2 px-3" href="mitthu.php"><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/mint.jpeg" alt="">
                        <h6 class="text-uppercase">Mint</h6>
                        <h5 class="text-primary mb-0"> Chinchilla </h5>
                        <div class="btn-action d-flex justify-content-center">
                            
                            <a class="btn btn-primary py-2 px-3" href="mint.php"><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/kenna.jpeg" alt="">
                        <h6 class="text-uppercase">KENNA</h6>
                        <h5 class="text-primary mb-0"> Affenpinscher Mix</h5>
                        <div class="btn-action d-flex justify-content-center">
                            
                            <a class="btn btn-primary py-2 px-3" href="kenna.php"><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/snowy.jpeg" alt="">
                        <h6 class="text-uppercase">SIMBA</h6>
                        <h5 class="text-primary mb-0">A Cat</h5>
                        <div class="btn-action d-flex justify-content-center">
                            
                            <a class="btn btn-primary py-2 px-3" href="snowy.php"><i class="bi bi-eye"></i></a>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- <a class="btn btn-primary py-2 px-3" href=""><i class="bi bi-cart"></i></a> -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">PET TO ADOPT</h6>
                <h1 class="display-5 text-uppercase mb-0">Your Best Friends</h1>
            </div>
            <!-- row starts -->
    <div class="row px-1">
        <div class="col-md-10 mt-5">
            <!-- pets -->
            <div class="row">
                <!-- fetching pet basic info -->
                <?php
                getpets();
                get_unique_category();
                // $ip = getIPAddress();  
                // echo 'User Real IP Address - '.$ip;  
                
                
                    
                
                ?>
                
                <div class="col-md-4"></div>
            </div>
        </div>
        <div class="col-md-2 bg-primary mt-5 me-auto">
            
            <!-- sidenav -->
            <ul class="navbar-nav me-auto text-center mt-2 wd-full ">
                <li class="nav-item bg-secondary  wd-full">
                    <a href="/" class="nav-link text-dark"><h5>Affilated NGOs</h5></a>
                </li>
                <li class="nav-item mt-4  border border-5-secondary wd-full">
                    <a href="/" class="nav-link text-dark">Asharay Foundation</a>
                </li>
                <li class="nav-item mt-4 border border-5-secondary wd-full">
                    <a href="/" class="nav-link text-dark">Shree Swaminarayan Educational And Welfare Society</a>
                </li>
                <li class="nav-item mt-4 border border-5-secondary wd-full">
                    <a href="/" class="nav-link text-dark">Jeevan Parivar Foundation</a>
                </li>
                <li class="nav-item mt-4 border border-5-secondary wd-full">
                    <a href="/" class="nav-link text-dark">Save Birds Free Treatment Centre</a>
                </li>
            </ul>
            <!-- categories to display -->
            <ul class="navbar-nav me-auto text-center mt-2 wd-full ">
                <li class="nav-item bg-secondary mt-4 wd-full ">
                    <a href="/" class="nav-link text-dark"><h5>Categories</h5></a>
                </li>
                <?php
                getcategories();
                ?>
                <!-- <li class="nav-item mt-4 wd-full border border-5-secondary">
                    <a href="/" class="nav-link text-dark">Category 1</a>
                </li>
                <li class="nav-item mt-4 wd-full border border-5-secondary">
                    <a href="/" class="nav-link text-dark">Category 2</a>
                </li>
                <li class="nav-item mt-4 wd-full border border-5-secondary">
                    <a href="/" class="nav-link text-dark">Category 3</a>
                </li>
                <li class="nav-item mt-4 wd-full border border-5-secondary">
                    <a href="/" class="nav-link text-dark">Category 4</a>
                </li> -->
            </ul>

        </div>
    </div>
    </div>
    </div>
    
    <!-- Adoption Ends -->
    
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