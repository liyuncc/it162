<?php include "includes/header.php"; ?>

<!--contact page image here-->
<img src="images/contact_big.jpg" alt="sea otter says hi" class="desktop">
<img src="images/contact_tablet.jpg" alt="seal says hi" class="tablet">
<img src="images/contact_phone.png" alt="sea turtle says hi" class="phone">

</section>
<!-- END LEFT COL-->
    
    
<!-- START RIGHT COL-->
<aside id="contact_form">
<!--    <h2>Drop me a line! </h2>-->
    
    	<?php

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "liyuncecil@gmail.com";  //place your/your client's email address here
        $toName = "Liyun Cecil"; //place your client's name here
        $website = "Liyun's IT 162 Portal Contact Form";  //place NAME of your client's website

//      echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	?>

</aside>
<!-- END RIGHT COL-->
    
<?php include "includes/footer.php"; ?>
