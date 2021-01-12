<!Nicole Koo Jia Ying 19047433>
<?php
session_start();
include("dbFunctions.php");

$exercise_type = $_POST['exercise_type'];
$duration = $_POST['duration'];
$username = $_SESSION['username'];

$query = "INSERT INTO exercise(username, exercise_type, duration) 
          VALUES 
          ('$username','$exercise_type', $duration)";
$status = mysqli_query($link, $query) or die(mysqli_error($link));

if ($status) {
    $msg = "Exercise inserted successfully.<br/><a href='exercise_entry.php'>Back to Exercise Entry</a>";
} else {
    $msg = "Exervise insertion failed.<br/>";
}
// create query
$selectQuery = "SELECT * FROM exercise WHERE username ='$username'";

// execute query
$result = mysqli_query($link, $selectQuery) or
        die("Error in query: $query. " . mysqli_error($link));
?>

<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="css/jquery-ui.min.css"> 
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui.min.js" type="text/javascript"></script>
        <script>
            $(document).ready(function () {
                $('tr').show();
                $('.header').show();
            });
        </script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-light navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="logout.php">Log-out</a>
                    </li>
                </ul>
            </div>
        </nav>
        <?php echo $msg; ?>
        <table id="bookTable" class="table table-bordered">
            <tr class="header">
                <th>Exercise Type</th>
                <th>Duration</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                $name = $row['username'];
                $types = $row['exercise_type'];
                $time = $row['duration'];
                ?>
            <tr class="<?php echo $name ?>" 
                style="<?php if($types == "Walk" && $time >= 30){
                ?>
                background-color: yellow;
                <?php
                }
                else if($types == "Run" && $time >= 10){ 
                ?>
                background-color: yellow;
                <?php
                }
                else if($types == "Cycle" && $time >= 20){ 
                ?>
                background-color: yellow;
                <?php
                }
                ?>">
                    <td>
                        <?php echo $types; ?>
                    </td>
                    <td>
                        <?php echo $time; ?>
                    </td>
                </tr>
                <?php
            } // end while loop
            ?>    
        </table>
    </body>
</html>
