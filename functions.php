<?php

function fetchDb() {
    return $db = new PDO('mysql:host=db; dbname=luke-collection', 'root', 'password');
}

function dbQuery($db) {
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $query = $db->prepare("SELECT `album_name`, `artist_name`, `year`, `rating`, `cover` FROM `luke-albums`;");
    $query->execute();
    return $query->fetchAll();
}



