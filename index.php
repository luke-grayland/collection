<?php

include_once 'functions.php';
$db = fetchDb();
$results = dbQuery($db);

echo readResults($results);


