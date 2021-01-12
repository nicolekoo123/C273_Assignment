<!Nicole Koo Jia Ying 19047433>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap 4 Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui.min.js" type="text/javascript"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="js/additional-methods.min.js" type="text/javascript"></script>
        <script>
            $(document).ready(function () {
                $('.nav-link').css('color', 'black');
                $('h4').css('color', '#8b0000');
                $('h4').css('text-align', 'center');
            });
        </script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-light navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="signup.php">Sign-up</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="login.php">Log-in</a>
                    </li>
                </ul>
            </div>
        </nav>
        <h4>Log-In</h4>
        <br/><br/>
        <div class="container">
            <form id="defaultForm" action="doLogin.php" method="post">
                <div class="form-group">
                    <label for="nameInput">Username</label>
                    <input type="text" class="form-control" id="usernameInput" name="username" placeholder="Enter Username">
                </div>
                <div class="form-group">
                    <label for="nameInput">Password</label>
                    <input type="text" class="form-control" id="passwordInput" name="password" placeholder="Enter Password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </body>
</html>