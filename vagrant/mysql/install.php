<?php
/**
 * This creates the geonameapi user and related database
 */

$db = new PDO('mysql:host=127.0.0.1;', 'root', 'root');

//Create user
$query = $db->prepare("CREATE USER 'geoname'@'localhost' IDENTIFIED BY '155833Geoname'");
$result = $query->execute();

//Give all permissions
$query = $db->prepare("GRANT ALL PRIVILEGES ON * . * TO 'geoname'@'localhost'");
$result = $query->execute();

$query = $db->prepare("FLUSH PRIVILEGES");
$result = $query->execute();

//Create DB (this is now done in the geoname_importer shell script
//$query = $db->prepare("CREATE DATABASE geoname");
//$result = $query->execute();
