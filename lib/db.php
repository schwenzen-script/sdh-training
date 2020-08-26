<?php

/** Connecting with our database */
try {
    $connection = new PDO($DB_DSN, $DB_USER, $DB_PWD);
    // Set PDO error to an exception
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    // Failed making a connection
    $e->getMessage();
};