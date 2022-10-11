<?php include('database.php'); ?>
<?php

    // blog functions
    require('blogs/blog_functions.php');

    // service functions
    require('services/service_functions.php');
    
    // mosque functions
    require('mosques/mosque_functions.php');
    
    // tour packages functions
    require('tour_packages/tourpackage_functions.php');
    
    // notices functions
    require('notices/notice_functions.php');
    
    // events functions
    require('events/event_functions.php');

    // insert data
    function insert_data($post) {
        global $db;
        $query = 'UPDATE blogs SET `title` = "'.$post.'" WHERE id = 1';
        $statement = $db->prepare($query);
        $statement -> execute();
        $blogs = $statement->fetchAll();
        $statement -> closeCursor();
        return $blogs;
     
    }

    function store_user_messages($first_name, $last_name, $email, $phone, $purpose, $message) {
        global $db;  

        $query = 'INSERT INTO user_messages(first_name, last_name, email_address, phone_number, purpose, user_message) VALUES(?,?,?,?,?,?)';
        $statement = $db->prepare($query);
        $statement -> execute(array($first_name, $last_name, $email, $phone, $purpose, $message));
       
        $statement -> closeCursor();
      
     
    }

    // human readable time
    function time_elapsed_string($datetime, $full = false) {
        $now = new DateTime;
        $ago = new DateTime($datetime);
        $diff = $now->diff($ago);
    
        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;
    
        $string = array(
            'y' => 'year',
            'm' => 'month',
            'w' => 'week',
            'd' => 'day',
            'h' => 'hour',
            'i' => 'minute',
            's' => 'second',
        );
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
            } else {
                unset($string[$k]);
            }
        }
    
        if (!$full) $string = array_slice($string, 0, 1);
        return $string ? implode(', ', $string) . ' ago' : 'just now';
    }
       
?>

