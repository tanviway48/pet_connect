<?php

if(isset($_GET['delete_pets'])){

$delete_id=$_GET['delete_pets'];
// echo $delete_id;

// delete query

$delete_pet="Delete from `pets` where pet_id=$delete_id";
$result_pet=mysqli_query($conn,$delete_pet);
if($result_pet){
    echo"<script>alert('Sucessfully DELETED the PET information')</script>";
    echo"<script>window.open('./aindex.php','_self')</script>";
}

}

?>