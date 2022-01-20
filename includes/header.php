<?php include 'portal-config.php'?>
<!doctype html>
<html lang="en">
<head>
    <title><?=$title?></title>
    <meta name="viewport" content="width=device-width">
    <meta name="robots" content="noindex,nofollow">
    <meta charset="UTF-8">
    <script src="https://use.fontawesome.com/6a71565c22.js"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500&display=swap">
    <link rel="stylesheet" href="css/portal.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/form.css">
</head>

    
<body>
<!-- START WAPPER-->
<main class="wrapper">
<header>
<!--<header> has the semantic meaning for the browser-->
    <h1><a href="index.php"><i class="logo fa <?=$logo?>" <?=$logo_color?>></i>Liyun Cecil's SCC IT162 Portal Website</a></h1>    
    <nav>
        <ul class="topnav" id="myTopnav">
            <?=makeLinks($nav1)?>
            
            <!-- mobile view-->
            <li class="icon"><a href="javascript:void(0);" onclick="myFunction()">&#9776;</a></li>
            
        </ul>
    </nav>
</header>  

    
<!-- START LEFT COL-->
<section>
    <h2 class="pageID"><?=$pageID?></h2>