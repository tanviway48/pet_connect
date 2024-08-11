<?php
include('../includes/databs.php');
if(isset($_POST['insert_cat'])){
    $category_title=$_POST['cat_title'];

    //select data from database
    $select_query=" SELECT * FROM `categories` WHERE category_title='$category_title'";
    $result_select=mysqli_query($conn,$select_query);
    $number=mysqli_num_rows($result_select);
    if($number>0){
        echo"<script>alert('This category is already present !!')</script>";
    }
    else{
        $insert_query="insert into categories (category_title) values ('$category_title')";
    $result=mysqli_query($conn,$insert_query);
    if($result){
        echo"<script>alert('Category has been added sucessfully')</script>";

    }
    }

    
}
?>
<h2>Insert Categories</h2>
<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-2">
    <!-- <span class="input-group-text bg-primary" id="basic-addon1"></span> -->
    <input type="text" class="form-control text-dark" name="cat_title" placeholder="Insert Categories" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <div class="input-group w-10 mb-2 m-auto">
    <!-- <span class="input-group-text bg-primary" id="basic-addon1"><i class="fa-solid fa-reciept"></i></span> -->
    <input type="submit" class=" bg-primary text-dark p-2 my-3 border-0" name="insert_cat" value="Insert Categories"  >
    <!-- <button class=" bg-primary text-dark p-2 my-3 border-0">Insert Categories</button> -->
    </div>
</form>