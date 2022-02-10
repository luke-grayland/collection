<?php

require_once 'functions.php';

$newAlbumData = $_POST;

if (checkAlbumDataExists($newAlbumData)) {
    //Sanitise
    $newAlbumData['albumName'] = filter_var($newAlbumData['albumName'], FILTER_SANITIZE_STRING);
    $newAlbumData['artistName'] = filter_var($newAlbumData['artistName'], FILTER_SANITIZE_STRING);
    $newAlbumData['yearOfRelease'] = filter_var($newAlbumData['yearOfRelease'], FILTER_SANITIZE_NUMBER_INT);
    $newAlbumData['albumArtworkURL'] = filter_var($newAlbumData['albumArtworkURL'], FILTER_SANITIZE_URL);
    $newAlbumData['rating'] = filter_var($newAlbumData['rating'], FILTER_SANITIZE_NUMBER_INT);

    if (validateNewAlbumData(
        $newAlbumData['albumName'],
        $newAlbumData['artistName'],
        $newAlbumData['yearOfRelease'],
        $newAlbumData['albumArtworkURL'],
        $newAlbumData['rating'])
    ) {
        //Add to DB
        $db = fetchDb();
        insertNewAlbum(
            $newAlbumData['albumName'],
            $newAlbumData['artistName'],
            $newAlbumData['yearOfRelease'],
            $newAlbumData['albumgit ArtworkURL'],
            $newAlbumData['rating'],
            $db
        );
    }
}

//Send back to index page
header('Location: index.php');
