<?php
include('../includes/databs.php');

if(isset($_POST['insert_pet'])){
    $pet_title=$_POST['pet_title'];
    $pet_description=$_POST['pet_description'];
    $pet_keywords=$_POST['pet_keywords'];
    $pet_category=$_POST['pet_category'];
    $pet_fee=$_POST['pet_fee'];
    $pet_status='true';
    
    //acessing image
    $pet_image=$_FILES['pet_image']['name'];

    //acessing tmp image name
    $temp_image=$_FILES['pet_image']['tmp_name'];

    //checking empty conditions
    if($pet_title==''or $pet_description==''or $pet_keywords==''or $pet_category==''or $pet_fee==''or $pet_image==''){
        echo"<script>alert('All feilds are required.Do not leave any of them empty.')</script>";
        exit();
    }else{
        move_uploaded_file($temp_image,"../img/$pet_image");

        //insert query
        $insert_pets="INSERT INTO `pets`(pet_title,pet_description,pet_keywords,category_id,pet_image,pet_fee,date,status) values('$pet_title','$pet_description','$pet_keywords','$pet_category','$pet_image','$pet_fee',NOW(),'$pet_status')";
        $result_query=mysqli_query($conn,$insert_pets);
        if($result_query){
            echo"<script>alert('Sucessfully Added the PET')</script>";
        }

    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Pets-Admin DashBoard</title>


    <link href="img/favicon.ico" rel="icon">

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

    <!-- Template Stylesheet -->
    <link href="style.css" rel="stylesheet">
</head>
<body class="bg-light">
   <div class="container mt-3">
    <h1 class="text-center">PET DETAILS</h1>
    <!-- PET FORM-Starts -->

    
    <form action="" method="post" enctype="multipart/form-data">
        <!-- Name of pet -->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="pet_title" class="form-label">Pet Title</label>
            <input type="text" name="pet_title" id="pet_title" class="form-control" placeholder="Enter PET name" autocomplete="off" required="require">
        </div>

        <!-- description of pet -->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="pet_description" class="form-label">Pet Description</label>
            <input type="text" name="pet_description" id="pet_description" class="form-control" placeholder="Enter PET description" autocomplete="off" required="require">
        </div>
        <!-- Key features -->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="pet_keywords" class="form-label">Pet Keywords</label>
            <input type="text" name="pet_keywords" id="pet_keywords" class="form-control" placeholder="Enter PET keywords" autocomplete="off" required="require">
        </div>
        <!-- Categories -->
        <div class="form-outline mb-4 w-50 m-auto">
        <select name="pet_category" id="" class="form-select">
            <option value="">Select a category</option>
                <?php
                $select_query="SELECT * FROM `categories`";
                $result_query=mysqli_query($conn,$select_query);
                // $row_data=mysqli_fetch_assoc($result_categories);
                // echo $row_data['category_title'];
                while($row_data=mysqli_fetch_assoc($result_query)){
                    $category_title=$row_data['category_title'];
                    $category_id=$row_data['category_id'];
                    echo "<option value='$category_id'> $category_title</option>";
                }
                ?>
            <!-- <option value="">category 1</option> -->
            <!-- <option value="">category 2</option> -->
            <!-- <option value="">category 3</option> -->
        </select>
        </div>
        <!-- PET image -->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="pet_image" class="form-label">Pet image</label>
            <input type="file" name="pet_image" id="pet_image" class="form-control"  autocomplete="off" required="require">
        </div>

        <!-- PET adoption fee -->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="pet_fee" class="form-label">Pet Adoption fee</label>
            <input type="text" name="pet_fee" id="pet_fee" class="form-control" placeholder="Enter PET adoption fee" autocomplete="off" required="require">
        </div>

        <!-- Submit -->
        <div class="form-outline mb-4 w-50 m-auto">
            
            <input type="submit" name="insert_pet" class="btn btn-primary mb-3 px-3" value="Add this PET ">
        </div>

    </form>
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