<?php

require_once 'functions.php';

$newAlbumData = $_POST;

if (checkAlbumDataExists($newAlbumData)) {
    //Sanitise
    $albumName = filter_var($newAlbumData['albumName'], FILTER_SANITIZE_STRING);
    $artistName = filter_var($newAlbumData['artistName'], FILTER_SANITIZE_STRING);
    $yearOfRelease = filter_var($newAlbumData['yearOfRelease'], FILTER_SANITIZE_NUMBER_INT);
    $albumArtworkURL = filter_var($newAlbumData['albumArtworkURL'], FILTER_SANITIZE_URL);
    $rating = filter_var($newAlbumData['rating'], FILTER_SANITIZE_NUMBER_INT);

    if (validateNewAlbumData(
        $albumName,
        $artistName,
        $yearOfRelease,
        $albumArtworkURL,
        $rating)
    ) {
        //Add to DB
        $db = fetchDb();
        insertNewAlbum(
            $albumName,
            $artistName,
            $yearOfRelease,
            $albumArtworkURL,
            $rating,
            $db
        );
    }
}

//Send back to index page
header('Location: index.php');
