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

    if (
        //Validate
        strlen($newAlbumData['albumName']) < 255 &&
        strlen($newAlbumData['artistName']) < 255 &&
        $newAlbumData['yearOfRelease'] > 1000 &&
        $newAlbumData['yearOfRelease'] < 2022 &&
        strlen($newAlbumData['albumArtworkURL']) < 255 &&
        $newAlbumData['rating'] < 11 &&
        $newAlbumData['rating'] > 0
    ) {
        //Add to DB
        $db = fetchDb();
        insertNewAlbum(
            $newAlbumData['albumName'],
            $newAlbumData['artistName'],
            $newAlbumData['yearOfRelease'],
            $newAlbumData['albumArtworkURL'],
            $newAlbumData['rating'],
            $db
        );

        //Send back to index page
        header('Location: index.php');

    } else {
        echo 'Some of your data was invalid, please try again.<br><div class="goBackButton"><a href="formPage.php">Click here to go back.</a></div>';
    }
}

