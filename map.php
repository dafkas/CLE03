<?php require_once "includes/initialize.php"?>
<?php if ($isJson == false) : ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<div class="col-sm-12 startup borders">
    <ul class="nav nav-tabs">
        <li><button type="button" class="btn btn-default" aria-label="Left Align">
                <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
            </button></li>
        <li> ParkingSoon</li>
        <li><button type="button" class="btn btn-default" aria-label="Left Align">
                <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
            </button></li>
    </ul>

    <h1><?= $pageTitle ?></h1>
    <?php if (isset($errors)): ?>
        <ul class="errors">
            <?php foreach ($errors as $error): ?>
                <li><?= $error; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <iframe src="http://145.24.222.26:3000/" height="500" width="400"></iframe>


    <footer class="footer">
            <button type="button" class="btn btn-default footButtons" aria-label="Left Align">
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span></button>

            <button type="button" class="btn btn-default footButtons" aria-label="Left Align">
                <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></button>

            <button type="button" class="btn btn-default footButtons" aria-label="Left Align">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span></button>

        </footer>
    </div>
</div>
<script type="text/javascript" src="assets/js/main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
<?php endif; ?>