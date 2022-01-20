<?php
/*
big-config.php

Used to store all of our IT162 Big Project configuration information

*/

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');


//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

$logo_color = ''; //make logo_color an empty string by default

switch(THIS_PAGE) {
        
//    case '../index.php':
//        $title = "Liyun Cecil's IT162 Portal Website";
//        $logo = 'fa-home';
//        $pageID = '';
//    break;
//        
    case 'index.php':
        $title = "Web Dev Examples by Liyun Cecil";
        $logo = 'fa-graduation-cap';
        $pageID = '';
    break;
        
    case 'flexbox.php':
        $title = 'Flexbox Research';
        $logo = 'fa-th-large';
        $pageID = 'Flexbox Research';
    break;    
    
    case 'galleries.php':
        $title = 'Galleries Research';
        $logo = 'fa-camera-retro';
        $pageID = 'Galleries Research';
    break;        
            
    case 'calendar.php':
        $title = 'Google Calendar';
        $logo = 'fa-calendar';
        $pageID = 'Google Calendar';
    break; 
        
    case 'map.php':
        $title = 'Google Map';
        $logo = 'fa-globe';
        $pageID ='Map to Museum of Pop Culture';
    break;      
        
    case 'youtube.php':
        $title = 'YouTube';
        $logo = 'fa-youtube-play';
        $pageID ='YouTube: What is Web Accessibility?';
    break;        
            
    case 'shoppingcarts.php':
        $title = 'Shopping Carts Research';
        $logo = 'fa-shopping-cart';
        $pageID ='Shopping Carts Research';
    break;        
                    
    case 'siteapp.php':
        $title = 'Responsive Site vs Mobile App Research';
        $logo = 'fa-html5';
        $pageID ='Responsive Site vs Mobile App Research';
    break;        
    
    case 'webcam.php':
        $title ='Live Web Cameras';
        $logo = 'fa-video-camera';
        $pageID = 'Live Web Cameras';
    break;    
            
    default: 
        $title = THIS_PAGE;
        $logo = 'fa-graduation-cap'; //no icon by default
        $pageID = 'Welcome';
}


?>