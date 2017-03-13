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
<form class="register" action="<?= $_SERVER['REQUEST_URI']; ?>" method="post">
    <label for="name">Name</label>
    <input type="text" name="name"/><br/>
    <label for="email">E-mail</label>
    <input type="email" name="email"/><br/>
    <label for="email">Password</label>
    <input type="password" name="password"/><br/>
    <label for="email">Zip-code</label>
    <input type="number" name="zipcode"/><br/>
    <label for="number">Number</label>
    <input type="number" name="housenumber"/><br/>
    <label for="email">Activation code</label>
    <input type="number" name="email"/><br/>
    <input type="submit" name="submit">
</form>
</body>
</html>
