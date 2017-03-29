<?php require_once "includes/initialize.php"?>
<!DOCTYPE html>
<html>
<head>
    <title>Parking-soon</title>
    <link type="text/css" href="assets/css/style.css"/>
</head>
<body  style="background: #f7f7f7;">
<div class="container" style="margin: 0 auto;    width: 250px;">
    <img src="assets/img/logo.png" style="width: 100%;"/>

    <?php if (isset($errors)): ?>
        <ul class="errors">
            <?php foreach ($errors as $error): ?>
                <li><?= $error; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
<div class="content-box" style="    width: 450px;">
    <h1 style="color:#426fbf;">Available places:</h1>
    <iframe scrolling="no" src="http://localhost:3000" style="border: 0px none;
    margin-left: 5px;
    height: 34px;
    margin-top: -18px;
    width: 220px;"></iframe>
    <h1 style="color:#426fbf;">Playing : </h1>
        <img src="http://vvtricht.nl/sites/vvtricht.nl/files/foto/sparta-rotterdam.png" style="width: 30%;
            /* position: absolute; */
            display: inline;
            float: left;
            padding-right: 40px;"/>
        <div id="playing"></div>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/reqwest/2.0.5/reqwest.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
