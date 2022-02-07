<?php

function fetchDb() {
    return new PDO('mysql:host=db; dbname=luke-collection', 'root', 'password');
}

function dbQuery($db) {
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $query = $db->prepare("SELECT `album_name`, `artist_name`, `year`, `rating`, `cover` FROM `luke-albums`;");
    $query->execute();
    return $query->fetchAll();
}

function readResults(array $results): string {
    $resultsToReturn = '';
    foreach ($results as $result) {
        $result = "<div>
            <h2>$result[album_name]</h2>
            <h3>$result[artist_name]</h3>
            <p>Year of Release: $result[year]</p>
            <p>Rating: $result[rating]</p>
            <img src='$result[cover]' alt='album cover' width='250px' height='250px'>
            </div>";

             $resultsToReturn .= $result;
    }
        return $resultsToReturn;
}


