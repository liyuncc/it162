<?php
/*
portal-config.php

Used to store all of our IT162 configuration information

*/

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');


//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

$logo_color = ''; //make logo_color an empty string by default

switch(THIS_PAGE){
    case 'index.php':
        $title = "Liyun Cecil's IT162 Portal Website";
        $logo = 'fa-home';
        $pageID = 'Welcome';
    break;
        
    case 'big/index.php':
        $title = "Web Dev Examples By Liyun Cecil";
        $logo = ' fa-graduation-cap';
        $pageID = 'BIG Project';
        
    break;
        
    case 'aia.php':
        $title = "Liyun's AIA";
        $logo = 'fa-universal-access';
        $pageID = 'AIA Research';
        $logo_color = 'style = "color: #F5B700"';
    break; 
        
    case 'flowchart.php':
        $title = "Liyun's Flowchart";
        $logo = 'fa-paper-plane-o';
        $pageID = "Flowchart of client's site";
        $logo_color = 'style = "color: #966B9D"';
    break;    
        
        
    case 'fp/index.php':
        $title = "Liyun's Final Project";
        $logo = 'fa fa-paw';
        $pageID = "Final Project";
        
        
    case 'contact.php':
        $title ="Liyun Cecil's Contact Page";
        $logo = 'fa-envelope';
        $pageID = 'Contact me. Get in touch!';
        $logo_color = 'style = "color: #F5B700"';
    break;
          
    default: 
        $title = THIS_PAGE;
        $logo = ''; //no icon by default
        $pageID = 'Welcome';
}


$nav1['index.php'] = 'Welcome';
$nav1['big/index.php'] = 'Big';
$nav1['aia.php'] ='AIA';
$nav1['flowchart.php'] ='Flowchart';
$nav1['fp/index.php'] ='Final Project';
$nav1['contact.php'] ='Contact Liyun';

//Here we're creating a function to generate links and keep the highlight on the current page
/*
            <li><a href="index.php" class="selected">Welcome</a></li>
            <li><a href="big/index.php">Big</a></li>
            <li><a href="aia.php">AIA</a></li>
            <li><a href="flowchart.php">Flowchart</a></li>
            <li><a href="fp/index.php">Final Project</a></li>
            <li><a href="contact.php">Contact Liyun</a></li>
*/
function makeLinks($nav1){
    
    $myReturn = '';
    foreach($nav1 as $url => $text){
        
        if($url == THIS_PAGE){
            $myReturn .= "<li><a class=\"selected\" href=\"$url\">$text</a></li>"; 
            
        }else{
           $myReturn .= "<li><a href=\"$url\">$text</a></li>"; 
        }  
    }
    
    return $myReturn;

}

?>