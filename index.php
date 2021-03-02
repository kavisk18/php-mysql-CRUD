<?php
    require_once('config/connect.php');

    $qry = "SELECT  `id`,`first_name`, `last_name`, `email`, `cpass`, `phone_no`,`address`,`city`,`state`, `status` FROM `user`";

    $exec = mysqli_query($con, $qry);

    while($row = mysqli_fetch_assoc($exec)){
        $res[] = [
            'id' => $row['id'],
            'first_name' => $row['first_name'],
            'last_name' => $row['last_name'],
            'email' => $row['email'],
            'phone_no' => $row['phone_no'],
            'address' => $row['address'],
            'city' => $row['city'],
            'state' => $row['state'],
            'status' => $row['status'],
        ];  
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12  mt-4">
                <a class="btn btn-success mb-4" href="registration.php">Register</a>
                </div>
        </div>
        <div class="row">
            <div class="col-12 mt-2">
                <?php
                    if(isset($_GET['formstatus'])){
                         if($_GET['formstatus'] == 'updated'){
                            ?>
                                <div class="alert alert-success">Updated Successfully....</div>
                            <?php
                         } else if($_GET['formstatus'] == 'deleted') {
                            ?>
                            <div class="alert alert-success">Deleted Successfully....</div>
                            <?php
                         } else {
                            ?>
                            <div class="alert alert-success">Inserted Successfully....</div>
                            <?php
                         }   
                    }
                 ?>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>email</th> 
                            <th>Phone</th>
                            <th>address</th>
                            <th>City</th>
                            <th>state</th>
                            <th>status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php
                            foreach($res as $v){
                                ?> 
                                    <tr>
                                        <td><?php echo $v['first_name'] ?></td>
                                        <td><?php echo $v['last_name'] ?></td>
                                        <td><?php echo $v['email'] ?></td>
                                        <td><?php echo $v['phone_no'] ?></td>
                                        <td><?php echo $v['address'] ?></td>
                                        <td><?php echo $v['city'] ?></td>
                                        <td><?php echo $v['state'] ?></td>
                                        <td><?php echo $v['status'] ?></td>
                                        <td>
                                    <a href="edit_register.php?edit_id=<?php echo $v['id']; ?>" class="btn btn-info btn-sm">Edit</a>
                                    <a href="delete.php?delete_id=<?php echo $v['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                                    </tr>
                                <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="assets/jq/jquery-3.5.1.min.js"></script>
</body>
</html>