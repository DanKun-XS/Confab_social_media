<?php
include "db_conn.php";

if(isset($_POST['update'])) {
    $username = $_POST['username'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $registration_date = $_POST['registration_date'];
    $administration_rights = $_POST['administration_rights'];
    $age = $_POST['age'];
    $hobby = $_POST['hobby'];
    $birthdate = $_POST['birthdate'];
    $description = $_POST['description'];
    $image = $_POST['image'];
    $gender = $_POST['gender'];

    $sql = "UPDATE 'user' SET 'username' = $username,'firstname' = $firstname,'lastname' = $lastname,'email' = $email,'password' = $password,'gender' = $gender,'age' = $age,'hobby' = $hobby,'birthdate' = $birthdate,'administration_rights' = $administration_rights,'description' = $description,'image' = $image";

    $result = $conn->query($sql);

    if($result == TRUE) {
        echo "Record Updated Succesfully";
    }
    else {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}

if(isset($_GET['userID'])) {
    $userID = $_GET['userID'];

    $sql = "SELECT * FROM 'user' WHERE 'userID'='$userID'";

    $result = $conn->query($sql);

    if($reault->num_row > 0) {
        while ($row = $result->fetch_assoc()) {
            $username = $row['username'];
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $email = $row['email'];
            $password = $row['password'];
            $registration_date = $row['registration_date'];
            $administration_rights = $row['administration_rights'];
            $age = $row['age'];
            $hobby = $row['hobby'];
            $birthdate = $row['birthdate'];
            $description = $row['description'];
            $image = $row['image'];
            $gender = $row['gender'];
        }
    }

}