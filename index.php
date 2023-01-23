<?php
session_start();

if (isset($_SESSION['userID'])) {
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="chat.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
        <title>Confab</title>
        <link rel="icon" type="image/x-icon" href="confab-website-favicon-color.svg">
    </head>
    <body>
        <div class="d-flex h-100">
            <ul class="d-flex flex-column">
                <img src="confab-low-resolution-logo-color-on-transparent-background.svg" alt="logo" class="p-3">
                <li><a href="index.php" class="active mt-2">Home</a></li>
                <li><a href="#">Friends</a></li>
                <li><a href="#">Activities</a></li>
                <li><a href="#">Rooms</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="logout.php" class="">Logout</a></li>
            </ul>

            <div id="main_content" class="flex-grow-1">
                <div id="box" class="shadow rounded-4">
                    <h1>Hello, <?php echo $_SESSION['username']; ?></h1>
                </div>

            </div>
        </div>
    </body>
    </html>

    <?php
}
else {
    header("Location: index.html");
    exit();
}
?>