<?php
// include('./includes/databs.php');
// include('./pet_details.php');

// getting pets
function getpets(){
    global $conn;

    // condition to check isset or not
    if(!isset($_GET['category'])){
        
    $select_query="SELECT * FROM `pets` order by rand() limit 0,6";
                    $result_query=mysqli_query($conn,$select_query);
                    // $row=mysqli_fetch_assoc($result_query);
                    // echo $row['pet_title'];
                    while($row=mysqli_fetch_assoc($result_query)){
                        $pet_id=$row['pet_id'];
                        $pet_title=$row['pet_title'];
                        $pet_description=$row['pet_description'];
                        $pet_image=$row['pet_image'];
                        $category_id=$row['category_id'];
                        $pet_fee=$row['pet_fee'];
                        $pet_keywords=$row['pet_keywords'];
                        echo"<div class='col-md-4'>
                        <div class='pb-5'>
                            <div class='product-item position-relative bg-light d-flex flex-column text-center'>
                                <img class='img-fluid mb-4' src='img/$pet_image' alt='$pet_title'>
                                <h5 class='text-uppercase'>$pet_title</h5>
                                <h6 class='text-primary mb-0'> $pet_keywords</h6>
                                    <div class='btn-action d-flex justify-content-center'>
                                       <a href='#' class='btn btn-secondary'>Add Fav</a>
                                       <a class='btn btn-primary py-2 px-3' href='pet_details.php?pet_id=$pet_id'><i class='bi bi-eye'></i></a>
                                    
                                    </div>
                            </div>
                        </div>
                        </div>";
                    }
}
}

// getting pet by category
function get_unique_category(){
    global $conn;

    // condition to check isset or not
    if(isset($_GET['category'])){
    $category_id=$_GET['category'];    
    $select_query="SELECT * FROM `pets` WHERE category_id=$category_id";
    $result_query=mysqli_query($conn,$select_query);
    $num_of_rows=mysqli_num_rows($result_query);
    if($num_of_rows==0){
        echo"<h2 class='text-center text-danger'>No Pet for this category</h2>";
    }
                    // $row=mysqli_fetch_assoc($result_query);
                    // echo $row['pet_title'];
                    while($row=mysqli_fetch_assoc($result_query)){
                        $pet_id=$row['pet_id'];
                        $pet_title=$row['pet_title'];
                        $pet_description=$row['pet_description'];
                        $pet_image=$row['pet_image'];
                        $category_id=$row['category_id'];
                        $pet_fee=$row['pet_fee'];
                        $pet_keywords=$row['pet_keywords'];
                        echo"<div class='col-md-4'>
                        <div class='pb-5'>
                            <div class='product-item position-relative bg-light d-flex flex-column text-center'>
                                <img class='img-fluid mb-4' src='img/$pet_image' alt='$pet_title'>
                                <h5 class='text-uppercase'>$pet_title</h5>
                                <h6 class='text-primary mb-0'> $pet_keywords</h6>
                                    <div class='btn-action d-flex justify-content-center'>
                                       <a href='#' class='btn btn-secondary'>Add Fav</a>
                                       <a class='btn btn-primary py-2 px-3' href='pet_details.php?pet_id=$pet_id'><i class='bi bi-eye'></i></a>
                                    
                                    </div>
                            </div>
                        </div>
                        </div>";
                    }
}
}


// getting categories for sidenav
function getcategories(){
    global $conn;
    $select_categories="SELECT * FROM `categories`";
                $result_categories=mysqli_query($conn,$select_categories);
                // $row_data=mysqli_fetch_assoc($result_categories);
                // echo $row_data['category_title'];
                while($row_data=mysqli_fetch_assoc($result_categories)){
                    $category_title=$row_data['category_title'];
                    $category_id=$row_data['category_id'];
                    echo "<li class='nav-item mt-4 wd-full border border-5-secondary'>
                    <a href='adoption.php?category=$category_id' class='nav-link text-dark'> $category_title </a>
                    </li>";
                }
}

function get_pets_details(){
    global $conn;

    // condition to check isset or not
    if(isset($_GET['pet_id'])){
    if(!isset($_GET['category'])){
    $pet_id=$_GET['pet_id'];    
    $select_query="SELECT * FROM `pets`  WHERE pet_id=$pet_id";
                    $result_query=mysqli_query($conn,$select_query);
                    // $row=mysqli_fetch_assoc($result_query);
                    // echo $row['pet_title'];
                    while($row=mysqli_fetch_assoc($result_query)){
                        $pet_id=$row['pet_id'];
                        $pet_title=$row['pet_title'];
                        $pet_description=$row['pet_description'];
                        $pet_image=$row['pet_image'];
                        $category_id=$row['category_id'];
                        $pet_fee=$row['pet_fee'];
                        $pet_keywords=$row['pet_keywords'];
                        echo" <div class='container-fluid py-5'>
                        <div class='container'>
                            <div class='row gx-5'>
                                <div class='col-lg-5 mb-5 mb-lg-0' style='min-height: 500px;'>
                                    <div class='position-relative h-100'>
                                        <img class='position-absolute w-100 h-100 rounded' src='img/$pet_image' style='object-fit: cover;'>
                                    </div>
                                </div>
                                <div class='col-lg-7'>
                                    <div class='border-start border-5 border-primary ps-5 mb-5'>
                                        <h3 class='text-primary text-uppercase'>Considering $pet_title for adoption?</h3>
                                        <h1 class='display-5 text-uppercase mb-0'>$pet_title</h1>
                                    </div>
                                    <h4 class='text-body mb-4'>$pet_keywords</h4>
                                    
                                    <h5 class='text-body mb-4'>Adopiton Fee:₹ $pet_fee</h5>
                                    <div class='button my-5 px-2'>
                                    <a href='index.php' class='btn btn-primary'>GO HOME</a>
                                    <a href='adoption.php?select_to_adopt=$pet_id' class='btn btn-secondary'>SELECT TO ADOPT</a>
                                    
                                    </div>
                                    <div class='bg-light p-4'>
                                        <ul class='nav nav-pills justify-content-center mb-3' id='pills-tab' role='tablist'>
                                            <li class='nav-item w-100' role='presentation'>
                                                <button class='nav-link text-uppercase w-100 active' id='pills-1-tab' data-bs-toggle='pill'
                                                    data-bs-target='#pills-1' type='button' role='tab' aria-controls='pills-1'aria-selected='true'>Meet $pet_title</button>
                                                    
                                            </li>
                                           
                                        </ul>
                                        <div class='tab-content' id='pills-tabContent'>
                                            
                                            <div class='tab-pane fade show active' id='pills-1' role='tabpanel' aria-labelledby='pills-1-tab'>
                                                
                                            <p class='mb-0'>$pet_description. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In dictum non consectetur a. Massa tincidunt dui ut ornare lectus sit amet. Amet luctus venenatis lectus magna fringilla urna porttitor rhoncus dolor. Commodo sed egestas egestas fringilla phasellus faucibus scelerisque eleifend. Mi ipsum faucibus vitae aliquet nec ullamcorper. Velit laoreet id donec ultrices tincidunt arcu non sodales. Sit amet facilisis magna etiam tempor. Iaculis at erat pellentesque adipiscing commodo elit at imperdiet. Quam quisque id diam vel quam elementum pulvinar. Quis commodo odio aenean sed adipiscing diam donec adipiscing.</p>
                                            Lorem60</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>";
                    }
}
}
}

// getting ip address

    function getIPAddress() {  
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
//whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}  
// $ip = getIPAddress();  
// echo 'User Real IP Address - '.$ip;


// seleted pet function

function select_pet(){
  if(isset($_GET['select_to_adopt'])){
    global $conn;
    $get_ip_add = getIPAddress();
    $get_pet_id=$_GET['select_to_adopt'];
    $select_query="SELECT * FROM `adoption_details` where ip_address='$get_ip_add' and pet_id=$get_pet_id";
    
   $result_query=mysqli_query($conn,$select_query);
   $num_of_rows=mysqli_num_rows($result_query);
    if($num_of_rows>0){
        echo"<script>alert('This pet is already selected.')</script>";
        echo"<script>window.open('adoption.php','_self')</script>";
    }else{
        $insert_query="INSERT into `adoption_details` (pet_id,ip_address,quantity) values($get_pet_id,'$get_ip_add',0)";
        $result_query=mysqli_query($conn,$insert_query);
        echo"<script>alert('Pet is selected for adoption.')</script>";
        echo"<script>window.open('adoption.php','_self')</script>";
    }
  }
}

//funtions to get selected item number

function select_item(){
    if(isset($_GET['select_to_adopt'])){
        global $conn;
        $get_ip_add = getIPAddress();
        $select_query="SELECT * FROM `adoption_details` where ip_address='$get_ip_add' ";
        
       $result_query=mysqli_query($conn,$select_query);
       $count_select_item=mysqli_num_rows($result_query);
    }
        else{
            global $conn;
            $get_ip_add = getIPAddress();
            $select_query="SELECT * FROM `adoption_details` where ip_address='$get_ip_add' ";
            
           $result_query=mysqli_query($conn,$select_query);
           $count_select_item=mysqli_num_rows($result_query);
        }
        echo $count_select_item;
      }

    //   function for displaying selected pet details in selected section
    
    function selected_section(){
        
        global $conn;
        $get_ip_add = getIPAddress();
        $total_fee=0;
        $select_query="SELECT * FROM `adoption_details` where ip_address='$get_ip_add' ";
        $result=mysqli_query($conn,$select_query);
        while($row=mysqli_fetch_array($result)){
            $pet_id=$row['pet_id'];
            $select_pet="SELECT * FROM `pets` where ip_address='$get_ip_add' ";
            $result_pet=mysqli_query($conn,$select_pet);
            while($row_pet_fee=mysqli_fetch_array($result_pet)){

            $pet_fee=array($row_pet_fee['pet_fee']);
            $fee_table=$row_pet_fee['pet_fee'];
            $pet_title=$row_pet_title['pet_title'];
            $pet_image=$row_pet_image['pet_image'];
            $pet_value=array_sum($pet_fee);
            $total_fee+=$pet_value;
        }
    }
    }

 

?>