<?php
    // show mosques
    function show_mosques() {
        global $db;
        $query = 'SELECT * FROM mosque ORDER BY id';
        $statement = $db->prepare($query);
        $statement -> execute();
        $mosques = $statement->fetchAll();
        $statement -> closeCursor();
        return $mosques;
     
    }

    // show latest inserted 3 mosques
     function show_mosques_3() {
        global $db;
        $query = 'SELECT * FROM mosque ORDER BY id LIMIT 3';
        $statement = $db->prepare($query);
        $statement -> execute();
        $mosques = $statement->fetchAll();
        $statement -> closeCursor();
        return $mosques;
     
    }