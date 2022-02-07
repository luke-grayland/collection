<?php

include_once 'functions.php';
$db = fetchDb();
$results = dbQuery($db);

foreach ($results as $result) {
     echo "<div>
            <h2>$result[album_name]</h2>
            <h3>$result[artist_name]</h3>
            <p>Year of Release: $result[year]</p>
            <p>Rating: $result[rating]</p>
            <img src='$result[cover]' alt='album cover' width='250px' height='250px'>
            </div>";
}



