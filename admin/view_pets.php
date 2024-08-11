<h3 class="text-center ">All Pets</h3>
<table class="table table-bordered mt-5">

<thead class="bg-primary text-dark">
    <tr>
        <th>Pet ID</th>
        <th>Pet Name</th>
        <th>Pet Image</th>
        <th>Adoption Fess</th>
        <th>Adopted or not</th>
        <th>Status</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
</thead>
<tbody class="bg-light text-dark">
    <?php
    $get_pets="Select *from `pets`";
    $result=mysqli_query($conn,$get_pets);
    $number=0;
    while($row=mysqli_fetch_assoc($result)){
        $pet_id=$row['pet_id'];
        $pet_title=$row['pet_title'];
        $pet_image=$row['pet_image'];
        $pet_fee=$row['pet_fee'];
        $status=$row['status'];
        $number++;
        ?>
        <tr class='text-center text-uppercase text-bold'>
        <td><?php echo $number ;?></td>
        <td><h4><?php echo $pet_title ;?></h4></td>
        <td><img src='../img/<?php echo $pet_image;?>' class='pet_img'></td>
        <td><?php echo $pet_fee; ?></td>
        <td>Yes/No</td>
        <td><?php $status ; ?></td>
        <td ><a href='aindex.php?edit_pets=<?php echo $pet_id;?>'><i class='bi bi-pencil  text-dark fs-7 mx-3'>  </i></a></td>
        <td><a href='aindex.php?delete_pets=<?php echo $pet_id;?>'><i class='bi bi-trash-fill  text-dark fs-7 mx-3'>  </i></a></td>
        </tr>
<?php
    }
    ?>
    
</tbody>
</table>