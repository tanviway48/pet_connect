<?php
// $hname = 'localhost';
// $uname = 'root';
// $pass  = '';
// $db = 'petconnect01';

// $con = mysqli_connect($hname,$uname,$pass,$db);

// if(!$con){
//     die("Cannot connect to data base".mysqli_connect_error());
// }

// function filteration($data){
//     foreach($data as $key => $value){
//         $data[$key] = trim($value);
//         $data[$key] = stripcslashes($value);
//         $data[$key] = htmlspecialchars($value);
//         $data[$key] = strip_tags($value);
//     }
//     return $data;
// }

// function select($sql,$values,$datatypes){
//     $con = $GLOBALS['con'];
//     if($stmt = mysli_prepare($con,$sql)){
//          mysqli_blind_param($stmt,$datatypes,...$values);
//          if(mysqli_stmt_execute($stmt)){
//             $res = mysqli_stmt_get_result($stmt);;
//             mysqli_stmt_close($stmt);
//             return $res;
//          }
//          else{
//             mysqli_stmt_close($stmt);
//             die("Query canot executed-Select");
//         }
        
//     }
//     else{
//         die("Query canot Prepared-Select");
//     }
// }

// funtion alert($type,$msg){
//     echo <<<alert
//       <div class="alert alert-warning alert-dismissible fade show custom-alert" role="alert">
//          <strong class="me-3"> $msg </strong> 
 
//          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
//      </div>
//   $alert;
// } 
?>
<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "petconnect01";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}

?>