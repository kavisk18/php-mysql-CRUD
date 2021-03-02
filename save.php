<?php
    require_once('config/connect.php');
    print_r($_POST);
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $cpass = $_POST['cpass'];
    $phone_no = $_POST['phone_no'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $status = $_POST['status'];

   $qry = "INSERT INTO `user`(`first_name`, `last_name`, `email`, `cpass`, `phone_no`,`address`, `city`, `state`, `status`) 
    VALUES ('$first_name','$last_name','$email','$cpass','$phone_no','$address','$city','$state','$status')";
    $exec = mysqli_query($con, $qry);
    if($exec == 1){
        header('Location: index.php?status=true');
    } else {
        header('Location: index.php?status=false');
    }

?>