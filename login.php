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
        <div id="autBox">
            <form action="login_func.php" method="post">
                <h1>Sign in to Confab</h1>
                <label id="p">Username</label>
                <input type="text" name="username">

                <div id="Password">
                    <label id="p" style="flex-grow: 1">Password</label>
                    <label style="width: max-content;">
                        <a href="" id="p" class="link-warning">Forgot password?</a>
                    </label>
                </div>
                <input type="password" name="password" id="password">

                <input id="regButton" type="submit" value="Sign in">
                
                <div>
                    <p id="reg">Don't have an account?</p>
                    <label id="reg">
                        <a href="registration.php" class="link-warning">Join and make friends together!</a>
                    </label>
                </div>

                <label style="display: flex; justify-content: center; margin: 30px 0 0 0;">
                    <a href="index.html" class="fs-5 link-secondary" style="text-decoration:none">< Return to mainpage</a>
                </label>
    
            </form>

        </div>
    </div>
</body>
</html>