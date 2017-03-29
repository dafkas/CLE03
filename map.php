<?php require_once "includes/initialize.php"?>
<?php if ($isJson == false) : ?>
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
<iframe src="http://145.24.222.26:3000/" height="500" width="400"></iframe>


<script src="https://cdnjs.cloudflare.com/ajax/libs/reqwest/2.0.5/reqwest.min.js"></script>
<script src="assets/js/main1.js"></script>
</body>
</html>
<?php endif; ?>