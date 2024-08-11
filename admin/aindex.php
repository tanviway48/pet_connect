<?php
include('../includes/databs.php');
include('../functions/common_funtions.php');
// session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Connect -Admin Panel</title>

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="../lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Font awesome link -->
    <script src="https://kit.fontawesome.com/5b2a8bcc87.js" crossorigin="anonymous"></script>

    <!-- Template Stylesheet -->
    <link href="style.css" rel="stylesheet">
    <style>
    .admin_img{
        width: 100px;
        object-fit: contain;
    }

    .pet_img{
        width:40%;
        object-fit:contain;
    }

    .pet_img1{
        width:20%;
        object-fit:contain;
        margin-left:10px;
        border:100px;
    }
    </style>
</head>
<body>
    <!-- nav bar starts -->

    <div class="container-fluid p-0">
        <!-- first -->
        <nav class="navbar navnar-expand-lg navbar-light bg-primary">
            <div class="container-fluid">
            <a href="aindex.php" class="navbar-brand ms-lg-5">
               <h1 class="m-0 text-uppercase text-dark"><i class="bi bi-shop fs-1 text-light me-3"></i>Pet Connect</h1>
            </a>
            <nav class="navbar navnar-expand-lg">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="" class="nav-link">Welcome Guest</a>
                </ul>
            </nav>
            </div>
        </nav>
        <!-- second -->
        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>
        <!-- third -->
        <div class="row">
            <div class="col-md-12 bg-secondary p-4 d-flex align-items-center">
                <div class="p-3">
                    <a href=""><img src="../img/testimonial-1.jpg" alt="" class="admin_img"></a>
                    <p class=" text-center text-dark">Admin Name</p>
                </div>
                <div class="button text-center ">
                    <button><a href="insert_pets.php" class="nav-link text-dark bg-secondary my-1">Add Pets</a></button>
                    <button><a href="aindex.php?view_pets" class="nav-link text-dark bg-secondary my-1">View Pets</a></button>
                    <button><a href="aindex.php?insert_c" class="nav-link text-dark bg-secondary my-1">Insert Categories</a></button>
                    <button><a href="" class="nav-link text-dark bg-secondary my-1">View Categories</a></button>
                    <button><a href="" class="nav-link text-dark bg-secondary my-1">All Adoptions</a></button>
                    <button><a href="" class="nav-link text-dark bg-secondary my-1">All Payments</a></button>
                    <button><a href="" class="nav-link text-dark bg-secondary my-1">Users List</a></button>
                    <button class="my-3"><a href="" class="nav-link text-dark bg-secondary my-1">LOGOUT</a></button>
                    <!-- <button><a href="" class="nav-link text-dark bg-secondary my-1"></a></button> -->
                    <!-- <button><a href="" class="nav-link text-dark bg-secondary my-1"></a></button> -->
                
                </div>
            </div>
        </div>
    </div>
    <!-- four -->
    <div class="container my-5">
        <?php
        if(isset($_GET['insert_c']))
            {
                include('insert_c.php');
            }
        if(isset($_GET['view_pets']))
            {
                include('view_pets.php');
            }
        if(isset($_GET['edit_pets']))
            {
                include('edit_pets.php');
            }
        if(isset($_GET['delete_pets']))
            {
                include('delete_pets.php');
            }
        
        ?>
    </div>
    <!-- nav bar ends -->




<!-- Back to Top -->
<!-- <a href="#" class="btn btn-primary py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a> -->


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