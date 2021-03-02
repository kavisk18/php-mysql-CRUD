<?php
  
require_once('../config/connect.php');

    $validateValue = $_REQUEST['fieldValue'];
    $validateId = $_REQUEST['fieldId'];
    $validateError = "This Email ID is already Used";
    $validateSuccess = "This Email ID is Allowed";

   $qry="select * from user where email='$validateValue'";
   //$qry="select * from register_form where email='kavisk18@gmail.com'";
    $res=mysqli_query($con,$qry);
    $result=mysqli_num_rows($res);
    //print_r($result); exit; 
     /* RETURN VALUE */
    $arrayToJs = array();
    $arrayToJs[0] = $validateId;
    if ($result < 1) {        // validate??
        $arrayToJs[1] = true;            // RETURN TRUE
        echo json_encode($arrayToJs);            // RETURN ARRAY WITH success
    } else {
        for ($x = 0; $x < 1000000; $x++) {
            if ($x == 990000) {
                $arrayToJs[1] = false;
                echo json_encode($arrayToJs);        // RETURN ARRAY WITH ERROR
            }
        }

    }


    ?>