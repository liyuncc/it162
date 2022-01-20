<?php include 'big-config.php'; ?>

<!doctype html>
<html lang="en">
<head>
    <title><?=$title?></title>
    <meta name="viewport" content="width=device-width">
    <meta name="robots" content="noindex,nofollow">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Karla&family=Rubik:wght@500&display=swap">
    <link rel="stylesheet" href="css/big.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    
<!--    ADD GOOGLE FONTS LINK HERE-->
    
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
    <script src="js/script.js"></script>
    
</head>

<body>
<!-- START WAPPER-->
<div class="wrapper">
    <header>
    <!--<header> has the semantic meaning for the browser-->
        <h1><a href="index.php"><i class="fa <?=$logo?>"></i>Liyun Cecil's BIG Project</a></h1>    

        <nav id="cssmenu"> 
            <ul>
                 <li><a href="../index.php"><span><i class="fa fa-home"></i> IT162 Portal</span></a></li>
                 <li><a href="index.php"><span><i class="fa fa-graduation-cap"></i> BIG</span></a></li>
                 <li><a href="flexbox.php"><span><i class="fa fa-th-large"></i> Flexbox</span></a></li>
                 <li><a href="galleries.php"><span><i class="fa fa-camera-retro"></i> Galleries</span></a></li>
                 <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i> Google</span></a>
                    <ul>
                       <li><a href="calendar.php"><span><i class="fa fa-calendar"></i> Calendar</span></a></li>
                       <li><a href="map.php"><span><i class="fa fa-globe"></i> Map</span></a></li>
                       <li><a href="youtube.php"><span><i class="fa fa-youtube-play"></i> YouTube</span></a></li>
                    </ul>
                 </li>
                 <li><a href="shoppingcarts.php"><span><i class="fa fa-shopping-cart"></i> Shopping Carts</span></a></li>
                 <li><a href="siteapp.php"><span><i class="fa fa-fw fa-html5"></i> Site vs App</span></a></li>
                 <li><a href="webcam.php"><span><i class="fa fa-video-camera"></i> Web Cam</span></a></li>
            </ul>
        </nav>

    </header>  

<div class="row">
    <!-- START LEFT COL-->
    <div class="leftcol">
        <h2 class="pageID"><?=$pageID?></h2>