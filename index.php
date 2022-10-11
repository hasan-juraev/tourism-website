<?php

    require("model/database.php");
    require("model/functions.php");
    $action = $_GET['page'];
    $single_blog_id = $_GET['blog_id'];  
    $single_notice_id = $_GET['notice_id'];  
    $single_service_id = $_GET['service_id'];  
    $single_event_id = $_GET['event_id'];
    $single_tour_id = $_GET['tour_id'];

    switch($action) { 
        
        // show all blogs
        case "blogs":
            $blogs = show_blogs();
            $blogs_3 = show_blogs_3();
            include('view/blogs.php');           
            break;
            
        // show single blog page
        case "single_blog":            
            $blogs = show_blogs();
            $single_blog = show_single_blog_by_id($single_blog_id);           
            include("view/single_blog.php");
            break;

        // show all mosque
        case "mosque":
            $mosques = show_mosques();
            include('view/mosque.php');
            break;
        
        // show all tour packages page
        case "tour_packages":
            $tour_packages = show_tourpackages();
            include('view/tour_packages.php');
            break;

        // show single tour package page
        case "single_tourpackage":           
            $single_tourpackage = show_single_tour_by_id($single_tour_id);
            include('view/single_tourpackage.php');
            break;
            
        // show all services
        case "services":
            $services = show_services();
            include('view/services.php');
            break;
        
        // show single service page
        case "single_service":        
            $single_service = show_single_service_by_id($single_service_id);
            include('view/single_service.php');
            break;

        // show single notice page
        case "single_notice":           
            $single_notice = show_single_notice_by_id($single_notice_id);
            include('view/single_notice.php');
            break; 

        // show all events page
            case "events":
            $events = show_events();          
            $events_3 = show_events_3();          
            include('view/events.php');
            break;

        // show single event page
        case "single_event":           
            $single_event = show_single_event_by_id($single_event_id);
            include('view/single_event.php');
            break;

        // show all entertainment page
        case "entertainment":
            include('view/entertainment.php');
            break;
        
        // show contact page
        case "contact":
            include('view/contact.php');
            break;    
    
        default:
            $blogs = show_blogs_3();
            $mosques = show_mosques_3();
            $tour_packages = show_tourpackages_3();            
            $services = show_services_3();
            $notices = show_notices_3();
            $events = show_events_3();
            include('view/home.php');
            break;
    }

?>
