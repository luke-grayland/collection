
# Favourite Albums Collection App

This app allows users to keep track of their favourite albums. It is pre-populated with my own personal favourites.

## Description

Album data is stored in a MySQL database, and displays the album name, artist name, year of release, cover art and a rating out of 10 (stars are automatically generated from rating). When clicked, each album links to the user to the respective album on Spotify.

## Live Project

https://2022-lukeg.dev.io-academy.uk/collection/

## Getting Started

### Dependencies
 * PHP version 7.0.0+, 
 * MySQL version 5.7 + 
 * PHPUnit version 6.5+

### Installing
Clone this repo:
```
git@github.com:luke-grayland/collection.git
```

Install the database ```/luke-collection.sql``` into a db named ```luke-collection```

Make sure the DB connection details for your MySQL server are updated in `functions.php`. For example:

```
$db = new PDO('mysql:host=db; dbname=luke-collection', 'root', 'password');
```


The application will now be available wherever you access your PHP projects!

## Authors

Luke Grayland
lgrayland96@gmail.com
https://luke-grayland.github.io/




