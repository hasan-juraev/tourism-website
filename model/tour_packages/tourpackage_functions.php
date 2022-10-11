<?php
     // show all tour packages
     function show_tourpackages() {
        global $db;
        $query = 'SELECT * FROM tour_packages ORDER BY id';
        $statement = $db->prepare($query);
        $statement -> execute();
        $notices = $statement->fetchAll();
        $statement -> closeCursor();
        return $notices;
    
    }
    // show latest 3 tour packages
    function show_tourpackages_3() {
        global $db;
        $query = 'SELECT * FROM tour_packages ORDER BY id LIMIT 3';
        $statement = $db->prepare($query);
        $statement -> execute();
        $notices = $statement->fetchAll();
        $statement -> closeCursor();
        return $notices;
    
    }

    // show single tour package
    function show_single_tour_by_id($single_tour_id) {
        global $db;
        $query = 'SELECT * FROM tour_packages WHERE id='.$single_tour_id.' LIMIT 1';
        $statement = $db->prepare($query);
        $statement -> execute();
        $single_tour = $statement->fetch();
        $statement -> closeCursor();
        return $single_tour;
    }