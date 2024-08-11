<?php
include('includes/databs.php');
include('functions/common_funtions.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PetConnect-Selected to adopt</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    

    <!-- Favicon -->
    <!-- <link href="img/favicon.ico" rel="icon"> -->

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
    <style>
        .select_image{
         width: 200px;
        height: 200px;
        object-fit:contain;
    }
    </style>
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
                <a href="adoption.php" class="nav-item nav-link ">Adoption Center</a>
                <a href="select.php" class="nav-item nav-link active ">selected pet(<?php select_item();?>)</a>
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

    <!-- SELECTED PET -Starts -->
           <!-- <div class="text-center mt-5"><h1>Your selected pets to adopt</h1></div> -->
           <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">PET TO ADOPT</h6>
                <h1 class="display-5 text-uppercase mb-0">Your selected pets to adopt</h1>
            </div>
           <div class="container mt-5">
            <div class="row">
                <form action="" method="post">
                <table class="table table-bordered text-center">
                    
                        <!-- PHP code to display dynamic data -->
                        <?php
                        global $conn;
                        $get_ip_add = getIPAddress();
                        $total_fee=0;
                        $sselect_query="SELECT * FROM `adoption_details` where ip_address='$get_ip_add' ";
                        $result=mysqli_query($conn,$sselect_query);
                        $result_count=mysqli_num_rows($result);
                        if($result_count>0){
                            echo"<thead>
                            <tr>
                                <th>PET NAME</th>
                                <th>PET IMAGE</th>
                                <th>TERMS & CONDITIONS</th>
                                <th>ADOPTION FESS</th>
                                <th>REMOVE</th>
                                <th colspan='2'>OPERATIONS</th>
                            </tr>
                        </thead>
                        <tbody>";
                        while($row=mysqli_fetch_array($result)){
                            $pet_id=$row['pet_id'];
                            $select_pet="SELECT * FROM `pets` where pet_id='$pet_id' ";
                            $result_pet=mysqli_query($conn,$select_pet);
                            while($row_pet_fee=mysqli_fetch_array($result_pet)){
                
                            $pet_fee=array($row_pet_fee['pet_fee']);
                            $fee_table=$row_pet_fee['pet_fee'];
                            $pet_title=$row_pet_fee['pet_title'];
                            $pet_image=$row_pet_fee['pet_image'];
                            $pet_value=array_sum($pet_fee);
                            $total_fee+=$pet_value;
                       ?>
                        
                        
                        <tr>
                            <td><h5 class="text-uppercase"><?php echo $pet_title; ?></h5></td>
                            <td><img src="./img/<?php echo $pet_image; ?>" alt="" class="select_image"></td>
                            <td><a href="https://awbi.gov.in/uploads/regulations/165597075151Adoption%20of%20community%20animals_0001.pdf"><input type="checkbox">Condition to adopt kenna</a></td>
                            <td>₹ <?php echo $fee_table; ?></td>
                            <td><input type="checkbox" name="remove_pet[]" value="<?php echo $pet_id; ?>"></td>
                            <td>
                            <!-- <a href="#"><button class="bg-primary p-2 text-center border border-0 m-3">Update</button></a> -->
                            <input type="submit" value="Update"class="bg-primary p-2 text-center border border-0 m-3" name="update_selection"/>
                            <input type="submit" value="Remove"class="bg-primary p-2 text-center border border-0 m-3" name="remove_selection"/>
                            <!-- <a href="#"><button class="bg-primary p-2 text-center border border-0 m-3">Remove</button></a> -->
                            </td>
                        </tr>
<?php
                    }
                }}
                else{
                    echo"<h2 class='text-center text-danger'>NO SELECTION AVAILABLE...!!</h2>";
                }
     ?>                   
                    </tbody>
                </table>
                <div>
                <?php
                $get_ip_add = getIPAddress();
                
                $sselect_query="SELECT * FROM `adoption_details` where ip_address='$get_ip_add' ";
                $result=mysqli_query($conn,$sselect_query);
                $result_count=mysqli_num_rows($result);
                if($result_count>0){
                 echo"<input type='submit' value='Select More'class='bg-primary p-2 text-center border border-0 m-3' name='select_more'/>
                 <button class='bg-secondary p-2 text-center border border-0 m-3'><a href='./users_area/final_adoption.php' class='text-dark text-decoration-none'>Final Adoption</a></button>";
                }else{
                    echo"<input type='submit' value='Select More'class='bg-primary p-2 text-center border border-0 m-3' name='select_more'/>";
                }
                
                if(isset($_POST['select_more'])){
                    echo"<script>window.open('index.php','_self')</script>";
                }
                ?>
                    <!-- <a href="adoption.php"><button class="bg-primary p-2 text-center border border-0 m-3">Select more</button></a>
                    <a href="#"><button class="bg-secondary p-2 text-center border border-0 m-3">Final Adoption</button></a> -->
                </div>
            </div>
           </div>
            </div>             
            </div> 
           </form>

    <!-- SELECTED PET-ENDS -->

    <!-- FUNTION TO REMOVE SELECTED PET -->

    <?php
    function remove_selected_pet(){
    global $conn;
    if(isset($_POST['remove_selection'])){
        foreach($_POST['remove_pet'] as $remove_id){
            echo $remove_id;
            $delete_query="DELETE  FROM `adoption_details` where pet_id=$remove_id";
            $run_delete=mysqli_query($conn,$delete_query);
            if($run_delete){
                echo"<script>window.open('select.php','_self')</script>";
            }
        }
    }
    }

   echo $remove_pet=remove_selected_pet();
    
    ?>

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