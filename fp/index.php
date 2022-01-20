<!doctype html>
<html lang="en">
<head>
    <title>Liyun Cecil's IT162 Portal Website</title>
    <meta name="viewport" content="width=device-width">
    <meta name="robots" content="noindex,nofollow">
    <meta charset="UTF-8">
    <script src="https://use.fontawesome.com/6a71565c22.js"></script>

    <link rel="stylesheet" href="../css/portal.css">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/form.css">
</head>

<body>
<!-- START WAPPER-->
<main class="wrapper">
<header>
<!--<header> has the semantic meaning for the browser-->
    <h1><a href="index.php"><i class="logo fa fa-paw"></i>Liyun Cecil's SCC IT162 Portal Website</a></h1>    
    <nav>
        <ul class="topnav" id="myTopnav">
            <li><a href="../index.php">Welcome</a></li>
            <li><a href="../big/index.php">Big</a></li>
            <li><a href="../aia.php">AIA</a></li>
            <li><a href="../flowchart.php">Flowchart</a></li>
            <li><a href="index.php" class="selected">Final Project</a></li>
            <li><a href="../contact.php">Contact Liyun</a></li>
            <li class="icon"><a href="javascript:void(0);" onclick="myFunction()">&#9776;</a></li>
        
        
        </ul>
    </nav>
</header>  

    
<!-- START LEFT COL-->
<section>
    <h2 class="pageID">Final Project</h2>
    <h3>Under Construction</h3>
</section>
<!-- END LEFT COL-->
    
    
<!-- START RIGHT COL-->
<aside>
    
    <h2>Right Column</h2>
    <!-- Self introduction-->
    <p>Lollipop liquorice toffee toffee croissant soufflé croissant gummi bears. Chocolate cake muffin marshmallow cake sesame snaps. Icing jelly-o powder.</p>

    <p>Bear claw danish croissant gingerbread. Tootsie roll cookie marzipan ice cream tiramisu gummies jujubes gummi bears. Tiramisu sweet roll lollipop chocolate cake pudding. Dessert topping pastry halvah sweet pastry tiramisu sugar plum dragée.</p>
  
    

    
</aside>
<!-- END RIGHT COL-->
   
    
<!-- START FOOTER-->
<footer>
    <p><small>&copy; 2020 - <?=date('Y')?> by <a href="contact.php" target="_blank">Liyun Cecil</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
</footer>
<!-- END FOOTER-->

    
<!--JS associated with W3Schools.com Top Nav Response Exercise-->
<script>
    /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}    
</script>    
    
    
</main>
<!-- END MAIN WRAPPER-->
    
</body>


</html>