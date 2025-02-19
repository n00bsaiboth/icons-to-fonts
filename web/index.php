<?php 
    require '../vendor/autoload.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="build/css/style.css">
    <title>Icons to Fonts</title>
</head>
<body>
    <h1>Welcome to icons to fonts</h1>
    <p><?php require_once('src/database.php'); ?></p>

    <h2>Social media icons: </h2>
    
    <p>
        <span class="icon icon-bluesky"></span>
        <span class="icon icon-facebook"></span>
        <span class="icon icon-github"></span>
        <span class="icon icon-linkedin"></span>
        <span class="icon icon-mastodon"></span>
        <span class="icon icon-reddit"></span>
    </p>

    <script src="build/js/bundle.js"></script>
</body>
</html>