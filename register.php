<<<<<<< HEAD
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
</body>
</html>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="col-sm-12 startup borders">
    <img src="includes/pictures/logo.png" class="img1" alt="Insert foto hier">
        <form action="index.php">
        <input class="credits" type="text" name="username" placeholder="username:" required>
        <br>
        <input class="credits" type="text" name="password" placeholder="password:" required>
        <br>
        <input class="credits" type="text" name="email" placeholder="email:" required>
        <br>
        <input class="credits" type="text" name="phone" placeholder="tel(#)" required>
        <br>
        <input class="btn btn-primary submit" type="submit" value="Submit">
        </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</div>
</body>
</html>
>>>>>>> frontend
