<?php

require_once 'functions.php';
$db = fetchDb();
$results = getAllAlbums($db);
$output = createAlbumMarkup($results);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Luke's Favourite Albums</title>
    <link rel="icon" type="image/png" href="favicon.png">
    <meta name="viewport" content="width=device-width">
    <link href="normalize.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400&display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <header>
        <h1>Luke's Favourite Albums</h1>
    </header>
    <main>
        <?php
            echo $output;
        ?>
    </main>
</body>
</html>

