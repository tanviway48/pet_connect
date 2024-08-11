<?php
include('../includes/databs.php');
include('../functions/common_funtions.php');

@session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Connect-Login</title>
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
        <h2 class="text-center m-3">User Login</h2>
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
            
            <!-- password -->
            <div class="form-outline mb-4">
                <label for="user_password" class="form-label">Password</label>
                <input type="password" id="user_password" class="form-control bg-light border-5 px-4 m-2" placeholder="Enter password" autocomplete="off" required="required" name="user_password"/>
            </div>
            

            <div class="mt-4 pt-4r">
                <input type="submit" value="Login" class="btn btn-primary w-100 py-3 mt-5" name="user_login">
                <div><p>Not registered yet? <a href="user_registration.php">Register Here</a></p></div>
                <!-- <div><p>Not registered yet? <a href="user_registration.php">Register Here</a></p></div> -->
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

<!-- login logic -->
<?php
// global $conn;
if(isset($_POST['user_login'])){
    $user_username=$_POST['user_username'];
    $user_password=$_POST['user_password'];
    
    

    $select_query="SELECT * FROM user_table WHERE username='$user_username'";
    $result=mysqli_query($conn,$select_query);
    $row_count=mysqli_num_rows($result);
    $row_data=mysqli_fetch_assoc($result);
    $user_ip=getIPAddress();

    
    //selected pet
    $select_query_pet="select * from `adoption_details` where ip_address='$user_ip'";
    $select_pet=mysqli_query($conn,$select_query_pet);
    $row_count_pet=mysqli_num_rows($select_pet);



    if($row_count>0){
        // $_SESSION['username']=$user_username;
        // if(password_verify($user_password, $row_data['user_password'])){
        //     $_SESSION['username']=$user_username;
        //     echo"<script>alert('Login sucessfull')</script>";
            if($row_count==1 and  $row_count_pet==0){
                $_SESSION['username']=$user_username;
                echo"<script>alert('Login sucessfull')</script>";
                echo"<script>window.open('profile.php','_self')</script>";
            }else{
                $_SESSION['username']=$user_username;
                echo"<script>alert('Login sucessfull')</script>";
                echo"<script>window.open('payment.php','_self')</script>";
            }

        // }else{
        //     echo"<script>alert('ERROR!!.. Password does not match.')</script>";
        // }
    }
    else{
        echo"<script>alert('ERROR!!.. Something went wrong')</script>";
    }
}

?>