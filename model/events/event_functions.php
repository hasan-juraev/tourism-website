<?php
    // show all events
    function show_events() {
        global $db;
        $query = 'SELECT * FROM events ORDER BY created_at DESC';
        $statement = $db->prepare($query);
        $statement -> execute();
        $events = $statement->fetchAll();        
        $statement -> closeCursor();
        return $events;
    
    }
    // show all events
    function show_events_3() {
        global $db;
        $query = 'SELECT * FROM events LIMIT 3';
        $statement = $db->prepare($query);
        $statement -> execute();
        $events = $statement->fetchAll();
        shuffle($events);
        $statement -> closeCursor();
        return $events;
    
    }

    // show single event
    function show_single_event_by_id($single_event_id) {
        global $db;
        $query = 'SELECT * FROM events WHERE id='.$single_event_id.' LIMIT 1';
        $statement = $db->prepare($query);
        $statement -> execute();
        $single_event = $statement->fetch();
        $statement -> closeCursor();
        return $single_event;
    }