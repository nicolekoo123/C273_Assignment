<!Nicole Koo Jia Ying 19047433>
<?php

include("dbFunctions.php");

$username = $_POST['username'];
$password = $_POST['password'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$DOB = $_POST['DOB'];
$active_lvl = $_POST['active_lvl'];

//echo $person_name;
//echo $district;
//print_r($_POST);

$query = "INSERT INTO patients(username,password, height, weight, DOB, active_lvl) 
          VALUES 
          ('$username','$password', '$height','$weight',STR_TO_DATE('$DOB', '%d/%m/%Y'), '$active_lvl')";
$status = mysqli_query($link, $query) or die(mysqli_error($link));

if ($status) {
    header("location:login.php");
} else {
    $msg = "paitent insertion failed.<br/>";
}
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title></title>
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
        <?php echo $msg; ?>
    </body>
</html>
