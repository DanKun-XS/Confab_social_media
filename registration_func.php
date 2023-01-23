<?php

include 'db_conn.php';

if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

$username = validate($_POST['username']);
$email = validate($_POST['email']);
$password = validate($_POST['password']);

if(!isset($username, $email, $password)) {
    echo "Empty Field's";
    header("refresh: 2; url = registration.php");
    exit();
}

if (empty($username) || empty($email) || empty($password)) {
    echo "Value Empty";
    header("refresh: 2; url = registration.php");
    exit();
}

if($stmt = $conn->prepare('SELECT userID, password FROM user WHERE username = ?')) {
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $stmt->store_result();

    if($stmt->num_rows>0) {
        echo 'Username Already Exists. Try Again';
        header("refresh: 2; url = registration.php");
        exit();
    }
    else {
        if($stmt = $conn->prepare('INSERT INTO user (username, email, password) VALUES (?, ?, ?)')) {
            $password_hashed = password_hash($password, PASSWORD_DEFAULT);
            $stmt->bind_param('sss', $username, $email, $password_hashed);
            $stmt->execute();

            echo 'Succesfully Registered';
            header("refresh: 2; url = login.php");
            exit();
        }
        else {
            echo 'Error Occured';
        }
    }
}

else {
    echo 'Error Occured';
}
$conn->close();

?>