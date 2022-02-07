<?php

include_once 'functions.php';

$db = fetchDb();
$result = dbQuery($db);

echo '<pre>';
var_dump($result);
echo '<pre>';

?>

