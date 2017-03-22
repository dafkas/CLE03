<?php require_once "includes/initialize.php"?>
<!DOCTYPE html>
<html>
<head>
    <title>Parking-soon</title>
    <link type="text/css" href="assets/css/style.css"/>
</head>
<body>
<h1><?= $pageTitle ?></h1>
<?php if (isset($errors)): ?>
    <ul class="errors">
        <?php foreach ($errors as $error): ?>
            <li><?= $error; ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>



<div id="googleMap" style="width:40%;height:600px;"></div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/reqwest/2.0.5/reqwest.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvgNhRs-4DSPOX4R9zLC_ZO-n5ehc8GvE&callback=myMap"></script>
</body>
</html>
