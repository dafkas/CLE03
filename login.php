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
<form id="login" method="post" action="<?= $_SERVER['REQUEST_URI']; ?>">
    <div>
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" value="<?= (isset($email) ? $email : ''); ?>"/>
    </div>
    <div>
        <label for="password">Wachtwoord</label>
        <input type="password" name="password" id="password"/>
    </div>
    <div>
        <input type="submit" name="submit" value="Login"/>
    </div>
</form>
<div>
    <a href="<?= BASE_PATH; ?>home">Go back to the list</a>
</div>

</body>
</html>
