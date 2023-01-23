<?php
    include "db_conn.php";

    if(isset($_POST['submit'])) {
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
    }

    $sql = "INSERT INTO 'user' ('username','firstname','lastname','email','password','gender','age','hobby','birthdate','administration_rights','description','image') VALUES ('$username','$firstname','$lastname','$email','$password','$gender','$age','$hobby','$birthdate','$administration_rights','$description','$image')";

    $result = $conn->query($sql);

    if($result == TRUE) {
        echo "New record created succesfully";
    }
    else {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
</head>
<body>
    <h2> Signup Form </h2>

    <form action="">
        <fieldset>
        <legend>Personal Information</legend>
        Username:<br>
        <input type="text" name="username">
        <br>
        Firstname:<br>
        <input type="text" name="firstname">
        <br>
        Lastname:<br>
        <input type="text" name="lastname">
        <br>
        Email:<br>
        <input type="email" name="email">
        <br>
        Password:<br>
        <input type="text" name="password">
        <br>
        Registration_date:<br>
        <input type="date" name="registration_date">
        <br>
        Administration_rights:<br>
        <input type="int" name="administration_rights">
        <br>
        Age:<br>
        <input type="int" name="age">
        <br>
        Hobby:<br>
        <input type="text" name="hobby">
        <br>
        Birthdate:<br>
        <input type="date" name="birthdate">
        <br>
        Description:<br>
        <input type="text" name="description">
        <br>
        Image:<br>
        <input type="image" name="hobby">
        <br>
        Gender:<br>
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female
        <br><br>
        <input type="submit" name="submit" value="submit">
        </fieldset>
    </form>
    
</body>
</html>