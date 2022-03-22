<?php

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
    <a href='index.php' class="addNewAlbumButton"><p>Home</p></a>
</header>
<main>
    <form class="albumBox newAlbumForm noAnimation" method="post" action="newAlbumFormProcess.php">
        <label for ="albumName">Album Name:</label>
        <input type="text" id="albumName" name="albumName">

        <label for ="artistName">Artist Name:</label>
        <input type="text" id="artistName" name="artistName">

        <label for ="yearOfRelease">Year of Release:</label>
        <input type="text" id="yearOfRelease" name="yearOfRelease">

        <label for ="albumArtworkURL">Artwork URL:</label>
        <input type="text" id="albumArtworkURL" name="albumArtworkURL">

        <label for ="rating">Rating (1-10):</label>
        <select name="rating" id="rating">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>

        <label for="spotifyLink">Spotify Link:</label>
        <input type="text" id="spotifyLink" name="spotifyLink">

        <input type="submit" value="Submit" class="submitButton">
    </form>
</main>
</body>
</html>