<?php
    // show all services
    function show_services() {
        global $db;
        $query = 'SELECT * FROM services ORDER BY id';
        $statement = $db->prepare($query);
        $statement -> execute();
        $services = $statement->fetchAll();
        $statement -> closeCursor();
        return $services;
    
    }
    // show latest inserted 3 services
    function show_services_3() {
        global $db;
        $query = 'SELECT * FROM services ORDER BY id LIMIT 3';
        $statement = $db->prepare($query);
        $statement -> execute();
        $services = $statement->fetchAll();
        $statement -> closeCursor();
        return $services;
    
    }

    // show single service
    function show_single_service_by_id($single_service_id) {
        global $db;
        $query = 'SELECT * FROM services WHERE id='.$single_service_id.' LIMIT 1';
        $statement = $db->prepare($query);
        $statement -> execute();
        $single_service = $statement->fetch();
        $statement -> closeCursor();
        return $single_service;
    }