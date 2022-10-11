<?php
    // show all notices
    function show_notices() {
        global $db;
        $query = 'SELECT * FROM notices ORDER BY created_at DESC';
        $statement = $db->prepare($query);
        $statement -> execute();
        $notices = $statement->fetchAll();
        $statement -> closeCursor();
        return $notices;
    
    }

    // show latest 3 notices
    function show_notices_3() {
        global $db;
        $query = 'SELECT * FROM notices ORDER BY created_at DESC LIMIT 3';
        $statement = $db->prepare($query);
        $statement -> execute();
        $notices = $statement->fetchAll();
        $statement -> closeCursor();
        return $notices;
    
    }    

    // show single notice
    function show_single_notice_by_id($single_notice_id) {
        global $db;
        $query = 'SELECT * FROM notices WHERE id='.$single_notice_id.' LIMIT 1';
        $statement = $db->prepare($query);
        $statement -> execute();
        $single_notice = $statement->fetch();
        $statement -> closeCursor();
        return $single_notice;
    } 