<?php

include_once 'functions.php';
$db = fetchDb();
$results = dbQuery($db);
$output = readResults($results);
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width">
    <link href="normalize.css" rel="stylesheet" type="text/css">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400&display=swap" rel="stylesheet">

</head>
<body>
    <header>
        <h1>Luke's Favourite Albums</h1>
    </header>
    <main>
<!--        <div class="albumBox">-->
<!--            <img src='https://m.media-amazon.com/images/I/81EP2fxHLRL._AC_SX425_.jpg' alt='album cover' width='250px' height='250px'>-->
<!--            <h2>Plastic Beach</h2>-->
<!--            <h3>Gorillaz</h3>-->
<!--            <p>Year of Release: 2010</p>-->
<!--            <p>Rating: 10</p>-->
<!--        </div>-->

        <?php
        echo $output;
        ?>

    </main>
</body>

<footer>

</footer>
</html>

