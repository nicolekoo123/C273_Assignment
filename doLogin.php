<!Nicole Koo Jia Ying 19047433>
<?php
session_start();
include("dbFunctions.php");

if (isset($_POST['username'])) {
    //retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    //match the username and password entered with database record
    $query = "SELECT * FROM patients WHERE username='"  . $username . "' AND password = '" . $password . "'";

    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    //if record is found, store id and username into session
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        $_SESSION['username'] = $row['username'];
        header("location:exercise_entry.php");
    } else {
        $msg = "<p>Sorry, you must enter a valid username 
                and password to log in. <a href='login.php'>Back to Login Page</a></p>";
    }
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php echo $msg; ?>
    </body>
</html>
