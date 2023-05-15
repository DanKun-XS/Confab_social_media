<?php
include "db_conn.php";

$sql = "SELECT * FROM user";

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>ADMIN</title>
</head>
<body>
    <div class="container">
        <h2>users</h2>
    <table class="table">
        <thead>
            <tr>
                <th>userID</th>
                <th>Username</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Password</th>
                <th>Registration_date</th>
                <th>Administration_rights</th>
                <th>Age</th>
                <th>Hobby</th>
                <th>Birthdate</th>
                <th>Description</th>
                <th>Image</th>
                <th>Genfer</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if ($result->num_rows > 0) {
                    while ($row = $result0->fetch_assoc()) {
            ?>

                        <tr>
                            <td><?php echo $row['userID']; ?> </td>
                            <td><?php echo $row['username']; ?> </td>
                            <td><?php echo $row['firstname']; ?> </td>
                            <td><?php echo $row['lastname']; ?> </td>
                            <td><?php echo $row['email']; ?> </td>
                            <td><?php echo $row['password']; ?> </td>
                            <td><?php echo $row['registration_date']; ?> </td>
                            <td><?php echo $row['administration_rights']; ?> </td>
                            <td><?php echo $row['age']; ?> </td>
                            <td><?php echo $row['hobby']; ?> </td>
                            <td><?php echo $row['birthdate']; ?> </td>
                            <td><?php echo $row['description']; ?> </td>
                            <td><?php echo $row['image']; ?> </td>
                            <td><?php echo $row['genfer']; ?> </td>
                            <td> <a class="btn btn-info" href="admin_update.php?userID=<?php echo $row['userID']; ?>">
                            Edit</a>&nbsp; <a class="btn btn-danger" href="felete.php?userID=<?php echo $row['userID']; ?>">
                            Delete</a></td>
                        </tr>
                    <?php  }
                }   
                ?>
            
        </tbody>
    </table>
    </div>
    
</body>
</html>