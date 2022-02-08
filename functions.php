<?php


/**
 * Description: Connects to database
 */
function fetchDb() {
    return new PDO('mysql:host=db; dbname=luke-collection', 'root', 'password');
}


/**
 * Description: Queries the database, asking for album name, artist name, year, rating, and cover.
 * @param Takes database as parameter
 * @return Returns results from database query
 */
function dbQuery($db) {
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $query = $db->prepare("SELECT `album_name`, `artist_name`, `year`, `rating`, `cover` FROM `luke-albums`;");
    $query->execute();
    return $query->fetchAll();
}


/**
 * Description: Iterates through the results array, validates each value, returns HTML string if so, returns error message string if not.
 * @param Takes results array from database query
 * @return Returns string containing HTML or error message
 */
function readResults(array $results): string {
    $resultsToReturn = '';
    foreach ($results as $result) {
        if ( filter_var($result['rating'], FILTER_VALIDATE_INT, array("options" => array("min_range"=>0, "max_range"=>10)))
        && filter_var($result['year'], FILTER_VALIDATE_INT, array("options" => array("min_range"=>1000, "max_range"=>date('Y'))))
        && strlen($result['album_name']) < 50
        && strlen($result['artist_name']) < 50)
        {
            $result = "<div>
            <h2>$result[album_name]</h2>
            <h3>$result[artist_name]</h3>
            <p>Year of Release: $result[year]</p>
            <p>Rating: $result[rating]</p>
            <img src='$result[cover]' alt='album cover' width='250px' height='250px'>
            </div>";
        } else {
            return $result = 'Entered value out of range, please check database.';
        }
             $resultsToReturn .= $result;
    }
        return $resultsToReturn;
}


