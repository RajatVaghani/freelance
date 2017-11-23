<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Login </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/vendor.css">
        <link rel="stylesheet" id="theme-style" href="css/app.css">
    </head>

    <body>
        <div class="auth">
            <div class="auth-container">
                <div class="card">
                    <header class="auth-header">
                        <h1 class="auth-title"> LOGIN </h1>
                    </header>
                    <div class="auth-content">
                        <form id="login-form" action="action_login.php" method="POST">
                            <div class="form-group"> <label for="username">Username</label> <input type="email" class="form-control underlined" name="email" id="username" placeholder="Your email address" required> </div>
                            <div class="form-group"> <label for="password">Password</label> <input type="password" class="form-control underlined" name="password" id="password" placeholder="Your password" required> </div>

                            <div class="form-group"> <button type="submit" class="btn btn-block btn-primary">Login</button> </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/vendor.js"></script>
    </body>

</html>
