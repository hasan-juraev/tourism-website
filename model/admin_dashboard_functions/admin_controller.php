<?php include('../database.php'); ?>

<?php

function show_blogs() {
        global $db;
        $query = 'SELECT * FROM blogs ORDER BY id LIMIT 3';
        $statement = $db->prepare($query);
        $statement -> execute();
        $blogs = $statement->fetchAll();
        $statement -> closeCursor();
        return $blogs;
     
    }

    ?>