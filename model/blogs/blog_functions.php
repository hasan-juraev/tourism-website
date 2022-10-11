<?php
    // show all blogs
    function show_blogs() {
        global $db;
        $query = 'SELECT * FROM blogs ORDER BY id';
        $statement = $db->prepare($query);
        $statement -> execute();
        $blogs = $statement->fetchAll();
        $statement -> closeCursor();
        return $blogs;
    
    }
    // show latest 3 blogs
    function show_blogs_3() {
        global $db;
        $query = 'SELECT * FROM blogs ORDER BY id LIMIT 3';
        $statement = $db->prepare($query);
        $statement -> execute();
        $blogs = $statement->fetchAll();
        $statement -> closeCursor();
        return $blogs;
    
    }

    // show single blog
    function show_single_blog_by_id($single_blog_id) {
        global $db;
        $query = 'SELECT * FROM blogs WHERE id='.$single_blog_id.' LIMIT 1';
        $statement = $db->prepare($query);
        $statement -> execute();
        $single_blog = $statement->fetch();
        $statement -> closeCursor();
        return $single_blog;
    } 