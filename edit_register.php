<?php
    require_once('config/connect.php');
    
    $edit_id = $_GET['edit_id'];

    $qry = "SELECT `first_name`, `last_name`, `email`, `cpass`, `phone_no`, `address`,`city`, `state`, `status` FROM `user` WHERE id = '$edit_id'";

    $exec = mysqli_query($con, $qry);

    $res = mysqli_fetch_object($exec);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendors/validation-engine/css/validationEngine.jquery.css">
</head>
<body>

<div class="container col-lg-7">
        <form id="form" method="post" action="update.php?edit_id=<?php echo $edit_id; ?>">
            <div class="card mt-5">
                <div class="card-header bg-warning text-white"><b>UPDATE REGISTRATION FORM</b></div>
                    <div class="card-body ">
                        <div class= row>
                            <div class="col-lg-6"> 
                                <div class="form-group">
                                    <label for="name">First Name:</label>
                                    <input type="text" id="first_name" name="first_name" value="<?php echo $res->first_name; ?>" class="form-control validate[required]">
                                </div> 
                            </div>
                            <div class="col-lg-6"> 
                                <div class="form-group">
                                    <label for="name">Last Name:</label>
                                    <input type="text" id="last_name" name="last_name" class="form-control validate[required]">
                                </div> 
                            </div>
                        </div>
                        <div class= row>
                             <div class="col-lg-6"> 
                                <div class="form-group">
                                    <label for="email">email id:</label>
                                    <input type="text" id="email" name="email" class="form-control validate[required,ajax[ajaxEmailCheck]]">
                                </div> 
                             </div>
                        <div class="col-lg-6"> 
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" id="cpass" name="cpass" class="form-control validate[required]">
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="phone number">Phone number:</label>
                            <input type="number" id="phone_no" name="phone_no" value="<?php echo $res->phone_no; ?>" class="form-control col-lg-6 validate[required,ajax[ajaxPhoneCheck]]">
                        </div> 
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <textarea id="address" name="address" class="form-control col-lg-12 validate[required]"> </textarea> 
                        </div>
                        <div class= row>
                        <div class="col-lg-6"> 
                        <div class="form-group">
                            <label for="city">City:</label>
                                <select id="city"  name="city" class="form-control col-lg-12 validate[required]">
                                    <option value="">Select city</option>
                                    <option value="cbe">Coimbatore</option>
                                    <option value="chennai">Chennai</option>
                                    <option value="kochi">Kochi</option>
                                    <option value="Thiruvananthapuram">Thiruvananthapuram</option>
                                </select>                              
                        </div>    
                        </div>
                        <div class="col-lg-6"> 
                        <div class="form-group ">
                            <label for="state">State:</label>
                                <select id="state"  name="state" class="form-control col-lg-12 validate[required]">
                                    <option value="">Select state</option>
                                    <option value="Tamil nadu">Tamil nadu</option>
                                    <option value="kerala">Kerala</option>
                                </select> 
                        </div>                             
                        </div>    
                        </div>
                        <div class="form-group">
                            <label for="status">Status:</label>
                                <select id="status"  name="status" class="form-control col-lg-6 validate[required]">
                                    <option value="">Status</option>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>                              
                        </div>           
                        <div class="form-group "> 
                            <input type="submit" class="btn btn-primary" value="Update">
                        </div>
                    </div>
            </div>
        </form>
    </div>
    <script src="assets/jq/jquery-3.5.1.min.js"></script>
    <script src="assets/vendors/validation-engine/js/languages/jquery.validationEngine-en.js"></script>
    <script src="assets/vendors/validation-engine/js/jquery.validationEngine.min.js"></script>
    <script>
        $(function() {
            $("#form").validationEngine();
            $('#city').val("<?php echo $res->city; ?>");
            $('#state').val("<?php echo $res->state; ?>");
            $('#status').val("<?php echo $res->status; ?>");
        })
        </script>
</body>
</html>