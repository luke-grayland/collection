<?php

require_once 'functions.php';

$newAlbumData = $_POST;

if (checkAlbumDataExists($newAlbumData)) {
    //Sanitise
    $newAlbumData['albumName'] = filter_var($newAlbumData['albumName'], FILTER_SANITIZE_STRING);
    $newAlbumData['artistName'] = filter_var($newAlbumData['artistName'], FILTER_SANITIZE_STRING);
    $newAlbumData['yearOfRelease'] = filter_var($newAlbumData['artistName'], FILTER_SANITIZE_NUMBER_INT);
    $newAlbumData['albumArtworkURL'] = filter_var($newAlbumData['artistName'], FILTER_SANITIZE_URL);
    $newAlbumData['rating'] = filter_var($newAlbumData['rating'], FILTER_SANITIZE_NUMBER_INT);


    if (
        //Validate (Some of this is truthy, some isn't - still trying to figure out why)
        strlen($newAlbumData['albumName']) < 255 &&
        strlen($newAlbumData['artistName']) < 255 &&
        $newAlbumData['yearOfRelease'] > 1000 &&
        $newAlbumData['yearOfRelease'] < 2022 &&
        strlen($newAlbumData['albumArtworkURL']) < 255 &&
        $newAlbumData['rating'] < 11 &&
        $newAlbumData['rating'] > 0
    ) {
        /* Add to DB */

        echo '<pre>';
        var_dump($newAlbumData);
        echo '<pre>';

    } else {
        echo 'error';
    }
}

