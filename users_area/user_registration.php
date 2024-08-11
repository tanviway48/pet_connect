<?php
include('../includes/databs.php');
include('../functions/common_funtions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

</head>
<body>
        <!-- signup starts -->
        <div class="container-fluid my-3 align-items-center">
        <h2 class="text-center m-3">User Registration</h2>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-12 col-xl-6">
            <form action="" class=" align-items-center border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;" method="post">
            <!-- <div class="form-group ">
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
            </div> -->
            <!-- username -->
            <div class="form-outline mb-4">
                <label for="user_username" class="form-label">Username</label>
                <input type="text" id="user_username" class="form-control bg-light border-5 px-4 m-2" placeholder="Enter username" autocomplete="off" required="required" name="user_username"/>
            </div>
            <!-- email -->
            <div class="form-outline mb-4">
                <label for="user_email" class="form-label">Email</label>
                <input type="email" id="user_email" class="form-control bg-light border-5 px-4 m-2" placeholder="Enter email" autocomplete="off" required="required" name="user_email"/>
            </div>
            <!-- password -->
            <div class="form-outline mb-4">
                <label for="user_password" class="form-label">Password</label>
                <input type="password" id="user_password" class="form-control bg-light border-5 px-4 m-2" placeholder="Enter password" autocomplete="off" required="required" name="user_password"/>
            </div>
            <!-- confirm password -->
            <div class="form-outline mb-4">
                <label for="conf_user_password" class="form-label">Confirm password</label>
                <input type="password" id="conf_user_password" class="form-control bg-light border-5 px-4 m-2" placeholder="Enter confirm password" autocomplete="off" required="required" name="conf_user_password"/>
            </div>
            <!-- address -->
            <div class="form-outline mb-4">
                <label for="user_address" class="form-label">Address</label>
                <input type="text" id="user_address" class="form-control bg-light border-5 px-4 m-2" placeholder="Enter address" autocomplete="off" required="required" name="user_address"/>
            </div>
            <!-- contact -->
            <div class="form-outline mb-4">
                <label for="user_contact" class="form-label">Contact</label>
                <input type="text" id="user_contact" class="form-control bg-light border-5 px-4 m-2" placeholder="Enter Contact" autocomplete="off" required="required" name="user_contact"/>
            </div>

            <div class="mt-4 pt-4r">
                <input type="submit" value="Register" class="btn btn-primary w-100 py-3 mt-5" name="user_register">
                <div><p>Already Registered <a href="user_login.php">Login Here</a></p></div>
            </div>
        </form>
        
    </div>
            </div>
        </div>
    
    


    <!-- signup ends  -->
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

<!-- php code -->
<?php

if(isset($_POST['user_register'])){
    $user_username=$_POST['user_username'];
    $user_email=$_POST['user_email'];
    $user_password=$_POST['user_password'];
    $conf_user_password=$_POST['conf_user_password'];
    $hash_password=password_hash($user_password,PASSWORD_DEFAULT);
    $user_address=$_POST['user_address'];
    $user_contact=$_POST['user_contact'];
    $user_ip=getIPAddress();
    // select query

    $select_query=" select * from user_table where username='$user_username' or user_email=' $user_email' ";
    $result=mysqli_query($conn,$select_query);
    $rows_count=mysqli_num_rows($result);
    if($rows_count>0){
        echo"<script>alert('This username or email is already taken')</script>";
    }else if($user_password!= $conf_user_password){

        echo"<script>alert('Passwords does not match with confirm password')</script>";

    }else{
         
    //insert query
    $insert_query="INSERT INTO `user_table`(username,user_email,user_password,user_ip,user_address,user_mobile) values('$user_username',' $user_email',' $hash_password',' $user_ip','$user_address',' $user_contact')";
    $sql_execute=mysqli_query($conn,$insert_query);
    echo"<script>alert('You have registered sucessfully..!')</script>";
    }

    // selecting selected pet
    $select_selected_pet="Select * from `adoption_details` where ip_address='$user_ip'";
    $result_select=mysqli_query($conn,$select_selected_pet);
    $rows_count=mysqli_num_rows($result_select);
    if($rows_count>0){
        $_SESSION['username']= $user_username;
        echo"<script>alert('You have selected pets')</script>"; 
        echo"<script>window.open('final_adoption.php','_self')</script>";
    }else{
        echo"<script>window.open('adoption.php','_self')</script>";
    }

   
    
}

?>
