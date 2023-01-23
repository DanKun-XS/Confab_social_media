<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">   
    <link rel="stylesheet" href="AuthStyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <title>Confab</title>
    <link rel="icon" type="image/x-icon" href="confab-website-favicon-color.svg">
</head>
<body>
    <div id="main">
        <div id="autBox2">
            <form method="post" action="registration_func.php">
                <h1>Creating an Confab account</h1>
                <label id="p">Email</label>
                <input type="email" name="email">

                
                <label id="p">Username</label>
                <input type="text" name="username">

                <label id="p">Password</label>
                <input type="password" name="password" id="password">

                <input id="regButton" type="submit" name="submit" value="Create an account">
            </form>

            <div id="reg">
                <a href="login.php">Already have an account?</a>
            </div>
        </div>
    </div>
</body>
</html>