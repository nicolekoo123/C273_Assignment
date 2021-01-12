<!Nicole Koo Jia Ying 19047433>
<?php
session_start();
$message = "";
if (isset($_SESSION['username'])) {
    $message = "<p>Bye Bye " . $_SESSION['username'] . ". You have logged out.";
    $_SESSION = array();
    session_destroy();
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/all.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <title>Story Teller - Logout</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-light navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="login.php">Log-In</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <h3>Story Teller - Logout</h3>

            <?php
            echo $message;
            ?>
        </div>
    </body>
</html>