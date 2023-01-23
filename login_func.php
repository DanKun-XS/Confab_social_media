<?php
session_start();
include 'db_conn.php';

if(isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

$username = validate($_POST['username']);
$password = validate($_POST['password']);

if(empty($username)) {
    header('Location: login.php?erro=Username is required');
    exit();
}
else if (empty($password)) {
    header('Location: login.php?erro=Password is required');
    exit();
}

$sql = "SELECT * FROM user WHERE username='$username'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    $hash = $row['password'];
    if ($row['administration_rights'] === 1 && password_verify($password, $hash)) {
        echo 'Logged In as Administraitor!';
        $_SESSION['userID'] = $row['userID'];
        $_SESSION['username'] = $row['username'];
        header('Location: admin.php');
        exit();
    }
    else if (password_verify($password, $hash)) {
        echo 'Logged In!';
        $_SESSION['userID'] = $row['userID'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['firstname'] = $row['firstname'];
        $_SESSION['lastname'] = $row['lastname'];
        $_SESSION['age'] = $row['age'];
        $_SESSION['hobby'] = $row['hobby'];
        $_SESSION['birthdate'] = $row['birthdate'];
        $_SESSION['description'] = $row['description'];
        $_SESSION['image'] = $row['image'];
        $_SESSION['gender'] = $row['image'];

        header('Location: index.php');
        exit();
    }
    else {
        header('Location: login.php?error=Incorrect Username or Password');
        exit();
    }
}
else {
    header('Location: login.php');
    exit();
}
?>