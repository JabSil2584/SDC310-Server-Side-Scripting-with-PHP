<?php
    Define('DB_USER', 'oreid');
    Define('DB_PASSWORD', 'Password1');
    Define('DB_HOST', 'localhost');
    Define('DB_NAME', 'php_data');

    try {
        $dbcon = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        mysqli_set_charset($dbcon, 'utf8');
    } catch(Exception $e) {
        print "The system is busy please try later";
    } catch(Error $e) {
        print "The system is busy please try again later.";
    }
?>