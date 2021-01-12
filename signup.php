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
   
        <style>
            form .error {
                color: #ff0000;
            }
        </style>
        <script>
            $(document).ready(function () {
                $('.nav-link').css('color', 'black');
                $('h4').css('color', '#8b0000');
                $('h4').css('text-align', 'center');
                
                $("#defaultForm").validate({
                    rules: {
                        username: {
                            required: true,
                        },
                        password: {
                            required: true,
                            pattern: /^[a-zA-Z0-9.|_]{8,}$/
                        },
                        height: {
                            required: true,
                            pattern: /^\d{2,3}\.\d{2}$/
                        },
                        weight: {
                            required: true,
                            pattern: /^\d{2,3}\.\d{1}$/
                        },
                        DOB: {
                            required: true,
                            pattern: /^(0?[1-9]|[12][0-9]|3[01])[\/](0?[1-9]|1[012])[\/]\d{4}$/
                        }
                    },
                    messages: {
                        username: {
                            required: "Please enter your name"
                        },
                        password: {
                            required: "Please enter your password",
                            pattern: "password has atleast 8 characters include uppercase, lowercase, number and symbols( . | _ ) ."
                        },
                        height: {
                            required: "Please enter your height in CM",
                            pattern: "height must be in 2/3 digit range with a . and 2 decimal point."
                        },
                        weight: {
                            required: "Please enter your height in KG",
                            pattern: "height must be in 2/3 digit range with a . and 1 decimal point."
                        },
                        DOB: {
                            required: "Please enter your Date of Birth.",
                            pattern: "Date must be in DD/MM/YYYY format"
                        }
                    },
                    submitHandler: function () {
                        return true;
                    }
                });
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
        <h4>Sign-Up</h4>
        <br/><br/>
        <div class="container">
            <form id="defaultForm" action="doSignup.php" method="post">
                <div class="form-group">
                    <label for="nameInput">Username</label>
                    <input type="text" class="form-control" id="usernameInput" name="username" placeholder="Enter Username" required>
                </div>
                <div class="form-group">
                    <label for="nameInput">Password</label>
                    <input type="text" class="form-control" id="passwordInput" name="password" placeholder="Enter Password">
                </div>
                <div class="form-group">
                    <label for="nameInput">Height</label>
                    <input type="text" class="form-control" id="heightInput" name="height" placeholder="Enter Height">
                </div>
                <div class="form-group">
                    <label for="nameInput">Weight</label>
                    <input type="text" class="form-control" id="weightInput" name="weight" placeholder="Enter Weight">
                </div>
                <div class="form-group">
                    <label for="nameInput">Date of Birth</label>
                    <input type="text" class="form-control" id="DOBInput" name="DOB" placeholder="Enter Date of Birth">
                </div>
                <div class="form-group">
                    <label for="active_lvl">Active Level</label>
                    <select class="form-control" id="active_lvl" name="active_lvl">
                        <option>Sedentary</option>
                        <option>Moderate</option>
                        <option>Active</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </body>
</html>