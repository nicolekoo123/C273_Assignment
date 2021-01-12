<!Nicole Koo Jia Ying 19047433>
<?php
session_start();
include("dbFunctions.php");
if (!isset($_SESSION['username'])) {
    echo "You have not logged in.<br/>";
    echo "Please <a href='login.php'>login</a>.";
    exit;
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         
       
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui.min.js" type="text/javascript"></script>

        <script>
            $(document).ready(function () {
                $('.nav-link').css('color', 'black');
                $('h4').css('color', '#8b0000');
                $('h4').css('text-align', 'center');
                $("#slider").slider({
                    value: 60,
                    min: 5,
                    max: 120,
                    step: 1,
                    slide: function (event, ui) {
                        $("#num").val(ui.value);
                    }
                });
                $("#num").val($("#slider").slider("value"));
                $("#slider .ui-slider-range").css('background', 'blue');
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
        <h4>Exercise Entry</h4>
        <br/><br/>
        <div class="ui-widget">
            <form id="defaultForm" action="doExercise_entry.php" method="post">
                <div class="form-group">
                    <label for="exercise_type">Exercise Types</label>
                    <select class="form-control" id="exercise_type" name="exercise_type">
                        <option>Walk</option>
                        <option>Run</option>
                        <option>Cycle</option>
                    </select>
                </div>
                <br/><br/>
                <div class="form-group">
                    <label for="slider">Duration <input type="text" id="num" name="duration" readonly style="border:0; color:#8b0000; font-weight:bold; text-align:right" size="1"> Minutes</label>
                    <div id="slider"></div>
                </div>
                <br/>
               <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </body>
</html>