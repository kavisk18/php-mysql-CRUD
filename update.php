<?php
       require_once('config/connect.php');

       $first_name = $_POST['first_name'];
       $last_name = $_POST['last_name'];
       $email = $_POST['email'];
       $cpass = $_POST['cpass'];
       $phone_no = $_POST['phone_no'];
       $address = $_POST['address'];
       $city = $_POST['city'];
       $state = $_POST['state'];
       $status = $_POST['status'];
       $id = $_GET['id'];

//print_r($_POST); exit;

$qry="UPDATE `user` 
        SET `first_name`='$first_name',
        `last_name`='$last_name',
        `email`='$email',
        `cpass`='$cpass',
        `phone_no`='$phone_no',
        `address`='$address',
        `city`='$city',
        `state`='$state',
        `status`='$status'
         WHERE id = '$id'";

$row = mysqli_query($con, $qry);

if($row ==1){
    header('Location: index.php?formstatus=updated');

} else{
    echo "Error please try again";
}

?>