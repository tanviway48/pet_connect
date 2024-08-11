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
    <title>Pet Connect- Adopted pet</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="../lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="style.css" rel="stylesheet">
    <style>
        img{
            width:100%;
        }
    </style>
</head>

<!-- php code to acess user id -->

<?php

$user_ip=getIPAddress();
$get_user="SELECT * FROM `user_table`  WHERE user_ip='$user_ip'";
$result=mysqli_query($conn,$get_user);
$run_query=mysqli_fetch_assoc($result);
$user_id=$run_query['user_id'];

?>
<body>
    <div class="container mt-5">
        <h2 class="text-center text-primary">ADOPTION PROCESS</h2>
        <div class="row d-flex justify-content-center align-items-center mt-5">
            <div class="col-md-6">
            <a href="https://www.paypal.com"><img src="../img/stray01.jpg" alt="" class="mx-5"></a>
            </div>
            <div class="col-md-6">
            <a href="adopted_pet.php?user_id=<?php echo $user_id;?>"><h2 class="text-center">Payment</h2></a>
            </div>
            
        </div>
    </div>





     <!-- JavaScript Libraries -->
     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="main.js"></script>
</body>
</html>