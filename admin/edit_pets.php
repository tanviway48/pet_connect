<?php

if(isset($_GET['edit_pets'])){
    $edit_id=$_GET['edit_pets'];
    // echo $edit_id;
    $get_data="Select * from `pets` where pet_id=$edit_id ";
    $result=mysqli_query($conn,$get_data);
    $row=mysqli_fetch_assoc($result);
    $pet_title=$row['pet_title'];
    // echo $pet_title;
    $pet_description=$row['pet_description'];
    $pet_keywords=$row['pet_keywords'];
    $category_id=$row['category_id'];
    $pet_image=$row['pet_image'];
    $pet_fee=$row['pet_fee'];



    //fetching categories

    $select_category="Select * from `categories` where category_id=$category_id";
    $result_category=mysqli_query($conn,$select_category);
    $row_category=mysqli_fetch_assoc($result_category);
    $category_title=$row_category['category_title'];


}

?>
<div class="container mt-5">
    <h1 class="text-center">Edit Pet Info</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-outline w-50 m-auto mb-4">
            <label for="pet_title" class="form-label">Pet title</label>
            <input type="text" id="pet_title" value="<?php echo $pet_title; ?>" name="pet_title"  class="form-control" required="required">
        </div>

        <div class="form-outline w-50 m-auto mb-4">
            <label for="pet_description" class="form-label">Pet description</label>
            <input type="text" id="pet_description" value="<?php echo $pet_description; ?>" name="pet_description" class="form-control" required="required">
        </div>

        <div class="form-outline w-50 m-auto mb-4">
            <label for="pet_keywords" class="form-label">Pet Keywords</label>
            <input type="text" id="pet_keywords" value="<?php echo $pet_keywords; ?>" name="pet_keywords" class="form-control" required="required">
        </div>
         
        <div class="form-outline w-50 m-auto mb-4">
        <label for="pet_category" class="form-label">Pet Category</label>
            <select name="pet_category" class="form-select">
            <option value="<?php echo $category_title ;?>"><?php echo $category_title;?></option>
            <?php
            // $select_category_all="Select * from `categories`" ;
            // $result_category=mysqli_query($conn,$select_category_all);
            // while ($row_category_all=mysqli_fetch_assoc($result_category_all)){
            //     $category_title=$row_category_all['category_title'];
            //     $category_id=$row_category_all['category_id'];
            //     echo "<option value='$category_id'>$category_title</option>";
            // }
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
                <!-- <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="">4</option>
                <option value="">5</option> -->
            </select>
        </div>

        <div class="form-outline w-50 m-auto mb-4">
            <label for="pet_image" class="form-label">Pet Image</label>
            <div class="d-flex">
            <input type="file" id="pet_image" name="pet_image" class="form-control w-90 m-auto" required="required">
            <img src="../img/<?php echo $pet_image ;?>" alt="" class="pet_img1">
            </div>
        </div>

        <div class="form-outline w-50 m-auto mb-4">
            <label for="pet_fee" class="form-label">Pet Fees</label>
            <input type="text" id="pet_fee" value="<?php echo $pet_fee; ?>" name="pet_fee" class="form-control" required="required">
        </div>

        <div class="form-outline mb-4 w-50 m-auto">
            
            <input type="submit" name="edit_pet" class="btn btn-primary mb-3 px-3" value="Upadte ">
        </div>
        
    </form>
</div>

<?php

if(isset($_POST['edit_pet'])){

        global $conn;
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
            $update_pets="UPDATE `pets` set pet_title='$pet_title',pet_description='$pet_description',pet_keywords='$pet_keywords',category_id='$category_id',pet_image='$pet_image',pet_fee='$pet_fee',date=NOW() where pet_id=$edit_id";
            $result_update=mysqli_query($conn,$update_pets);
            if($result_update){
                echo"<script>alert('Sucessfully Updated the PET information')</script>";
                echo"<script>window.open('./insert_pets.php','_self')</script>";
            }
    
        }
    

}

?>

