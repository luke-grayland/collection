<?php

require_once 'functions.php';

$newAlbumData = $_POST;

if (checkAlbumDataExists($newAlbumData)) {
    //Sanitise
    $albumName = filter_var($newAlbumData['albumName'], FILTER_SANITIZE_STRING);
    $artistName = filter_var($newAlbumData['artistName'], FILTER_SANITIZE_STRING);
    $yearOfRelease = filter_var(intval($newAlbumData['yearOfRelease']), FILTER_SANITIZE_NUMBER_INT);
    $albumArtworkURL = filter_var($newAlbumData['albumArtworkURL'], FILTER_SANITIZE_URL);
    $rating = filter_var($newAlbumData['rating'], FILTER_SANITIZE_NUMBER_INT);
    $spotifyLink = filter_var($newAlbumData['spotifyLink'], FILTER_SANITIZE_STRING);

    if (validateNewAlbumData(
        $albumName,
        $artistName,
        $yearOfRelease,
        $albumArtworkURL,
        $rating,
        $spotifyLink)
    ) {
        //Add to DB
        $db = fetchDb();
        insertNewAlbum(
            $albumName,
            $artistName,
            $yearOfRelease,
            $albumArtworkURL,
            $rating,
            $spotifyLink,
            $db
        );
    }
}

//Send back to index page
header('Location: index.php');
